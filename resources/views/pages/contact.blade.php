@extends('layouts.master')

@section('content')
<div class="container-fluid bg-banner" style="background-size: cover;background-repeat: no-repeat;">
	<div class="row">
		<!-- left side -->
		<div class="col-sm-2 h-100vh bggreen-gradiant p-0">
			<div class="col-sm-12 pt-3 pb-3 pl-4 pr-4 bg-white" style="box-shadow: inset 3px -4px 12px -7px #989898;">
				<img src="{{asset('images/assets/login/asset33.png')}}" class="img-fluid w-100">
			</div>
		</div>
		<!-- left side -->


		<!-- Right side -->
		<div class="col-sm-10" style="box-shadow: inset -1px 10px 24px #dcdcdc;">
			<div class="col-sm-12 p-4">
					<div class="w-100">
						<h4 class="helveticafont colorblack mb-0"><a href="#" class="mr-3 align-top" style="line-height: 1.1">
							<img src="{{asset('images/assets/login/asset37.png')}}" width="27"></a>Contact Us</h4>
					</div> 

					<div class="w-100 mt-4 d-flex flex-wrap">

						<!-- Phone -->
							<div class="col-sm-6 pl-1 pr-2 mb-4">
							<a href="#" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-4 pr-4 w-100 bg-white hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Phone</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">+01 234 5678 912</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a> 
					          </div> 
					          <!-- Phone -->

					          <!-- Whatsapp -->
					       <div class="col-sm-6 pl-2 pr-1 mb-4">
							<a href="#" class="text-decoration-none"><div class="borderradius50px p-3 pl-4 pr-4 w-100 bg-white hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
					             <div class="media position-relative">
					                <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">WhatsApp</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">+01 234 5678 901</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div>
					          </div></a>
					          </div> 
					        <!-- Whatsapp -->


					         <!-- Email -->
					       <div class="col-sm-6 pl-2 pr-1">
							<a href="#" class="text-decoration-none"><div class="borderradius50px p-3 pl-4 pr-4 w-100 bg-white hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;"> <div class="media position-relative">
				                <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
				                <div class="media-body mt-1">
				                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Email</h4>
				                  <p class="mb-0 greycolor helveticafont fontsize12px">info@rusdbank.com</p>
				                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
				                </div>
				              </div>
				          </div></a>
					          </div> 
					        <!-- email -->

					</div>

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
	



@stop