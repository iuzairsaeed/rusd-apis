@extends('layouts.master')

@section('content')
<div class="container-fluid bg-banner" style="background-size: 100%;background-repeat: repeat;">
	<div class="row">
		<!-- left side -->
		@include('layouts.sidebar')
		<!-- left side -->


		<!-- Right side -->
		<div class="col-sm-10" style="box-shadow: inset -1px 10px 24px #dcdcdc;">
			<div class="col-sm-12 p-4">
					<div class="w-100 d-flex flex-wrap">
						<h4 class="helveticafont colorblack mb-0"><a href="#" class="mr-3 align-top" style="line-height: 1.1">
							<img src="{{asset('images/assets/login/asset37.png')}}" width="27"></a>RUSD Sukuk Fund</h4>
					</div> 

					
					<!-- graph -->
					<div class="w-100 mt-5 position-relative">
						<ul class="nav nav-tabs tabgraph" role="tablist">
						    <li class="nav-item">
						      <a class="nav-link active coloryellow pl-4 pr-4 fontsize14px" data-toggle="tab" href="#seven">1 Days</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link coloryellow pl-4 pr-4 fontsize14px" data-toggle="tab" href="#thirdy">MTH</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link coloryellow pl-4 pr-4 fontsize14px" data-toggle="tab" href="#ytd">YTD</a>
						    </li>
						  </ul>

						  <div class="tab-content">
						    <div id="seven" class="tab-pane active">
						    	<div class="w-100 bg-white d-flex flex-wrap p-3 borderradius15px" style="box-shadow: 1px 1px 16px #e4e4e4;">
						    		<div class="col-sm-6 p-0">
						    			<h6 class="fontsize12px" style="color: #eb8e3c;">Last NAV (AED)</h6>
						    			<h4 class="helveticafont">1,265.00 <span class="fontsize15px" style="color:#ccc;">AED </span></h4>
						    		</div>
						    		<div class="col-sm-6 text-right">
						    			<div class="dropdown">
										  <button type="button" class="btn dropdown-toggle hide-toggle p-0" data-toggle="dropdown" style="font-size: 40px;color:#ccc;">
										    	<i class="fa fa-ellipsis-h"></i>
										  </button>
										  <div class="dropdown-menu leftmove">
										    <a class="dropdown-item fontsize12px" href="#">Lorem</a>
										    <a class="dropdown-item fontsize12px" href="#">Days</a>
										    <a class="dropdown-item fontsize12px" href="#">Set</a>
										  </div>
										</div>
						    		</div>

						    		 <!-- chart -->
						     		<div id="sevenchart" style="height: 300px; width: 100%;"></div>
						     	</div>
						    </div>
						    
						  </div>
				</div>
	
					<!-- graph -->


					<!-- record table -->
					<div class="w-100 mt-4">
						<table class="table border-0 w-100">
							<thead>
							<tr class="text-center lightblackcolor helveticafont d-inline-flex w-100">
								<th class="border-0 font-weight-light col-sm-3">Date</th>
								<th class="border-0 font-weight-light col-sm-3">Price</th>
								<th class="border-0 font-weight-light col-sm-3">Month</th>
								<th class="border-0 font-weight-light col-sm-3">Inception</th>
							</tr>
							<thead>
							<tbody>
								<tr class="text-center helveticabold-font d-inline-flex w-100 bg-white borderradius30px mb-3" 
								style="box-shadow: 2px 3px 16px #e8e8e8;">
									<td class="border-0 pt-3 pb-3 col-sm-3">30 May 19</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">264.35</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">0.30%</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">40.38%</td>
								</tr>
								<tr class="text-center helveticabold-font d-inline-flex w-100 bg-white borderradius30px mb-3"
								style="box-shadow: 2px 3px 16px #e8e8e8;">
									<td class="border-0 pt-3 pb-3 col-sm-3">30 May 19</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">264.35</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">0.30%</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">40.38%</td>
								</tr>
								
								<tr class="text-center helveticabold-font d-inline-flex w-100 bg-white borderradius30px mb-3"
								style="box-shadow: 2px 3px 16px #e8e8e8;">
									<td class="border-0 pt-3 pb-3 col-sm-3">30 May 19</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">264.35</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">0.30%</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">40.38%</td>
								</tr>
								<tr class="text-center helveticabold-font d-inline-flex w-100 bg-white borderradius30px mb-3"
								style="box-shadow: 2px 3px 16px #e8e8e8;">
									<td class="border-0 pt-3 pb-3 col-sm-3">30 May 19</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">264.35</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">0.30%</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">40.38%</td>
								</tr>
								<tr class="text-center helveticabold-font d-inline-flex w-100 bg-white borderradius30px mb-3"
								style="box-shadow: 2px 3px 16px #e8e8e8;">
									<td class="border-0 pt-3 pb-3 col-sm-3">30 May 19</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">264.35</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">0.30%</td>
									<td class="border-0 pt-3 pb-3 col-sm-3">40.38%</td>
								</tr>
								

							</tbody>
						</table>
					</div>


					<div class="w-100 mt-5">
						<h4 class="helveticafont colorblack mb-4"> Actual Performance Data </h4>
						<div id="performancechart" style="height: 300px; width: 100%;"></div>

					</div>

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>


@stop

@section('scripts')
<script type="text/javascript">
	//seven days chart js

  window.onload = function () {

var chart = new CanvasJS.Chart("sevenchart", {
  animationEnabled: true,  
  title:{
    text: ""
  },
  axisY: {
    title: "",
    tickThickness: 1,
    valueFormatString: "#0,,.",
    suffix: "%",
    prefix: ""
  },
  data: [{
    type: "splineArea",
    color: "rgb(92 144 94)",
    markerSize: 5,
    xValueFormatString: "DD MMM",
    yValueFormatString: "$##0.00",
    dataPoints: [
      { x: new Date(2020, 1), y: 2389000 },
      { x: new Date(2020, 3), y: 3830000 },
      { x: new Date(2020, 5), y: 2009000 },
      { x: new Date(2020, 7), y: 2840000 },
      { x: new Date(2020, 9), y: 2396000 },
      { x: new Date(2020, 11), y: 1613000 },
      { x: new Date(2020, 13), y: 2821000 },
      { x: new Date(2020, 15), y: 2000000 },
      { x: new Date(2020, 17), y: 1397000 },
      { x: new Date(2020, 19), y: 2506000 },
      { x: new Date(2020, 21), y: 2798000 }
    ]
  }]
  });
chart.render();
	


var chart = new CanvasJS.Chart("performancechart", {
  animationEnabled: true,  
  title:{
    text: ""
  },
  axisY: {
    title: "",
    tickThickness: 1,
    valueFormatString: "#0,,.",
    suffix: "%",
    prefix: ""
  },
  data: [{
    type: "splineArea",
    color: "rgb(92 144 94)",
    markerSize: 5,
    xValueFormatString: "DD MMM",
    yValueFormatString: "$##0.00",
    dataPoints: [
      { x: new Date(2020, 1), y: 2389000 },
      { x: new Date(2020, 3), y: 3830000 },
      { x: new Date(2020, 5), y: 2009000 },
      { x: new Date(2020, 7), y: 2840000 },
      { x: new Date(2020, 9), y: 2396000 },
      { x: new Date(2020, 11), y: 1613000 },
      { x: new Date(2020, 13), y: 2821000 },
      { x: new Date(2020, 15), y: 2000000 }
    ]
  }]
  });
chart.render();
}
</script>
@stop