<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Repositories\Repository;
use App\Http\Requests\CitizenRequest;
use App\Models\Citizen;

class CitizenController extends Controller
{
    protected $model;

    public function __construct(Citizen $model)
    {
        // $this->middleware('permission:citizen-list|citizen-create|citizen-edit|citizen-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:citizen-create', ['only' => ['create','store']]);
        // $this->middleware('permission:citizen-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:citizen-delete', ['only' => ['destroy']]);
        $this->model = new Repository($model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Citizen $request)
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
    public function store(CitizenRequest $request)
    {
        try {
            $data = $request->except(['step_no']);
            $data["user_id"] = auth()->id();
            $response = $this->model->create($data);
            return response(['message'=>'Submitted Successfully!'],200);
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
    public function update(CitizenRequest $request, Citizen $citizen)
    {
        try {
            $data = $request->all();
            $this->model->update($data, $citizen);
            return response(['message'=>'Submitted Successfully!'],200);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
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
