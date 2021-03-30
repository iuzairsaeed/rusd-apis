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
						<div class="col-sm-9 p-0">
						<ul class="p-0 mt-2 mb-0 list-unstyled">
							<li class="d-inline-block"><h4 class="helveticabold-font colorblack mb-0">Home</h4></li>
							<li class="d-inline-block align-text-bottom"><i class="fa fa-caret-right pr-4 pl-4" style="font-size: 14px !important;"></i></li>
							<li class="d-inline-block align-text-bottom"><p class="fontsize14px mb-0 greycolor helveticafont">Investment Plans</p></li>
						</ul>
						</div>
						<div class="col-sm-3 text-right p-0">
							<!-- filter -->
								  <div class="dropdown onhover-dropdown float-left">
									    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="padding: 9px 13px;">
									      <img src="{{asset('images/assets/login/Asset58.png')}}" width="29">
									    </button>
									    <div class="dropdown-menu border-0 pl-2 pr-2 pt-3 pb-3" style="right: 11px;left: auto;">
									     <h5 class="helveticabold-font text-dark pl-3 pr-3">Filter</h5>
									      <a class="dropdown-item lightblackcolor helveticabold-font fontsize15px" href="#"><input type="radio"> My Plans</a>
									      <a class="dropdown-item lightblackcolor helveticabold-font fontsize15px" href="#"><input type="radio"> All Plans</a>
									    </div>
									  </div>
									<!-- filter -->

								<div class="media float-left text-left">
								  <img src="{{asset('images/assets/login/img_avatar1.png')}}" class="mr-3 rounded-circle border" style="width:50px;">
								  <div class="media-body align-middle m-auto">
								    <h6 class="helveticafont text-dark fontsize14px mb-0">Mohammed Ali Abbar</h6>
								    <p class="mb-0 helveticafont greycolor fontsize11px">Management</p>
								  </div>
								</div>
						</div>
					</div> 

					<div class="w-100 mt-5 d-flex flex-wrap">
							<h5 class="helveticafont mb-3 w-100">My Plans</h5>
							 
						<!-- 	 plans package -->
				                <div class="col-sm-12 pl-sm-5 pr-sm-5 pl-0 pr-0">
				                    <div class="owl-carousel owl-theme carousel-packages">
				                        <div class="items bg-white borderradius15px overflow-hidden mb-3">
				                            <div class="bggreen-gradiant text-center w-100 p-3">
				                            	<img src="{{asset('images/assets/login/Asset56.png')}}" class="img-fluid col-sm-5 col-6 p-2 m-auto">
				                            	<h5 class="helveticabold-font text-white pt-2 pb-2">Money Market</h5>
				                            	<p class="helveticafont text-white mb-0 font-weight-light fontsize15px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
				                            </div>
				                            <div class="p-sm-3 p-2 pt-4 pb-5">
				                            	<h5 class="helveticafont text-center">Want to review <br/> these documents </h5>
				                            	<ul class="p-0 m-0 mt-3 mb-4 list-unstyled plans-select">
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Term Sheet</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Offering Document</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Performance Fact Sheets</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button  class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Disclaimer</button></li>
				                            	</ul>
				                            	<a href="{{url('/moneymarket')}}" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticafont w-100 fontsize16px pt-2 pb-2 nexthover lineheight2px">View Plan</a>
				                            </div>
				                        </div>                        
				                       <div class="items bg-white borderradius15px overflow-hidden mb-3">
				                            <div class="bggreen-gradiant text-center w-100 p-3">
				                            	<img src="{{asset('images/assets/login/Asset54.png')}}" class="img-fluid col-sm-5 col-6 p-2 m-auto">
				                            	<h5 class="helveticabold-font text-white pt-2 pb-2">Sukuk</h5>
				                            	<p class="helveticafont text-white mb-0 font-weight-light fontsize15px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
				                            </div>
				                            <div class="p-sm-3 p-2 pt-4 pb-5">
				                            	<h5 class="helveticafont text-center">Want to review <br/> these documents </h5>
				                            	<ul class="p-0 m-0 mt-3 mb-4 list-unstyled plans-select">
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Term Sheet</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Offering Document</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Performance Fact Sheets</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button  class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Disclaimer</button></li>
				                            	</ul>
				                            	<a href="#" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticafont w-100 fontsize16px pt-2 pb-2 nexthover lineheight2px">View Plan</a>
				                            </div>
				                        </div>                        
				                        <div class="items bg-white borderradius15px overflow-hidden mb-3">
				                            <div class="bggreen-gradiant text-center w-100 p-3">
				                            	<img src="{{asset('images/assets/login/Asset55.png')}}" class="img-fluid col-sm-5 col-6 p-2 m-auto">
				                            	<h5 class="helveticabold-font text-white pt-2 pb-2">Real Estate</h5>
				                            	<p class="helveticafont text-white mb-0 font-weight-light fontsize15px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
				                            </div>
				                            <div class="p-sm-3 p-2 pt-4 pb-5">
				                            	<h5 class="helveticafont text-center">Want to review <br/> these documents </h5>
				                            	<ul class="p-0 m-0 mt-3 mb-4 list-unstyled plans-select">
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Term Sheet</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Offering Document</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Performance Fact Sheets</button></li>
				                            		<li class="d-inline-block mt-1 mb-1"><button  class="rounded fontsize11px helveticabold-font text-dark border bordergrey bg-grey shadow-none p-2 pl-3 pr-3 outlinenone">Disclaimer</button></li>
				                            	</ul>
				                            	<a href="#" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticafont w-100 fontsize16px pt-2 pb-2 nexthover lineheight2px">View Plan</a>
				                            </div>
				                        </div>  
				                    </div>
				                </div>
				                <!-- plans package -->
					</div>

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
	


@stop