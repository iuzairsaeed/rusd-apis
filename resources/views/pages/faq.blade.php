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
							<img src="{{asset('images/assets/login/asset37.png')}}" width="27"></a>Faq</h4>
					</div> 

					<div class="w-100 mt-4 d-flex flex-wrap bg-white borderradius15px pt-3 pb-3 pl-0 pr-0" 
					style="box-shadow: 2px 2px 18px #dedede;">
					<!-- faqs -->
						  <div id="accordion" class="col-sm-12 p-0 faqstyle">
						    <div class="card w-100 border-0 rounded-none">
						      <div class="card-header bg-transparent pl-4 pr-4 pb-4 pt-2" style="border-color: #efefef;">
						        <a class="collapsed card-link lightblackcolor helveticafont d-block fontsize18px" data-toggle="collapse" href="#collapseOne">
						          Lorem ipsum dolor sit amet, consectetuer?
						        </a>
						      </div>
						      <div id="collapseOne" class="collapse" data-parent="#accordion">
						        <div class="card-body w-100 helveticafont">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						    <div class="card w-100 border-0 rounded-none">
						      <div class="card-header bg-transparent p-4" style="border-color: #efefef;">
						        <a class="collapsed card-link lightblackcolor helveticafont d-block fontsize18px" data-toggle="collapse" href="#collapseTwo">
						       Lorem ipsum dolor sit amet, consectetuer?
						      </a>
						      </div>
						      <div id="collapseTwo" class="collapse" data-parent="#accordion">
						        <div class="card-body w-100 helveticafont">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						    <div class="card w-100 border-0 rounded-none">
						      <div class="card-header bg-transparent p-4" style="border-color: #efefef;">
						        <a class="collapsed card-link lightblackcolor helveticafont d-block fontsize18px" data-toggle="collapse" href="#collapseThree">
						          Lorem ipsum dolor sit amet, consectetuer?
						        </a>
						      </div>
						      <div id="collapseThree" class="collapse" data-parent="#accordion">
						        <div class="card-body w-100 helveticafont">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						    <div class="card w-100 border-0 rounded-none">
						      <div class="card-header bg-transparent p-4" style="border-color: #efefef;">
						        <a class="collapsed card-link lightblackcolor helveticafont d-block fontsize18px" data-toggle="collapse" href="#collapseFour">
						          Lorem ipsum dolor sit amet, consectetuer?
						        </a>
						      </div>
						      <div id="collapseFour" class="collapse" data-parent="#accordion">
						        <div class="card-body w-100 helveticafont">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						    <div class="card w-100 border-0 rounded-none">
						      <div class="card-header bg-transparent border-0 pl-4 pr-4 pt-4 pb-2" style="border-color: #efefef;">
						        <a class="collapsed card-link lightblackcolor helveticafont d-block fontsize18px" data-toggle="collapse" href="#collapseFive">
						          Lorem ipsum dolor sit amet, consectetuer?
						        </a>
						      </div>
						      <div id="collapseFive" class="collapse" data-parent="#accordion">
						        <div class="card-body w-100 helveticafont">
						          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        </div>
						      </div>
						    </div>
						  </div>
						<!-- faqs -->
					</div>

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
	



@stop