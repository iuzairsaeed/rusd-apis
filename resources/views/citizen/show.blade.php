@extends('layouts.app')
@section('content')
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <img class="modal-content" id="img01">
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<section id="user-area">
    <a class="btn btn-primary" href="/users"><i class="fa fa-reply"></i> Go Back</a>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title-wrap">
                        <h4 class="card-title">Citizenship Detail</h4>
                    </div>
                </div>
                <div class="card-body px-4">
                    <form action="/citizenship/{{ $citizen->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-body">

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="text-bold-700">User</label>
                                        <p>{{ $citizen->user->name??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="text-bold-700">Country</label>
                                        <p>{{ $citizen->user->country??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="text-bold-700">Net Income</label>
                                        <p>{{ $citizen->net_income ??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Source Of Fund</label>
                                        <p>{{ $citizen->source_of_fund??'-' }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Bank Deposit</label>
                                        <p>{{ $citizen->bank_deposit??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Listed Stocks</label>
                                        <p>{{ $citizen->listed_stocks??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Private Equities</label>
                                        <p>{{ $citizen->private_equities??'-' }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Real Estate</label>
                                        <p>{{ $citizen->real_estate??'-' }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb mt-2">
                                    <a href="{{  url('storage/passport/'.$citizen->passport_scan)}}" class="fancybox" rel="ligthbox">
                                        <img  src=" {{  url('storage/passport/'.$citizen->passport_scan)}}" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb mt-2">
                                    <a href="{{  url('storage/nic/'.$citizen->nic_scan)}}" class="fancybox" rel="ligthbox">
                                        <img  src=" {{  url('storage/nic/'.$citizen->nic_scan)}}" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb mt-2">
                                    <a href="{{  url('storage/bill/'.$citizen->bill_scan)}}" class="fancybox" rel="ligthbox">
                                        <img  src=" {{  url('storage/bill/'.$citizen->bill_scan)}}" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Account Status</label>
                                        <div class="input-group">
                                            <div class="custom-control custom-radio display-inline-block pr-3">
                                                <input type="radio" class="custom-control-input" name="status" id="status1" value='{{PendingApproval()}}' {{($citizen->user->status == PendingApproval()) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="status1">Pending Approval</label>
                                            </div>
                                            <div class="custom-control custom-radio display-inline-block pr-3">
                                                <input type="radio" class="custom-control-input" name="status" id="status2" value='{{Approved()}}' {{($citizen->user->status ==  Approved() ) ? 'checked' :'' }}>
                                                <label class="custom-control-label" for="status2">Approved</label>
                                            </div>
                                            <div class="custom-control custom-radio display-inline-block pr-3">
                                                <input type="radio" class="custom-control-input" name="status" id="status3" value='{{Denied()}}' {{($citizen->user->status == Denied() ) ? 'checked' :'' }}>
                                                <label class="custom-control-label" for="status3">Denied</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-actions left">
                                        <a href="{{route('dashboard')}}">
                                            <button type="reset" class="btn btn-warning  mr-1">
                                                <i class="ft-rotate-ccw"></i> Reset
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-raised btn-success">
                                            <i class="icon-check"></i> Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('afterStyle')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style>
        img.zoom {
            width: 100%;
            height: 200px;
            border-radius:5px;
            object-fit:cover;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }
        .transition {
            -webkit-transform: scale(1.2); 
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-title {
            color:#000;
        }
        .modal-footer{
            display:none;  
        }

        /* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>
@endsection

@section('afterScript')
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
        
    $(".zoom").hover(function(){
        
        $(this).addClass('transition');
    }, function(){
        
        $(this).removeClass('transition');
    });

    $('#dTable').DataTable({
        order: [0 , 'desc'],
        columnDefs: [
            { width: "10%", "targets": [-1, 0] },
            { orderable: false, targets: [-2, -1] }
        ]
    });

</script>


@endsection
