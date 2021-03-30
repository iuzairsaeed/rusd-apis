@extends('layouts.master')

@section('content')
<div class="container-fluid bg-banner" style="background-size: cover;background-repeat: no-repeat;">
	<div class="row">
		<!-- left side -->
		@include('layouts.sidebar')
		<!-- left side -->


		<!-- Right side -->
		<div class="col-sm-10" style="box-shadow: inset -1px 10px 24px #dcdcdc;">
			<div class="col-sm-12 p-4">
					<div class="w-100 d-flex flex-wrap">
						<div class="col-sm-9 p-0">
						<ul class="p-0 mt-2 mb-0 list-unstyled">
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">Help</h4></li>
							<li class="d-inline-block align-text-bottom"><i class="fa fa-caret-right pr-4 pl-4" style="font-size: 14px !important;"></i></li>
							<li class="d-inline-block align-text-bottom"><p class="fontsize14px mb-0 greycolor helveticafont">Alerts</p></li>
						</ul>
						</div>
						<div class="col-sm-3 text-right p-0">
								<div class="media float-right text-left">
								  <img src="{{asset('images/assets/login/img_avatar1.png')}}" class="mr-3 rounded-circle border" style="width:50px;">
								  <div class="media-body align-middle m-auto">
								    <h6 class="helveticafont text-dark fontsize14px mb-0">Mohammed Ali Abbar</h6>
								    <p class="mb-0 helveticafont greycolor fontsize11px">Management</p>
								  </div>
								</div>
						</div>
					</div> 

					<div class="d-flex flex-wrap mt-5 w-100">
						<h4 class="lightblackcolor helveticafont w-100">Reach to us</h4>
	
						<div class="col-sm-6 pl-2 pr-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl pr-2 w-100 hovereffect1 bg-white mb-4 fontadjust" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					                <div class="media-body mt-1 pr-3">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">RUSD Sukuk Fund <div class="col-auto float-right lightblackcolor">AED 1,265.00</div></h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">Risk level 3 <span class="col-auto float-right" style="color:#6ab172;">+ AED 265.00</span></p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;">
					                  	<a href="#"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></a></div>
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
					                  	<a href="#"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></a></div>
					                </div>
					              </div> 
					            </div>
					        </div>
					   </div>

					   <div class="d-flex flex-wrap mt-3 w-100">
					   		<h4 class="lightblackcolor helveticafont w-100">Yesterday</h4>
							        <div class="col-sm-6 pl-2 pr-2">
									<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4 fontadjust" 
									style="box-shadow: 1px 1px 20px #e2e2e2;">
							          <div class="media position-relative">
							                <div class="media-body mt-1 pr-3">
							                 <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">RUSD Umrah Goal Fund
							                 	<div class="col-auto float-right lightblackcolor">AED 1,000.00</div></h4>
							                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">High market cap trust
							                  	<span class="col-auto float-right" style="color:#6ab172;">+ AED 100.00</span></p>
							                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;">
							                  	<a href="#"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></a></div>
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
	
