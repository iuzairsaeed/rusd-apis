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

        switch ($type) {
            case 'money-market':
                return $this->moneyMarket($request);
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
        // return $request->all();
        $investmentHorizon          = !empty($request->target_investment_horizon) ? $request->target_investment_horizon : 0 ;
        $targetFirstInvestment      = strtotime(date("Y-m-d"));
        $periodicInvestmentAmount   = !empty($request->periodic_investment_amount) ? $request->periodic_investment_amount : 0 ;
        $profitRate                 = 2; // 2%


        $targetFirstInvestmentAmount = !empty($request->first_investment) ? $request->first_investment : NULL ; //Target First Investment


        $totalDaysOfUnit = ($investmentHorizon * 30) + 4;

        // return $totalDaysOfUnit;

        $mainTotalDays = 0;

        //  1 month add into  datetime
        $m = 0;

        $substDays = "";
        $profits = '-';
        $totalWithProfit = '-';


        $table = '';

        $table .= '<style>
                    table.tableizer-table {
                    font-size: 12px;
                    border: 1px solid #CCC; 
                    font-family: Arial, Helvetica, sans-serif;
                } 
                .tableizer-table td {
                    padding: 4px;
                    margin: 3px;
                    border: 1px solid #CCC;
                }
                .tableizer-table th {
                    background-color: #104E8B; 
                    color: #FFF;
                    font-weight: bold;
                }
                    </style>
                <table class="tableizer-table" align="center">
                   <thead>
                      <tr class="tableizer-firstrow">
                         <th></th>
                         <th>Equity</th>
                         <th>Profit Rate</th>
                         <th>No of days</th>
                         <th>Profits</th>
                         <th>Total</th>
                      </tr>
                   </thead>';

        for ($i=0; $i < $investmentHorizon ; $i++) { 
           
            $targetFirstInvestment = strtotime('+'.$m.' month', $targetFirstInvestment);

            $month = date('d-M', $targetFirstInvestment);
            $daysInMonth = date('t', $targetFirstInvestment);
            $mainTotalDays = $mainTotalDays + $daysInMonth;

            /*profit total for first investment*/
            if ($i == 0) {
                if (!empty($targetFirstInvestmentAmount)) {
                    $profits =((($targetFirstInvestmentAmount*$profitRate)*$totalDaysOfUnit)/365) / 100;
                    $profits = round($profits,2);
                    $totalWithProfit = $targetFirstInvestmentAmount+$profits;
                }
            }
            /*end*/



            $table .= '
                 <tr>
                     <td>'.$month.'</td>
                     <td>'.($i == 0  ? $targetFirstInvestmentAmount : $periodicInvestmentAmount).' </td>
                     <td>'.$profitRate.'%</td>
                     <td>'.$totalDaysOfUnit.'</td>
                     <td>'.$profits.'</td>
                     <td>'.$totalWithProfit.'</td>
                </tr>
            ';


            // echo $month ." -- total =>".$daysInMonth." - -- ".$totalDaysOfUnit." -- "."<br>";

            $totalDaysOfUnit = $totalDaysOfUnit - $daysInMonth;
            $profits =((($periodicInvestmentAmount*$profitRate)*$totalDaysOfUnit)/365) / 100;

            $profits = round($profits,2);

            $totalWithProfit = $periodicInvestmentAmount+$profits;

            // for plus 1
            $m ++;
            // after 0 set default 1
            $m = 1;
     
        }

        $table .="</table>";

        // if (!empty($request->target_investment_horizon)) {
        //     $data['table'] = $table;
        //     return view('checkcal',$data);
        // }

        $data['table'] = $table;
        return view('checkcal',$data);

        // echo $table;

        // $date1  = '2020-05-01';
        // $date2  = '2021-05-01';
        // $output = [];
        // $time   = strtotime($date1);
        // $last   = date('d-M-Y', strtotime($date2));

        // do {
        //     $month = date('d-M-Y', $time);
        //     $total = date('t', $time);



        //     echo "month == ".$month." | ".$total ."-- total days -".$totalDaysOfUnit."<br>";
        //     $totalDaysOfUnit = $totalDaysOfUnit - $total;

        //     // $output[] = [
        //     //     'month' => $month,
        //     //     'total' => $total,
        //     // ];

        //     $time = strtotime('+1 month', $time);
        // } while ($month != $last);


        // var_dump($output);

        // $start    = new \DateTime('2020-05-01');
        // $start->modify('first day of this month');
        // $end      = new \DateTime('2021-05-01');
        // $end->modify('first day of next month');
        // $interval = \DateInterval::createFromDateString('1 month');
        // $period   = new \DatePeriod($start, $interval, $end);

        // foreach ($period as $dt) {
        //     echo $dt->format("Y-M-d") . "<br>\n";
        // }

        // return $request->all();
        return view('checkcal');
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
