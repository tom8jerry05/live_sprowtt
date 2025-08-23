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
    Project Voter's List
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project Voter's List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Project Voter's List</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="tombstone-voter-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Project Name</th>
                                    <th>Voter name</th>
                                    <th>Voter Email</th>
                                    <th>Votes At</th>
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

        var grid = $('#tombstone-voter-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('tombstone.voterGrid') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },  
                { data: 'voter_name', name: 'voter_name' },
                { data: 'voter_email', name: 'voter_email' },  
                { data: 'created_at', name: 'created_at' },    
            ], 
        });
    });
    
</script>
@endsection