@extends('layouts.master')

@section('content')
<div class="container-fluid bg-banner" style="background-size:cover;background-repeat: no-repeat;">
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
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">Who we Are</h4></li>
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
							<!-- 	About us -->
							<div class="col-sm-6 pl-1 pr-2 mb-4">
							<a href="{{url('about')}}" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-5 pr-5 w-100 hovereffect1 bg-white" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">About Us</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Call us or email us</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a>
					          </div> 
					          <!-- About us -->

					          <!-- Legal Disclaimer -->
					       <div class="col-sm-6 pl-2 pr-1 mb-4">
							<a href="{{url('/legal')}}" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-5 pr-5 w-100 hovereffect1 bg-white" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Legal Disclaimer</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Scope of rights and obligations</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a>
					          </div> 
					        <!-- Legal Disclaimer-->


					         <!-- Privacy Policy-->
					       <div class="col-sm-6 pl-2 pr-1">
							<a href="{{url('privacy')}}" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-5 pr-5 w-100 hovereffect1 bg-white" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Privacy Policy</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">What are our privacy policy</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a>
					          </div> 
					        <!-- Privacy Policy-->

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
@stop