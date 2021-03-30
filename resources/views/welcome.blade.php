@extends('layouts.master')


@section('content')
    <div class="container-fluid h-100vh">
    <div class="row h-100">
          <div class="col-sm-5 shadow-lg cover pt-8 pb-8 bg-100 text-center h-sm-322px" style="background-image: url('images/assets/login/asset34.png')">
             <img src="images/assets/login/asset33.png" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
          </div>  

          <div class="col-sm-7 pt-6 pb-6 align-items-center align-middle m-auto">
              <div class="text-center maxwidth365px m-auto pb-2">
                  <h4 class="helveticabold-font bglightgreen-gradiant" style="-webkit-background-clip: text;
                   -moz-background-clip: text;background-clip: text;-webkit-text-fill-color:transparent;">Welcome to
                 <span class="d-block greencolor">RUSD Investment Planner</span></h4>
                  <p class="helveticafont greycolor mt-3 fontsize16px mb-5" style="line-height: 1.4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada posuere pellentesque. Phasellus molestie sapien eget mollis posuere. </p>
                  <a href="{{url('/signup')}}" class="btn bg-grey colorwhite border bordergrey borderradius30px helveticabold-font col-sm-11 fontsize14px pt-3 pb-3 hoverbtn1">Sign Up</a>
                  <a href="{{url('login')}}" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-11 fontsize14px pt-3 pb-3 nexthover">Log In</a>

                  <div class="d-flex mt-5 pl-2 pr-2">
                    <div class="col-sm-6 p-1"><a href="{{url('/help')}}" class="text-decoration-none"><div class="border bordergrey borderradius15px p-4"><img src="images/assets/login/asset36.png" class="img-fluid col-sm-7 col-8">
                    <h6 class="mt-3 fontsize14px mb-0 helveticafont colorblack">Help</h6></div></a></div>
                  <div class="col-sm-6 p-1"><a href="{{url('who-we-are')}}" class="text-decoration-none"><div class="border bordergrey borderradius15px p-4"><img src="images/assets/login/asset35.png" class="img-fluid col-sm-7 col-8">
                    <h6 class="mt-3 fontsize14px mb-0 helveticafont colorblack">Who we are</h6></div></a></div>
                  </div>
              </div>
          </div>
    </div>
</div>

@stop

@section('scripts')

@stop