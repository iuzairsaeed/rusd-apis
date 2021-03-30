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
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">Dashboard</h4></li>
							<li class="d-inline-block align-text-bottom"><i class="fa fa-caret-right pr-4 pl-4" style="font-size: 14px !important;"></i></li>
							<li class="d-inline-block align-text-bottom"><p class="fontsize12px mb-0 greycolor helveticafont" style="margin-top:-1.7em;">My Profile</p></li>
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

					<div class="w-100 mt-5 d-flex flex-wrap">
							<div class="col-sm-6">
								<div class="media text-left">
								  <img src="{{asset('images/assets/login/img_avatar1.png')}}" class="mr-3 rounded-circle border" style="width:140px;border-width: 2px;">
								  <div class="media-body align-middle m-auto">
								    <h6 class="helveticafont text-dark fontsize22px mb-0">Mohammed Ali Abbar</h6>
								    <p class="mb-0 helveticafont greycolor fontsize16px">Management</p>
								  </div>
								</div>
							</div>
							<div class="col-sm-6 text-right align-middle m-auto">
								<a href="#" class="btn bgyellow-gradiant pl-0 pr-0 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-6 fontsize14px pt-3 pb-3 nexthover" style="line-height: 1;">Edit Profile</a>
							</div>
					</div>

					<div class="d-flex flex-wrap mt-5">
						<!-- About -->
						<div class="col-sm-6 pl-2 pr-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <input type="text" name="aboutme" class="helveticafont text-dark font-weight-light fontsize18px border-0 bg-transparent" value="About Me" disabled>
					                  <p class="mb-0 greycolor helveticafont fontsize12px invisible">Call us or email us</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><button class="bg-transparent border-0 coloryellow helveticabold-font fontsize15px">Add</button></div>
					                </div>
					              </div> 
					            </div>
					        </div>
					       <!--  location -->
					        <div class="col-sm-6 pl-2 pr-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <input type="text" name="location" class="helveticafont text-dark font-weight-light fontsize18px bg-transparent border-0" value="Location" disabled>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Enter Location</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><button class="bg-transparent border-0 coloryellow helveticabold-font fontsize15px">Add</button></div>
					                </div>
					              </div> 
					            </div>
					        </div>
					        <!-- schools -->
					        <div class="col-sm-6 pl-2 pr-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <input type="text" name="schools" class="helveticafont text-dark font-weight-light fontsize18px bg-transparent border-0" value="School" disabled>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Enter School</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><button class="bg-transparent border-0 coloryellow helveticabold-font fontsize15px">Add</button></div>
					                </div>
					              </div> 
					            </div>
					        </div>

					        <!-- Work -->
					        <div class="col-sm-6 pl-2 pr-2">
							<div class="borderradius50px p-3 pl-sm-5 pr-sm-5 pl-2 pr-2 w-100 hovereffect1 bg-white mb-4" 
							style="box-shadow: 1px 1px 20px #e2e2e2;">
					          <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <input type="text" name="work" class="helveticafont text-dark font-weight-light fontsize18px bg-transparent border-0" value="Work" disabled>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Enter Work</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><button class="bg-transparent border-0 coloryellow helveticabold-font fontsize15px">Add</button></div>
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