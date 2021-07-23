@php
    $currentDate=\Illuminate\Support\Carbon::now()->format('d M,Y - H:i A');
    $currentMonthYear=\Illuminate\Support\Carbon::now()->format('Ym');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rusd Report</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #000;
        text-align: left;
        padding: 8px;
        font-size: 9px;
        }

        tr:nth-child(even) {
        background-color: #fff;
        }
    </style>
</head>
<body>
    @if ($checkout[0]->department_id==3)
    <div class="container-fluid" style="margin-top: 30px">
        
        <div style="text-align:center">
            <img src="{{ asset('favicon.ico') }}" alt="logo" style="width: 20%;"/>
            <br>
            <small>info@rusd.net.pk <br>
                +92-21-34891371-4 <br>
                Suit#205 2nd Floor Mashriq Centre, <br>
                Block#14 Gulshan-e-Iqbal, Stadium Road Karachi.
            </small>
        </div>
        <hr style="border-bottom: 1px solid rgb(206, 187, 187);width:90%">
        <div class="row">
            <div style=" margin-top:2%">
                <div style="font-family: arial, sans-serif;color:#fff;background-color: rgb(61, 61, 180);padding:10px;border:1px solid black;width:150px">Stock Out Report</div>
                <br>
                <small style="font-weight: bold;font-family:arial,sans-serif">For Sales Only*</small>

                <table style="border:1px solid black;width:20%">
                    <tr>
                        <td>Date # {{$currentDate}}</td>
                    </tr>
                </table>                
                <br>
                <br>
                <small style="font-weight: bold;font-family:arial,sans-serif">Report Details</small>
                <table style="border:1px solid black;width:80%;font-size:12px !important">
                    <tr>
                        <td>
                            Reference CO #: {{$checkout[0]->id }}- {{$checkout->last()->id}}<br>
                            Department: {{$checkout[0]->department->name}}<br>
                        </td>
                        <td>
                            Start Date: {{\Illuminate\Support\Carbon::parse($start_date)->format('d, M-Y')}}<br>
                            End Date: {{\Illuminate\Support\Carbon::parse($end_date)->format('d, M-Y')}}<br>
                        </td>
                    </tr>
                </table> 
            </div>
        </div>
        <br>
        <br>
        <div style="text-align:center">
            <small style="font-weight: bold;font-family:arial,sans-serif;">Stock-Out Details Item Wise</small>
        </div>
            <table style="border:1px solid black;width:90%">
                {{-- <thead style="background: black;color:white;height:15px"> --}}
                    <tr>
                        <th>S.No</th>
                        <th>Description</th>
                        <th>Serial No.</th>
                        <th>Unit</th>
                        <th>Quanitity</th>
                        <th>Price</th>
                        <th>Amount</th>
                    </tr>
                {{-- </thead> --}}
                {{-- <tbody> --}}
                    @php
                        $a=1;
                        $totalPrice=0;
                    @endphp
                    @foreach ($checkout as $checkouts)
                    @php
                        $created_at=\Illuminate\Support\Carbon::parse($checkouts->created_at)->format('d M,Y - H:i A');
                    @endphp
                        @foreach ($checkouts->products as $k => $p)
                            @php
                                $totalPrice = $totalPrice + ($quantity[$checkouts->id][$k] * $price[$checkouts->id][$k]);
                            @endphp
                            <tr>
                                <td>{{$a}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->serial_no==null ? '-' :$p->serial_no}}</td>
                                <td>{{$p->units}}</td>
                                <td>{{$quantity[$checkouts->id][$k]}}</td>
                                <td>{{$price[$checkouts->id][$k]}}</td>
                                <td>{{$quantity[$checkouts->id][$k] * $price[$checkouts->id][$k]}}</td>
                            </tr>
                        @endforeach
                    @php
                        $a++;
                    @endphp
                    @endforeach
                {{-- </tbody> --}}
            </table>
            <small style="margin-left:55%;margin-top:15px;"> Total Amount: </small>
           <div style="height:2%;width: 20%;float:right;font-size:12px;margin-top:1%;margin-right:10% !important;border:1px solid #000">
            &nbsp;&nbsp;Rs {{$totalPrice ?? ""}}
            </div>  
        <div>
            
        </div>
            
    </div> 


    @else
    
    
    <div class="container-fluid" style="margin-top: 30px">
        
        <div style="text-align:center">
            <img src="{{ asset('favicon.ico') }}" alt="logo" style="width: 20%;"/>
            <br>
            <small>info@rusd.net.pk <br>
                +92-21-34891371-4 <br>
                Suit#205 2nd Floor Mashriq Centre, <br>
                Block#14 Gulshan-e-Iqbal, Stadium Road Karachi.
            </small>
        </div>
        <hr style="border-bottom: 1px solid rgb(206, 187, 187);width:90%">
        <div class="row">
            <div style=" margin-top:2%">
                <div style="font-family: arial, sans-serif;color:#fff;background-color: rgb(61, 61, 180);padding:10px;border:1px solid black;width:150px">Stock Out Report</div>
                <br>

                <table style="border:1px solid black;width:20%">
                    <tr>
                        <td>Date#{{$currentDate}}</td>
                    </tr>
                </table>                
                <br>
                <br>
                <small style="font-weight: bold;font-family:arial,sans-serif">Report Details</small>
                <table style="border:1px solid black;width:80%;font-size:12px !important">
                    <tr>
                        <td>Reference CO # : {{$checkout[0]->id }}- {{$checkout->last()->id}}<br>
                            Department: {{$checkout[0]->department->name}}<br>
                        </td>
                        <td>
                            Start Date: {{\Illuminate\Support\Carbon::parse($start_date)->format('d, M-Y')}}<br>
                            End Date: {{\Illuminate\Support\Carbon::parse($end_date)->format('d, M-Y')}}<br>
                        </td>
                    </tr>
                </table> 
            </div>
        </div>
        <br>
        <br>
        <div style="text-align:center">
            <small style="font-weight: bold;font-family:arial,sans-serif;">Stock-Out Details Item Wise</small>
        </div>
            <table style="border:1px solid black;width:90%">
                {{-- <thead style="background: black;color:white;height:15px"> --}}
                    <tr>
                        <th>S.No</th>
                        <th>Description</th>
                        <th>Serial No.</th>
                        <th>Unit</th>
                        <th>Quanitity</th>
                    </tr>
                {{-- </thead> --}}
                {{-- <tbody> --}}
                    @php
                        $a=1;
                    @endphp
                    @foreach ($checkout as $checkouts)
                    @php
                        $created_at=\Illuminate\Support\Carbon::parse($checkouts->created_at)->format('d M,Y - H:i A');
                    @endphp
                        @foreach ($checkouts->products as $k => $p)
                            <tr>
                                <td>{{$a}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->serial_no==null ? '-' :$p->serial_no}}</td>
                                <td>{{$p->units}}</td>
                                <td>{{$quantity[$checkouts->id][$k]}}</td>
                            </tr>
                        @endforeach
                    @php
                        $a++;
                    @endphp
                    @endforeach
                {{-- </tbody> --}}
            </table>
        <div>
        </div>
    @endif

    <div id="poweredBy" style="
        font-size: 0.8em;
        color: rgb(0, 0, 0);
        text-align: center;
        bottom: 40px;
        position:fixed;
        width: 100%;
    ">This is a system generated report <br> Generated By: {{Auth::user()->name}} on {{$currentDate}}
    </div>
</body>
</html>

