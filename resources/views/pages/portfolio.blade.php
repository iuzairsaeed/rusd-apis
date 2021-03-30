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
						<ul class="p-0 mt-2 mb-0 list-unstyled">
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">Dashboard</h4></li>
							<li class="d-inline-block align-text-bottom"><i class="fa fa-caret-right pr-4 pl-4" style="font-size: 14px !important;"></i></li>
							<li class="d-inline-block align-text-bottom"><p class="fontsize14px mb-0 greycolor helveticafont">Portfolio</p></li>
						</ul>
					</div> 

					<!-- graph -->
					<div class="w-100 mt-5 position-relative">
						<ul class="nav nav-tabs tabgraph" role="tablist">
						    <li class="nav-item">
						      <a class="nav-link active coloryellow pl-4 pr-4 fontsize14px" data-toggle="tab" href="#seven">7 Days</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link coloryellow pl-4 pr-4 fontsize14px" data-toggle="tab" href="#thirdy">30 Days</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link coloryellow pl-4 pr-4 fontsize14px" data-toggle="tab" href="#ytd">YTD</a>
						    </li>
						  </ul>

						  <div class="tab-content">
						    <div id="seven" class="tab-pane active">
						    	<div class="w-100 bg-white d-flex flex-wrap p-3 borderradius15px" style="box-shadow: 1px 1px 16px #e4e4e4;">
						    		<div class="col-sm-6 col-8 p-0">
						    			<h6 class="fontsize12px" style="color: #eb8e3c;">Portfolio Value</h6>
						    			<h4 class="helveticafont">3,411.00 <span class="fontsize15px" style="color:#ccc;">AED </span></h4>
						    		</div>
						    		<div class="col-sm-6 col-4 text-right">
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
						<!-- <div class="aspect-ratio bg-white borderradius15px p-2">
						    <canvas id="moneymarket"></canvas>
						  </div> -->
					<!-- graph -->


					<div class="d-flex flex-wrap mt-5 w-100">
						<h4 class="helveticafont w-100 mb-3 fontsize22px">Portfolio Holdings</h4>
	
						<div class="col-sm-6 pl-2 pr-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4 fontadjust" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					                <div class="media-body mt-1 pr-3">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">RUSD Sukuk Fund <div class="col-auto float-right lightblackcolor">AED 1,265.00</div></h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">Risk level 3 <span class="col-auto float-right" style="color:#6ab172;">+ AED 265.00</span></p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;">
					                  	<a href="{{url('/sukukfund')}}"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></a></div>
					                </div>
					              </div> 
					            </div>
					        </div>
	
					        <div class="col-sm-6 pl-2 pr-2">
								<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4 fontadjust" 
								style="box-shadow: 1px 1px 20px #e2e2e2;">
					         	 <div class="media position-relative">
					                <div class="media-body mt-1 pr-3">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">RUSD Money Market Fund 
					                  	<div class="col-auto float-right lightblackcolor">AED 2,465.00</div></h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">High market cap trust <span class="col-auto float-right" style="color:#6ab172;">+ AED 300.00</span></p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;">
					                  	<a href="{{url('/sukukfund')}}"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></a></div>
					                </div>
					              </div> 
					            </div>
					        </div>


					        <div class="col-sm-6 pl-2 pr-2">
								<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4 fontadjust" 
								style="box-shadow: 1px 1px 20px #e2e2e2;">
					         	 <div class="media position-relative">
					                <div class="media-body mt-1 pr-3">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">RUSD Umrah Goal Fund
					                  	<div class="col-auto float-right lightblackcolor">AED 1,000.00</div></h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">High market cap trust <span class="col-auto float-right" style="color:#6ab172;">+ AED 300.00</span></p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;">
					                  	<a href="{{url('/sukukfund')}}"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></a></div>
					                </div>
					              </div> 
					            </div>
					        </div>
					   </div>
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
    color: "rgb(56 99 61)",
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

}
</script>


@stop