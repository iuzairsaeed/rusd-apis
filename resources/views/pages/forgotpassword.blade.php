@extends('layouts.master')

@section('content')
<div class="container-fluid h-100vh">
    <div class="row h-100">
          <div class="col-sm-5 cover pt-6 pb-6 bg-100 text-center shadow-lg" style="background-image: url('images/assets/login/asset34.png')">
          <img src="images/assets/login/asset33.png" class="img-fluid col-sm-6 position-absolute lefttop0 m-auto maxwidth400px">
          </div>  

          <div class="col-sm-7 pt-5 pb-5 m-auto align-middle align-items-center">
              <div class="text-center maxwidth350px m-auto pt-2 pb-2">
                <div class="text-left mb-4"> <a href="{{url('/')}}"><img src="images/assets/login/asset37.png" class="img-fluid col-sm-2 col-2">
                </a></div>
                  <h4 class="helveticabold-font">Forgot Password? </h4>
                 
                 <form id="forgetPass" method="POST" method="post">
                     @csrf

                  <div class="col-sm-12 bg-grey border borderradius50px mt-5 text-left pl-4 pr-5 event-click">
                      <a href="#" class="text-decoration-none reset-p" data-type="email"><h6 class="helveticafont colorblack pt-4 pb-4 m-0 fontsize14px" style="letter-spacing: 0.4px;">
                        <span class="bg-white rounded-circle width-28 d-inline-block mr-3 align-middle"></span> Reset via Email </h6></a>
                  </div>

                   <div class="col-sm-12 bg-grey border borderradius50px mt-4 text-left pl-4 pr-5 event-click">
                     <a href="#" class="text-decoration-none reset-p" data-type="phone"> <h6 class="helveticafont colorblack pt-4 pb-4 m-0 fontsize14px" style="letter-spacing: 0.4px;">
                        <span class="bg-white rounded-circle width-28 d-inline-block mr-3 align-middle"></span> Reset via Phone</h6></a>
                  </div>
                    <div class="after-append"></div>
                  <div class="mt-8"> 
                    <button type="submit" class="btn bgyellow-gradiant mt-3 border borderyellow colorwhite borderradius30px helveticabold-font col-sm-12 fontsize14px pt-3 pb-3 nexthover">
                    Continue
                   </button>
                  </div>
                
                  </form>

                  <div class="text-center mt-4"><p class="greycolor fontsize12px">Or
                    <a href="{{url('signup')}}" class="colorblack fontsize13px helveticafont text-decoration-none">Login Instead</a></p></div>

              </div>
          </div>
    </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
  $('.reset-p').click(function(e){
    var  type  = $(this).attr('data-type');
    $('.after-append').html('');
    if (type == "email") {
      $('.after-append').html(` 
                  <div class="text-left mt-4">
                      <label class="text-uppercase fontsize11px greycolor helveticafont">Email</label>
                      <div class="pt-2 pb-2 pl-4 pr-4 bg-grey borderradius30px border focus"><img src="images/assets/login/asset39.png">
                        <input type="email" id="email" name="email" class="border-0 bg-transparent fontsize14px helveticafont pt-2 pb-2 pl-2 col-sm-11 col-11 " placeholder="Email" value="" autocomplete="email" autofocus="" required="">

                      </div>
                   </div>
                  `);
    }

  });

  $("#forgetPass").submit(function(e){
    e.preventDefault();
    var formData = new FormData(this);
    
    $.ajax({
    type: "POST",
    url: '{{url("api/registration")}}',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
      success: function (data) {
        $('.sign-msg').next('p').remove();
        $('.sign-msg').after(`<p class="alert alert-success">`+data.message+`</p>`);
      },

      error: function (err) {

        var message = err.responseJSON.message.password;
        var messageValue = Object.values(err.responseJSON.message);
         $('.alert-danger').remove();
         for (var i = 0; i < messageValue.length; i++) {
          console.log( messageValue[i]);
          $('.sign-msg').after(`<p class="alert alert-danger">`+ messageValue[i]+`</p>`);
         }
         
      },


    });

  });

</script>
@stop