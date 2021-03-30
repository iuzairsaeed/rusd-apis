@extends('layouts.master')

@section('content')
<div class="container-fluid h-100vh">
    <div class="row h-100">
          <div class="col-sm-5 shadow-lg cover pt-6 pb-6 bg-100 text-center h-sm-322px" style="background-image: url('images/assets/login/asset34.png')">
          <img src="images/assets/login/asset33.png" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
          </div>  

          <div class="col-sm-7 pt-5 pb-7 m-auto align-middle align-items-center">
              <div class="text-center maxwidth350px m-auto pt-2 pb-2">
                <div class="text-left mb-4"> <a href="{{url('login')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-2 col-2"></a></div>
                  <h4 class="helveticabold-font"> Tell us Your <br/> Investment Strategy </h4>
                 
                 <form action="" method="post">
                  
                  <div class="d-flex mt-4 pt-3 mb-2 pb-3">
                    <div class="col-sm-6 pl-2 pr-1">
                       <a href="javascript:void(0)" class="text-decoration-none">
                        <div class="boxshadow10px pt-3 pb-3 borderradius15px active-user">
                          <img src="images/assets/login/asset47.png" class="img-fluid col-sm-8 col-10 d-show">
                           <img src="images/assets/login/asset45.png" class="img-fluid d-none col-sm-8 col-10">
                          <h6 class="helveticabold-font mt-3 helveticafont fontsize15px mb-0" style="color: #484848;"> Tell us <br/> your dreams </h6>
                      </div></a>
                  </div>
                  <div class="col-sm-6 pl-1 pr-2">
                     <a href="javascript:void(0)" class="text-decoration-none"> 
                      <div class="boxshadow10px pt-3 pb-3 borderradius15px active-user">
                          <img src="images/assets/login/asset46.png" class="img-fluid col-sm-8 col-10 d-show">
                          <img src="images/assets/login/asset44.png" class="img-fluid d-none col-sm-8 col-10">
                          <h6 class="helveticabold-font mt-3 helveticafont fontsize15px mb-0" style="color: #484848;">Our Investment Strategies </h6>
                      </div></a>
                  </div>
      
                </div>

                  <div class="text-center mt-4 mb-2"><p class="greycolor fontsize12px">Select one of the Investment Strategy</p></div>  

                  <div class="mt-5 pt-3"> <button type="submit" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-12 fontsize14px pt-3 pb-3 nexthover" disabled> Next </button></div>

                  </form>


              </div>
          </div>
    </div>
</div>
@stop

