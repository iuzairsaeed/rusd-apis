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
							<img src="{{asset('images/assets/login/asset37.png')}}" width="27"></a>Umrah</h4>
					</div> 

					<!-- form -->
						<form class="w-100" method="post" action="">
							<div class="w-100 mt-4 d-flex flex-wrap bg-white borderradius15px p-3">
							<div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
								      <div class="btn-group btn-group-toggle calculate-toggle" data-toggle="buttons">
								        <label class="btn active" role="button">
								          <input type="radio" name="calculate" value="1" required>Help Me To Calculate My Umrah Trip Indicative Amount
								        </label>
								        <label class="btn" role="button">
								          <input type="radio" name="calculate" value="0">Help Me To Calculate My Umrah Trip Indicative Amount
								        </label>
								      </div>
                            </div>		
					
						 <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
						 		<span class="text-uppercase fontsize9px d-block" style="color:#e96c00;margin:-1.6em 0px 0em;">(TRIP IS CONSIDERED TO BE FOR 15 DAYS)</span>
                               <label class="text-uppercase fontsize11px greycolor helveticafont"> Target Trip Date</label>
                              	    <input type="date" class="border borderblack fontsize15px helveticafont borderradius30px p-2 pl-3 pr-3 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="tripdate" required>
                                </div>

                             <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
                          <label class="text-uppercase fontsize11px greycolor helveticafont col-sm-12 p-0">
                                    Umrah Package You Would Like To Have</label>
                             
                                   <div class="btn-group btn-group-toggle metal-toggle" data-toggle="buttons">
								        <label class="btn active" role="button">
								          <input type="radio" name="gold" value="1" required>Gold
								        </label>
								        <label class="btn" role="button">
								          <input type="radio" name="gold" value="0">Silver
								        </label>
								          <label class="btn" role="button">
								          <input type="radio" name="gold" value="0">Bronze
								        </label>
								      </div>
                            </div>	

                            <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
                               <label class="text-uppercase fontsize11px greycolor helveticafont">No Of Accompanying People </label>
                              	 <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="accompanying_people" required>
                                           <option>Select</option>
                                            <option>2</option>
                                             <option>6</option>
                                             <option>12</option>
                                        </select>
                                </div>

                                <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
		                          <label class="text-uppercase fontsize11px greycolor helveticafont col-sm-12 p-0">
		                                    Savings You Already Have for the Trip, If Any </label>
                             
                                  <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="savings_trips" required>
                                           <option>Choose</option>
                                            <option>10</option>
                                             <option>20</option>
                                             <option>30</option>
                                        </select>
                            </div>	

                            <div class="col-sm-3 pl-1 pr-1 mt-2 form-group">
		                          <label class="text-uppercase fontsize11px greycolor helveticafont col-sm-12 p-0">
		                                    Do you Want to Save for Your Travel Tickets As well? </label>
                             
                                  <select class="borderblack fontsize15px helveticafont borderradius30px pl-3 pr-3 fontweight400 col-sm-12 height50px lightblackcolor selecticon" name="savings_trips" required>
                                           <option>Choose</option>
                                            <option>10</option>
                                             <option>20</option>
                                             <option>30</option>
                                        </select>
                            </div>	

                            <div class="col-sm-3 offset-sm-3 pl-1 pr-1 mt-2 form-group">
                            	<button type="submit" class="btn bgyellow-gradiant border borderyellow colorwhite borderradius30px helveticabold-font col-sm-12 fontsize14px pt-2 pb-2 height50px nexthover" style="margin:2.8em 0em 0em;">Show Result</button>
                            </div>

						</div>
					</form>
					<!-- form -->


					<!-- graph -->
					<div class="w-100 mt-5">
						<h4 class="helveticafont colorblack mb-4">Results Based On Input </h4>
						<div class="aspect-ratio bg-white borderradius15px p-2">
						    <!-- <canvas id="moneymarket"></canvas> -->
						    <div id="umrahchart" style="height: 300px; width: 100%;"></div>
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

var chart = new CanvasJS.Chart("umrahchart", {
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
      { x: new Date(2020, 21), y: 2798000 },
      { x: new Date(2020, 23), y: 3386000 },
      { x: new Date(2020, 25), y: 6704000},
      { x: new Date(2020, 27), y: 6026000 },
      { x: new Date(2020, 29), y: 2394000 },
      { x: new Date(2020, 31), y: 1872000 },
      { x: new Date(2020, 33), y: 2140000 }
    ]
  }]
  });
chart.render();

}

</script>
@stop