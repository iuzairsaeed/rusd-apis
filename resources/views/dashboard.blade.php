@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center rounded-left ">
                            <i class="icon-user-follow font-large-2 text-red"></i>
                        </div>
                        <div class="p-2 media-body text-right">
                            <h5 class="text-bold-400 m-0">0</h5>
                            <span>Pending Users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center rounded-left ">
                            <i class="icon-user-following font-large-2 text-red"></i>
                        </div>
                        <div class="p-2 media-body text-right">
                            <h5 class="text-bold-400 m-0">0</h5>
                            <span>Approved Users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection