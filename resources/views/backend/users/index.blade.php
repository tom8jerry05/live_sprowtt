@extends('layouts.backend')

@section('content')

<style type="text/css">
    .btn-create{
        position: absolute !important;
        width: 80px;
        top: 8px;
    }
</style>



<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('errors'))
                        <div class="alert alert-danger">
                            {{Session::get('errors')}}
                        </div>
                        @endif

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif

                        <table class="table table-bordered table-striped dataTable" role="grid" id="user-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>User Name</th>
                                    <th>User Role</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        var grid = $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.grid') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },  
                { data: 'roleid', name: 'roleid' },  
                { data: 'email', name: 'email' },  
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action' },  
                     
            ],
            bInfo : false,
            dom: 'Bfrtip',
            buttons: [
                {   
                    text: '<i class="fa fa-fw fa-plus-circle"></i> New',
                        className:"btn btn-block btn-success btn-create",
                        init: function(api, node, config) {
                            $(node).removeClass('btn-default')
                        },
                        action: function ( e, dt, node, config ) {
                            window.location.href = '{{ route("users.create") }}';
                        }                        
                }   
            ]            
        });
    });
    
</script>
@endsection