@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Event Appliers
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Event Appliers</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Event Appliers</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="event-appliers-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Names</th>
                                    <th>Emails</th>
                                    <th>Applied At</th>
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

        var grid = $('#event-appliers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('eventapplier.grid') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'names' },  
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action' },  
            ],        
        });
    });
    
</script>
@endsection