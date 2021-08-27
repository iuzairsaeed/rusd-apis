@extends('layouts.app')

@section('content')
<section id="dom">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <p class="card-text">Here you can see the list of existing users.</p>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard table-responsive">
                        <table class="table table-striped table-bordered" id="dTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .dataTables_filter { display: none; }
</style>
@endsection

@section('afterScript')
<script>
    var table = $('#dTable').DataTable({
        processing: true,
        serverSide: true,
        ajax:
        {
            url: '{{ route("citizenship.getList") }}',
            type: 'GET',
            dataType: "JSON",
            error: function (reason) {
                return true;
            }
        },
        columns: [
            { data: 'serial'},
            { data: 'user', render:function (data, type, full, meta) {
                                return `<img class="width-50 rounded-circle" src=${full.user.avatar}> ${full.user.name}`;  }
            },
            { data: 'user', render:function (data, type, full, meta) {
                                return `${full.user.country}`;  }
            },
            { data: 'status', render:function (data, type, full, meta) {
                                console.log(full);
                                return (full.status == "Denied") ? `<i class="fa fa-dot-circle-o danger font-medium-1 mr-1"></i> Denied`
                                        : (full.status == "Pending Approval") ? `<i class="fa fa-dot-circle-o warning font-medium-1 mr-1"></i> Pending Approval`
                                        : `<i class="fa fa-dot-circle-o success font-medium-1 mr-1"></i> Approved`;  }
            },
            { data: 'actions', render:function (data, type, full, meta) {
                                return `<a href="/citizenship/${full.id}" class="showStatus info p-0 mr-2 success" title="View">
                                            <i class="ft-eye font-medium-3"></i>
                                        </a>`;  }
            }
        ],
        order: [0 , 'desc'],
        columnDefs: [
            { width: "10%", "targets": [-1, 0] },
            { orderable: false, targets: [-1,-2,-3,-4] },
            {bFilter: false, bInfo: false}
        ],
    });
</script>
@endsection
