@extends('layouts.master')


@section('content')
<div class="container-fluid h-100vh">
    <div class="row h-100">
          <div class="col-sm-5 cover pt-6 pb-6 bg-100 text-center shadow-lg h-sm-322px" style="background-image: url('images/assets/login/asset34.png')">
          <img src="images/assets/login/asset33.png" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
          </div> 

            <div class="col-md-7 pl-md-5 pr-md-5 pt-5 pb-4">

              <div id="app">
                <stepform-component token='{{ csrf_token() }}' :user-detail='{!! json_encode(Auth::user()) !!}'></stepform-component>
              </div>
            </div>
   
        </div>
  </div>
</div>

 <!-- The Modal -->
<div class="modal fade" id="needhelp">
    <div class="modal-dialog maxwidth560px" style="height: 89%;">
      <div class="modal-content borderradius15px p-2 position-absolute m-auto" style="top:0;bottom: 0;height: 71%;">
          
        <!-- Modal body -->
        <div class="modal-body pl-4 pr-4 pb-4 pt-3">
            <button type="button" class="close bgyellow-gradiant text-white rounded-circle font-weight-light outlinenone shadow-none fontsize18px" data-dismiss="modal" style="width: 22px;height: 22px;line-height: 0;opacity: 1;"><span class="d-block" style="margin-top: -2px;">&times;</span></button>
          <h6 class="helveticafont text-dark fontsize15px">Need Help?</h6>
          <p class="greycolor fontsize13px helveticafont">There are multiple ways you can get help. Choose from the options below.</p>

          <a href="#" class="text-decoration-none">
            <div class="borderradius50px p-3 pl-4 pr-4 w-100 hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
            <div class="media position-relative">
                <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
                <div class="media-body mt-1">
                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Phone</h4>
                  <p class="mb-0 greycolor helveticafont fontsize12px">+01 234 5678 912</p>
                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
                </div>
              </div> 
            </div></a> 

             <a href="#" class="text-decoration-none"><div class="borderradius50px p-3 pl-4 pr-4 w-100 mt-4 hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;"> <div class="media position-relative">
                <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
                <div class="media-body mt-1">
                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">Email</h4>
                  <p class="mb-0 greycolor helveticafont fontsize12px">info@rusdbank.com</p>
                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
                </div>
              </div>
          </div></a>

             <a href="#" class="text-decoration-none"><div class="borderradius50px p-3 pl-4 pr-4 w-100 mt-4 hovereffect1" style="box-shadow: 1px 1px 20px #e2e2e2;">
             <div class="media position-relative">
                <img src="{{asset('images/assets/login/Asset65.png')}}" class="mr-3 rounded-circle" width="48">
                <div class="media-body mt-1">
                  <h4 class="helveticafont text-dark font-weight-light fontsize18px mb-1">WhatsApp</h4>
                  <p class="mb-0 greycolor helveticafont fontsize12px">+01 234 5678 901</p>
                  <div class="position-absolute h-50 m-auto" style="top:0;bottom: 0;right: 15px;"><img src="{{asset('images/assets/login/Asset62.png')}}" width="7"></div>
                </div>
              </div>
          </div></a>
        </div>
      
        
      </div>
    </div>
</div>
@stop

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@stop