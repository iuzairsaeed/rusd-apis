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
                        <h4 class="card-title">User Detail</h4>
                    </div>
                </div>
                <div class="card-body px-4">
                    <form action="/citizenship/{{ $citizen->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-body">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">User</label>
                                        <p>{{ $citizen->user->name??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">Country</label>
                                        <p>{{ $citizen->country??'-' }}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">NIC</label>
                                        <p>{{ $citizen->nic ??'-' }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">NIC Expiry</label>
                                        <p>{{ $citizen->expiry_date??'-' }}</p>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">Passport</label>
                                        <p>{{ $citizen->passport_no ??'-' }}</p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">Tax Payer</label>
                                        <p>{{ $citizen->tax_payer ? 'Yes' : "No" }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-bold-700">Tax #</label>
                                        <p>{{ $citizen->tax_no ??'-' }}</p>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
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
                            
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Passport Scan</label>
                                        <p><img style=" width: 50%; height: 50%;" src=" {{  url('storage/passport/'.$citizen->passport_scan)}}" alt=""> </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">NIC Scan</label>
                                        <p><img style=" width: 50%; height: 50%;" src=" {{  url('storage/nic/'.$citizen->nic_scan)}}" alt=""> </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Bill Scan</label>
                                        <p><img style=" width: 50%; height: 50%;" src=" {{  url('storage/bill/'.$citizen->bill_scan)}}" alt=""> </p>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="text-bold-700">Account Status</label>
                                        <div class="input-group">
                                            <div class="custom-control custom-radio display-inline-block pr-3">
                                                <input type="radio" class="custom-control-input" name="status" id="status1" value='1' {{($citizen->status == PendingApproval()) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="status1">Pending</label>
                                            </div>
                                            <div class="custom-control custom-radio display-inline-block pr-3">
                                                <input type="radio" class="custom-control-input" name="status" id="status2" value='0' {{($citizen->status ==  Approved() ) ? 'checked' :'' }}>
                                                <label class="custom-control-label" for="status2">Approved</label>
                                            </div>
                                            <div class="custom-control custom-radio display-inline-block pr-3">
                                                <input type="radio" class="custom-control-input" name="status" id="status3" value='0' {{($citizen->status == Denied() ) ? 'checked' :'' }}>
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
                                            <button type="button" class="btn btn-danger mr-1">
                                                <i class="icon-trash"></i> Cancel
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-raised btn-success">
                                            <i class="icon-check"></i> Update User
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
    <style>
        /* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
        }
    </style>
@endsection

@section('afterScript')
<script>
    $('#dTable').DataTable({
        order: [0 , 'desc'],
        columnDefs: [
            { width: "10%", "targets": [-1, 0] },
            { orderable: false, targets: [-2, -1] }
        ]
    });

    $('#role').select2({
        placeholder: "Search Role",
        allowClear: true,
        ajax: {
            url: "{{ route('role.get-role') }}",
            type: "GET",
            dataType: 'json',
            data: function (params) {
                return {
                    search: params.term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }
</script>


@endsection
