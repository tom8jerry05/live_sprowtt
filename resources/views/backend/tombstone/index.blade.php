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
    <h1>
    Project's
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project's</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Project's</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="tombstone-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Tombstone Position</th>
                                    <th>Project Name</th>
                                    <th>Team Name</th>
                                    <th>Created At</th>
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
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        var grid = $('#tombstone-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('tombstone.grid') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'place_position', name: 'place_position' },
                { data: 'name', name: 'name' },
                { data: 'team_name', name: 'team_name' },
                { data: 'created_at', name: 'created_at' },
                { data: 'status', name: 'status' },
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
                            window.location.href = '{{ route("tombstone.create") }}';
                        }                        
                }   
            ]            
        });
    });
    
</script>
@endsection