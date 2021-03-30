@extends('layouts.master')

@section('content')
<div class="container-fluid bg-banner" style="background-size: cover;background-repeat: no-repeat;">
	<div class="row">
		<!-- left side -->
		<div class="col-sm-2 bggreen-gradiant p-0">
			<div class="col-sm-12 pt-3 pb-3 pl-4 pr-4 bg-white" style="box-shadow: inset 3px -4px 12px -7px #989898;">
				<img src="{{asset('images/assets/login/asset33.png')}}" class="img-fluid w-100">
			</div>
			<div class="col-sm-12 p-0">
					<nav class="navbar navbar-expand-lg navbar-light p-0">
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav flex-wrap col-sm-12 p-0 menuhover">
					      <li class="nav-item dropdown w-100">
					        <a class="nav-link text-white dropdown-toggle helveticabold-font fontsize15px p-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        	<div class="d-inline-block rounded-circle overflow-hidden mr-2 align-middle" style="width:30px;height: 30px;">
					        		<img src="{{asset('images/assets/login/Asset53.png')}}" width="100%" style="padding: 6px;"></div>
					        		 <span class="align-middle">Home</span> </a>
								         <div class="dropdown-menu position-relative bg-transparent border-0 pr-2" aria-labelledby="navbarDropdown" style="top: 0;padding-left: 2.3em;">
								          <a class="dropdown-item helveticafont text-white fontsize12px" href="{{url('/investmentplan')}}">Investment Plans</a>
								          <a class="dropdown-item helveticafont text-white fontsize12px" href="{{url('/goalbased')}}">Goal Based Plans</a>
								          <a class="dropdown-item helveticafont text-white fontsize12px" href="#">What's New</a>
								        </div>
					      </li>
					      <li class="nav-item dropdown w-100">
					        <a class="nav-link dropdown-toggle text-white helveticabold-font fontsize15px p-3 show" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         <div class="d-inline-block rounded-circle overflow-hidden mr-2 align-middle" style="width:30px;height: 30px;">
					         	<img src="{{asset('images/assets/login/Asset52.png')}}" width="100%" style="padding: 6px;"></div> 
					         	<span class="align-middle">Dashboard</span>
					        </a>
					          <div class="dropdown-menu position-relative bg-transparent border-0 pr-2" aria-labelledby="navbarDropdown" style="top: 0;padding-left: 2.3em;">
								          <a class="dropdown-item helveticafont text-white fontsize12px" href="{{url('/portfolio')}}">Portfolio</a>
								          <a class="dropdown-item helveticafont text-white fontsize12px" href="{{url('profile')}}">My Profile</a>
								          <a class="dropdown-item helveticafont text-white fontsize12px" href="{{url('/alerts')}}">Alerts</a>
								  </div>
					      </li>
					      <li class="nav-item w-100 active">
					        <a class="nav-link text-white helveticabold-font fontsize15px p-3" href="{{url('/dashboard-help')}}">
					        	<div class="d-inline-block rounded-circle overflow-hidden mr-2 align-middle" style="width:30px;height: 30px;"><img src="{{asset('images/assets/login/Asset51.png')}}" width="100%" style="padding: 6px;"></div>
					        	<span class="align-middle"> Help</span></a>
					      </li>
					        <li class="nav-item w-100">
					        <a class="nav-link text-white helveticabold-font fontsize15px p-3" href="{{url('/dashboard-who')}}">
					        	<div class="d-inline-block rounded-circle overflow-hidden mr-2 align-middle" style="width:30px;height: 30px;"><img src="{{asset('images/assets/login/Asset50.png')}}" width="100%" style="padding: 6px;"></div> 
					        	<span class="align-middle">Who we are </span></a>
					      </li>
					        <li class="nav-item w-100">
					        <a class="nav-link text-white helveticabold-font fontsize15px p-3" href="{{url('/wallet')}}">
					        	<div class="d-inline-block rounded-circle overflow-hidden mr-2 align-middle" style="width:30px;height: 30px;"><img src="{{asset('images/assets/login/Asset49.png')}}" width="100%" style="padding: 6px;"></div> 
					       	 	<span class="align-middle">E-Wallet </span></a>
					      </li>
					        <li class="nav-item w-100 h-30vh"></li>
					       <li class="nav-item w-100">
					        <a class="nav-link helveticafont text-white fontsize15px p-3" href="#">
					        	<div class="d-inline-block rounded-circle overflow-hidden mr-2 align-middle" style="width:32px;height: 32px;"><img src="{{asset('images/assets/login/Asset48.png')}}" width="100%" style="padding: 6px;"></div> 
					        	<span class="align-middle">Logout </span></a>
					      </li>
					    </ul>
					 
					  </div>
					</nav>

			</div>
			<!-- nav -->

			<!-- copyright -->
			<div class="col-sm-12 p-0 pt-4 pb-4 text-center">
				<h6 class="fontsize10px helveticafont" style="color:rgb(255 255 255 / 68%);">&copy;2020. Rusd Investment Bank</h6>
			</div>
		</div>
		<!-- left side -->


		<!-- Right side -->
		<div class="col-sm-10" style="box-shadow: inset -1px 10px 24px #dcdcdc;">
			<div class="col-sm-12 p-4">
					<div class="w-100 d-flex flex-wrap">
						<div class="col-sm-9 p-0">
						<ul class="p-0 mt-2 mb-0 list-unstyled">
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">Help</h4></li>
	
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
							<h5 class="helveticafont mb-3 w-100">Reach to us</h5>
						<!-- 	contact us -->
							<div class="col-sm-6 pl-1 pr-2 mb-4">
							<a href="{{url('contact')}}" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-5 pr-5 w-100 hovereffect1 bg-white" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Contact Us</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Call us or email us</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a>
					          </div> 
					          <!-- contact us -->

					          <!-- support -->
					       <div class="col-sm-6 pl-2 pr-1 mb-4">
							<a href="{{url('support')}}" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-5 pr-5 w-100 hovereffect1 bg-white" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Support</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Send a message to us</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a>
					          </div> 
					        <!-- support -->


					         <!-- faq -->
					       <div class="col-sm-6 pl-2 pr-1">
							<a href="{{asset('faq')}}" class="text-decoration-none">
					            <div class="borderradius50px p-3 pl-5 pr-5 w-100 hovereffect1 bg-white" style="box-shadow: 1px 1px 20px #e2e2e2;">
					            <div class="media position-relative">
					                <div class="media-body mt-1">
					                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">FAQs</h4>
					                  <p class="mb-0 greycolor helveticafont fontsize12px">Frequently asked questions</p>
					                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 0px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
					                </div>
					              </div> 
					            </div></a>
					          </div> 
					        <!-- faq -->

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
	


@stop