@extends('layouts.master')


@section('content')
<div class="container-fluid h-100vh">
    <div class="row h-100">
          <div class="col-sm-5 cover pt-6 pb-6 bg-100 text-center shadow-lg h-sm-322px" style="background-image: url('images/assets/login/asset34.png')">
          <img src="images/assets/login/asset33.png" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
          </div>  

          <div class="col-sm-7 pt-5 pb-5 align-middle align-items-center m-auto">
              <div class="text-center maxwidth350px m-auto pt-2 pb-2">
                <div class="text-left mb-4"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-1 col-1 p-0">
                </a></div>
                  <h4 class="helveticabold-font">Log In</h4>
                 
                 <form method="POST" action="{{ route('login') }}">
                     @csrf

                 <div class="text-left mt-4">
                    <label class="text-uppercase fontsize11px greycolor helveticafont">Email</label>
                    <div class="pt-2 pb-2 pl-4 pr-4 bg-grey borderradius30px border focus"><img src="images/assets/login/asset39.png">
                      <input type="email" id="email" name="email" class="border-0 bg-transparent fontsize14px helveticafont pt-2 pb-2 pl-2 col-sm-11 col-11 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus required>

                       @error('email')
                                    <span class="invalid-feedback position-absolute mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                             
                 </div>

                 <div class="text-left mt-3">
                    <label class="text-uppercase fontsize11px helveticafont greycolor">Password </label>
                    <a href="javascript:void(0)" class="float-right colorblack fontsize11px pt-2 text-decoration-none" onclick="myFunction()">Show</a>
                    <div class="pt-2 pb-2 pl-4 pr-4 bg-grey borderradius30px border focus"><img src="images/assets/login/asset38.png">
                      <input type="password" id="password" name="password" placeholder="Password" class="border-0 bg-transparent fontsize14px helveticafont pt-2 pb-2 pl-2 col-sm-11 col-11 @error('password') is-invalid @enderror" required autocomplete="current-password">

                       @error('password')
                                    <span class="invalid-feedback position-absolute mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                              
                 </div>

                 <div class="mt-2 text-right"><a href="{{url('/forgotpassword')}}" class="colorblack text-capitalize fontsize12px text-decoration-none">forgot Password?</a></div>
                    
                  <div class="mt-4"> <button type="submit" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-12 fontsize14px pt-3 pb-3 nexthover">Log In</button></div>

                  <div class="d-flex mt-3">
                    <div class="col-sm-6 pl-1 pr-1"><div class="bgyellow-gradiant borderradius30px" style="padding: 1px;"><div class="bg-white borderradius30px p-1"><a href="#"><img src="images/assets/login/asset41.png" class="img-fluid col-sm-5 col-5 pt-1 pb-1"></a></div></div>
                  </div>
                  <div class="col-sm-6 pl-1 pr-1"><div class="bgyellow-gradiant borderradius30px" style="padding: 1px;"><div class="bg-white borderradius30px p-1"><a href="#"><img src="images/assets/login/asset40.png" class="img-fluid col-sm-5 pt-1 pb-1 col-5"></a></div> </div></div>
              </div>

                  </form>

                  <div class="text-center mt-4"><p class="greycolor fontsize12px">Don't have an account? 
                    <a href="{{url('signup')}}" class="colorblack helveticafont text-decoration-none">Sign up</a></p></div>

              </div>
          </div>
    </div>
</div>
@stop
