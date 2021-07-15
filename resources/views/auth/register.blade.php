@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title-wrap bar-teal">
                    <h4 class="card-title" id="horz-layout-colored-controls">Register User</h4>
                </div>
            </div>
            <div class="card-body px-4">
                <form class="form" method="POST" id="userForm" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Name </label>
                                <input type="text" id="name" class="form-control border-primary" name="name" placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">User Name </label>
                                <input type="text" id="phone" class="form-control border-primary" name="username" placeholder="Enter User Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Email </label>
                                <input type="email" id="email" class="form-control border-primary" name="email" placeholder="Enter User Email" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Password </label>
                                <input type="password" id="password" class="form-control border-primary" name="password" placeholder="Enter User Password" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Password Confirmation</label>
                                <input type="password" id="con_pass" class="form-control border-primary" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Phone No. </label>
                                <input type="text" id="phone" class="form-control border-primary" name="phone" placeholder="Enter User Phone Number" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control">Role</label>
                                <select name="roles[]" id="role" value="{{old('role')}}" class="form-control border-primary" >
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Profile Picture </label>
                                <input type="file" id="pic" class="form-control border-primary" name="avatar" required>
                            </div>
                        </div> --}}
                        
                    </div>

                    <div class="form-actions right">
                        <button type="button" class="btn btn-danger mr-1">
                            <i class="icon-trash"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="icon-note"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
@section('afterScript')
<script>
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
</script>
@endsection
