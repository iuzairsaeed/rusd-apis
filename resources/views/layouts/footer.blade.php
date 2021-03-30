
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
<script src="{{asset('js/jquery.twbs-toggle-buttons.min.js') }}"></script>
<script src="{{asset('js/canvasjs.min.js') }}"></script>


  <script type="text/javascript">

    window.baseUrl = "{{url('/')}}";


  		$(document).ready(function(){
  			$('.active-user').click(function(){
  				$('.nexthover').removeAttr('disabled');
  			});
        $('.focus').click(function(){
                $(this).toggleClass('acinput');
            });
        $('.more-number').click(function(){
          $('.hide-number').show();
        });
        $('.add-citizen').click(function(){
          $('.hide-citizen').show();
        });
        $('.close-show').click(function(){
            $('.collapse').removeClass('show');
        });
         $('[data-toggle="tooltip"]').tooltip();
  		});
  </script>

  <script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    autoplay:true,   
    smartSpeed: 2000, 
    autoplayTimeout:10000,
    navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>


<script type="text/javascript">
        $(function() {
              $( '.plans-select button' ).on( 'click', function() {
                    $( this ).parent().find( '.plans-select button' ).removeClass( 'pack' );
                    $( this ).addClass( 'pack' );
              });
        });
      
</script>


  <script>
$(".btn-group-toggle").twbsToggleButtons();
</script>

<!-- <script src="{{ asset('js/app.js') }}"></script> -->