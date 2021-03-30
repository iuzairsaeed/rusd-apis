@extends('layouts.master')

    <div class="container-fluid h-100vh">
        <div class="row h-100">
              <div class="col-sm-5 cover pt-6 pb-6 bg-100 text-center shadow-lg h-sm-322px" style="background-image: url('{{asset('images/assets/login/asset34.png') }}">
              <img src="{{ asset('images/assets/login/asset33.png') }}" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
              </div>  

            <div class="col-md-7 pt-7 pb-6 m-auto align-middle align-items-center">
                <div class="text-center maxwidth400px m-auto pt-2 pb-2">
                
                  <h4 class="helveticabold-font fontsize22px">You email address has been verified</h4>



                     <div class="mt-4 mb-5"> <button type="submit" class="btn bgyellow-gradiant mt-2 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-11 fontsize14px pt-3 pb-3 nexthover">Login</button></div>
                      

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')