@extends('layouts.master')

@section('content')
<div class="container-fluid bg-banner" style="background-size: 100%;background-repeat: no-repeat;">
	<div class="row">
		<!-- left side -->
		@include('layouts.sidebar')
		<!-- left side -->


		<!-- Right side -->
		<div class="col-sm-10" style="box-shadow: inset -1px 10px 24px #dcdcdc;">
			<div class="col-sm-12 p-4">
					<div class="w-100 d-flex flex-wrap">
						<h4 class="helveticafont colorblack mb-0"><a href="#" class="mr-3 align-top" style="line-height: 1.1">
							<img src="{{asset('images/assets/login/asset37.png')}}" width="27"></a>Money Market</h4>
					</div> 

					<!-- form -->
						<form class="w-100" method="post" action="">
							<div class="w-100 mt-3 d-flex flex-wrap bg-white borderradius15px p-3">
							<div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
                          		<label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                                    Target First Investment</label>
                             
                                  <input type="tel" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" placeholder="Enter Amount" name="target_first" required>
                            </div>		
					
						 <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
                               <label class="text-capitalize fontsize13px greycolor helveticafont">Investment Frequency</label>
                              	 <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="employee" required>
                                           <option>Select</option>
                                            <option>Daily</option>
                                             <option>Weekly</option>
                                             <option>Monthly</option>
                                        </select>
                                </div>

                             <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
                          <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                                    Periodic Investment Amount</label>
                             
                                  <input type="tel" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" placeholder="Enter Amount" name="periodic_invest" required>
                            </div>	

                            <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
                               <label class="text-capitalize fontsize13px greycolor helveticafont">How Liquid You Intend Yo Be </label>
                              	 <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="employee" required>
                                           <option>Select</option>
                                            <option>Daily</option>
                                             <option>Weekly</option>
                                             <option>Monthly</option>
                                        </select>
                                </div>

                                <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
		                          <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
		                                    Target Investment Horizon </label>
                             
                                  <input type="tel" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" placeholder="No. of Months" name="target_invest" required>
                            </div>	

                            <div class="col-sm-3 offset-sm-6 pl-1 pr-1 mt-2 form-group">
                            	<button type="submit" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-12 fontsize14px pt-3 pb-3 nexthover">Show Result</button>
                            </div>

						</div>
					</form>
					<!-- form -->


					<!-- graph -->
					<div class="w-100 mt-5">
						<h4 class="helveticafont colorblack mb-4">Results Based On Input </h4>
						<div class="bg-white w-100 borderradius15px p-4" style="box-shadow: 1px 1px 16px #e4e4e4;">
							<div id="moneychart" style="height: 300px; width: 100%;"></div>
						</div>
					</div>
					<!-- graph -->

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
@stop


@section('scripts')

<script type="text/javascript">
	
  //umrah chart js

  window.onload = function () {

var chart = new CanvasJS.Chart("moneychart", {
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
    color: "rgb(235 142 60)",
    markerSize: 5,
    xValueFormatString: "DD MMM",
    yValueFormatString: "$##0.00",
    dataPoints: [
      { x: new Date(2020, 1), y: 3289000 },
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



