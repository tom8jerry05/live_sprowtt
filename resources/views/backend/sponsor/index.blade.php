@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Sponsor Ship</h1>
<ol class="breadcrumb">
    <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Sponsor Ship</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sponsor Ship</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="sponsor-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Company Name</th>
                                    <th>Contact Person</th>
                                    <th>Contact Email</th>
                                    <th>Contact Number</th>
                                    <th>Project</th>
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
        var grid = $('#sponsor-table').DataTable({
            processing: true,
            serverSide: true,
            
            ajax: '{!! route('sponsor.grid') !!}',
            columns: [    
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'comp_name', name: 'comp_name' },
                { data: 'contact_person', name: 'contact_person' },  
                { data: 'contact_number', name: 'contact_number' },          
                { data: 'contact_email', name: 'contact_email' },       
                { data: 'project', name: 'project' }, 
            ],        
        });
    });
    
</script>
@endsection