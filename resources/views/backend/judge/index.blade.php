@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Judges</h1>
<ol class="breadcrumb">
    <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Judges</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Judges</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="judges-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
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
        var grid = $('#judges-table').DataTable({
            processing: true,
            serverSide: true,
            
            ajax: '{!! route('judges.grid') !!}',
            columns: [    
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },  
                { data: 'phonenumber', name: 'phonenumber' },          
                { data: 'action', name: 'action' },    
            ],        
        });
    });
    
</script>
@endsection