<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
	    try {
	    	$validator = Validator::make($request->all(), [
	            'email' => 'required|email',
	            'password' => 'required',
	        ]);

	        if($validator->fails()){
	            return response()->json([
                    'status'  => false,
                    'message' => $validator->errors(),
                    'code'    => 404
                ], 404); 


	        }

	        $credentials = request(['email', 'password']);

	        if (!Auth::attempt($credentials)) {
			      return response()->json([
			      	'data' 		=> NULL,
			        'message'	=> 'Invalid credentials!',
			        'code' 		=> 500
			      ]);
			}

			$user = User::where('email', $request->email)->first();

		    if ( ! Hash::check($request->password, $user->password, [])) {
		       return response()->json([
		       		'data'	  => NULL,
	                'success' => false,
	                'message' => 'Invalid credentials!'
	            ], 400);
		    }

		    $tokenResult  = $user->createToken('authToken')->plainTextToken;

		    return response()->json([
	            'success' => true,
	            'token'   => $tokenResult,
	      		'token_type' => 'Bearer',
	            'data' 		 => $user,
	            'code'		 => 200
	        ],200);

	    } catch (Exception $error) {
			    return response()->json([
			      'status_code' => 500,
			      'message' 	=> 'Error in Login',
			      'error' 		=> $error,
			    ]);
		}


    }


    public function signUp(Request $request)
    {
    	$rules = [
	        'email'    => 'unique:users|required|min:3',
	        'password' => 'required|min:5',

	    ];

    	$validator = Validator::make($request->all(), $rules);
	    if ($validator->fails()) {

	    	return response()->json([
                    'status'  => false,
                    'message' => $validator->errors(),
                    'code'    => 404
                ], 404); 
	    	
	        // return response()->json($validator->errors());
	    }

	    $user = User::create([

            'email' 	=> $request->email,
            'password'  => Hash::make($request->password),
            'form_step' => 0,
            'role_id'	=> 1 // role id 1 for app user

        ]);

        $user->sendApiEmailVerificationNotification();

 
       return response()->json([
       	"data" 		=> $user,
       	"message" 	=> "Verification email has been sent to your account",
       	 "code" 	=> 200
       ]);

    }
}
