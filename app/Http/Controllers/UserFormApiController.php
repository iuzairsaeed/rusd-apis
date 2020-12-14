<?php

namespace App\Http\Controllers;

use App\UserForm;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;

class UserFormApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * create and update form data step
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveUpdate(Request $request)
    {
        $req = \Request::all();
        // validate array for all request
        $validate = [];
        foreach ($req as $rKey => $rValue) {
            $validate[$rKey] = 'required';
        }

        $validator = Validator::make($request->all(), $validate);
        // request is not validate 
        if($validator->fails()){
                return response()->json([
                    'status'  => false,
                    'message' => $validator->errors(),
                    'code'    => 404
                ], 404); 
        }


        $userId = Auth::user()->id;
        // form creating [heading or table] title replace space  with _ and convert letter in lowercase
        $headingName = str_replace(' ', '_', strtolower($request->heading_name));

        foreach ($req as $postKeyName => $postKeyValue) {
            $userForm = UserForm::where('user_id',$userId)->where('key',$postKeyName)->first();
            // check form data empty then save enteries never update
            if (empty($userForm)) {
                $userForm   = new UserForm;
                $user       = User::find($userId);
                $user->form_step = $request->step;
                $user->save(); 
            }

            // check if form step is documents_upload
            // if ( $headingName == "documents_upload") {
            //     // check key name for image type
            //     if ( $postKeyName == "") {
            //         # code...
            //     }
            // }
            $userForm->user_id       = $userId;
            $userForm->key           = $postKeyName;
            $userForm->value         = $postKeyValue;
            $userForm->heading_name  = $headingName;
            $userForm->step_no       = $request->step;
            $userForm->save();

        }

        return response()->json([
                'success'    => true,
                'data'       => $req ,
                'step'       => $request->step,
                'message'    => 'success',
                'code'       => 200
            ],200);

    }


    public function getFormDataByStep()
    {

        $req = \Request::all();
        $userId = Auth::user()->id;

        $userForm = UserForm::where('user_id',$userId)->where('step_no',$req['step'])->get();
        $data = [];

        // convert key as column and value as column value
        foreach ($userForm as $key => $value) {

            if ( $value->key != 'heading_name' ) {
                $data[] = [$value->key => $value->value];
            }

        }

        return response()->json([
                'success'    => true,
                'data'       => $data,
                'message'    => 'success',
                'code'       => 200
            ],200);
    }


}
