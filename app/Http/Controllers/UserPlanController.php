<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class UserPlanController extends Controller
{
    /**
     * calculator method for userplan
     *
     */
    public function calculator(Request $request,$type)
    {
        dd(1);
        switch ($type) {
            case 'money-market':
                $this->moneyMarket($request);
                break;
            
            default:
                # code...
                break;
        }
        //
    }

    /**
     * calculator for money market
     *
     * @return \Illuminate\Http\Response
     */
    public function moneyMarket($request)
    {
        return $request->all();
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * all plans
     *
     * @return \Illuminate\Http\Response
     */
    public function plans(Request $request)
    {
        
         try {
            $plans = Plan::where('type',$request->type)->get();

            foreach ($plans as $key => $value) {
                $value->plans_meta = $value->plansMetaKeys($value->id);
            }

            return response()->json([
                "data"      => $plans,
                "message"   => "success",
                 "code"     => 200
            ]);


        } catch (\Swift_TransportException $ex) {
           return response()->json([
                "data"      => NULL,
                "message"   => "fail",
                 "code"     => 400
            ]);
        }

    }
}
