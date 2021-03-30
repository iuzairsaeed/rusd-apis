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
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">E-Wallet </h4></li>
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

						<div class="col-sm-12 pl-2 pr-2 mt-5">
							<div class="w-100 pt-5 pb-5 text-center bggreen-gradiant borderradius15px">
									<img src="{{asset('images/assets/login/Asset66.png')}}" class="img-fluid m-auto" width="110">
									<h5 class="helveticabold-font text-white pt-3">Total Balance</h5>
									<p class="mb-0 helveticafont font-weight-light fontsize18px" style="color: rgb(255 255 255 / 58%);">AED 32,058.00</p>
							</div>
						</div>

					<div class="d-flex flex-wrap mt-5 w-100">
						<div class="col-sm-6 pl-0 pr-2 mb-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-3 pr-3 w-100 hovereffect1 bg-white mb-4 fontadjust" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					          		<img src="{{asset('images/assets/login/arrow1.png')}}" class="mr-3 mt-auto mb-auto" style="width:10px;">
					                <div class="media-body mt-1 pr-3">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Lorem Ipsum is simply text
					                  </h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">Today, 13:45</p>
					                  <div class="position-absolute h-50 m-auto lightblackcolor fontsize13px" style="top:5px;bottom: 0;right: 0px;"> AED - 198.25</div>
					                </div>
					              </div> 
					            </div>
					        </div>
	
					        <div class="col-sm-6 pl-2 pr-0 mb-2">
								<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-3 pr-3 w-100 hovereffect1 bg-white mb-4 fontadjust" 
								style="box-shadow: 1px 1px 20px #e2e2e2;">
						          <div class="media position-relative">
						          		<img src="{{asset('images/assets/login/arrow2.png')}}" class="mr-3 mt-auto mb-auto" style="width:10px;">
						                <div class="media-body mt-1 pr-3">
						                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Lorem Ipsum is simply text</h4>
						                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">Today, 10:45</p>
						                   <div class="position-absolute h-50 m-auto lightblackcolor fontsize13px" style="top:5px;bottom: 0;right: 0px;"> AED - 198.25</div>
						                </div>
						              </div> 
						            </div>
					        </div>

					        <div class="col-sm-6 pl-0 pr-2 mb-2">
									<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-3 pr-3 w-100 hovereffect1 bg-white mb-4 fontadjust" 
									style="box-shadow: 1px 1px 20px #e2e2e2;">
							          <div class="media position-relative">
							          		<img src="{{asset('images/assets/login/arrow1.png')}}" class="mr-3 mt-auto mb-auto" style="width:10px;">
							                <div class="media-body mt-1 pr-3">
							                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Lorem Ipsum is simply text
							                  </h4>
							                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">June 18, 2020</p>
							                  <div class="position-absolute h-50 m-auto lightblackcolor fontsize13px" style="top:5px;bottom: 0;right: 0px;"> AED - 198.25</div>
							                </div>
							              </div> 
							            </div>
					        </div>


					          <div class="col-sm-6 pl-2 pr-0 mb-2">
									<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-3 pr-3 w-100 hovereffect1 bg-white mb-4 fontadjust" 
									style="box-shadow: 1px 1px 20px #e2e2e2;">
							          <div class="media position-relative">
							          		<img src="{{asset('images/assets/login/arrow2.png')}}" class="mr-3 mt-auto mb-auto" style="width:10px;">
							                <div class="media-body mt-1 pr-3">
							                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Lorem Ipsum is simply text
							                  </h4>
							                  <p class="mb-0 greycolor helveticafont fontsize12px pb-1">June 17, 2020</p>
							                  <div class="position-absolute h-50 m-auto lightblackcolor fontsize13px" style="top:5px;bottom: 0;right: 0px;"> AED - 198.25</div>
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