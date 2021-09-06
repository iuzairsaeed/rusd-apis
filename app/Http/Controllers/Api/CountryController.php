<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Repositories\Repository;
use App\Http\Requests\CountryRequest;

class CountryController extends Controller
{
    
    protected $model;

    public function __construct(Country $model)
    {
        // $this->middleware('permission:plan-list|plan-create|plan-edit|plan-delete', ['only' => ['index','show','getList']]);
        // $this->middleware('permission:SecurityQuestion-create', ['only' => ['create','store']]);
        // $this->middleware('permission:SecurityQuestion-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:SecurityQuestion-delete', ['only' => ['destroy']]);
        $this->model = new Repository($model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Country $request)
    {
        $orderableCols = [];
        $searchableCols = [];
        $whereChecks = ['user_id'];
        $whereOps = ['='];
        $whereVals = [auth()->id()];
        $with = [];
        $withCount = [];
        $currentStatus = [];
        $withSums = [];
        $withSumsCol = [];
        $addWithSums = [];
        $whereHas = null;
        $withTrash = false;

        $data = $this->model->getDataApi($request, $with, $withTrash, $withCount, $whereHas, $withSums, $withSumsCol, $addWithSums, $whereChecks,
                                        $whereOps, $whereVals, $searchableCols, $orderableCols, $currentStatus);
                                    
        return response($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request,Country $country)
    {
        try {
            $data = $request->all();
            foreach ($data as $key => $value) {
                $data[$key]["user_id"] = auth()->id();
                $data[$key]["created_at"] = now();
            }
            if(auth()->user()->status == CompleteProfile()){
                return response(['message'=>'Please complete your profile first!'],404);
            }
            auth()->user()->nationality != null ? auth()->user()->step()->sync(3) : null;
            $this->model->insert($data , $country);
            $response['status_warning'] = auth()->user()->status;
            $response['step'] = auth()->user()->step;
            return response([
                'message'=>'Country has been Added Successfully!',
                'data'=>$response
            ],200);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
