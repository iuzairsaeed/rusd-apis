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
							<img src="{{asset('images/assets/login/asset37.png')}}" width="27"></a>Support</h4>
					</div> 

					<div class="w-100 mt-4 d-flex flex-wrap bg-white borderradius15px p-3 pl-4 pr-4" 
					style="box-shadow: 2px 2px 18px #dedede;">
							<div class="col-sm-3 p-0 form-group">
								 <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                                     Message Title </label>
                                <input type="text" class="border borderblack fontsize14px helveticafont borderradius30px p-2 pl-4 pr-4 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="messagetitle" placeholder="Enter Message Title"
                                 required>
							</div>
							<div class="w-100 p-0 form-group">
								 <label class="text-capitalize fontsize13px greycolor helveticafont col-sm-12 p-0">
                                     Message</label>
                                <textarea class="border borderblack fontsize14px helveticafont borderradius15px p-2 pl-4 pr-4 fontweight400 lineheight2px height50px col-sm-12 lightblackcolor" name="message" placeholder="Enter Your Message" style="height: 140px;"></textarea>
							</div>

							<div class="w-100 form-group text-right mt-2">
								 <button type="button" class="col-sm-3 col-11 nextBtn m-auto btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font fontsize14px pt-3 pb-3 nexthover"> Show Result </button>
							</div>
					</div>

			</div>
		</div>
		<!-- Right side -->


	</div>
</div>
	



@stop