@extends('layouts.backend')

@section('content')
<style>
    .btn-compose-mail{
        position: absolute !important;
        width: 130px;
        top: 8px;
    }
</style>




<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Newsletter
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Newsletter</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Newsletter</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="newsletter-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Email</th>
                                    <th>Subscribed At</th>
                                    <th>Status</th>
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

        var grid = $('#newsletter-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('newsletter.grid') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'email', name: 'email' },  
                { data: 'created_at', name: 'created_at' },  
                { data: 'status', name: 'status' },      
                { data: 'action', name: 'action' },      
            ],
            bInfo : false,
            dom: 'Bfrtip',
            buttons: [
            {
                text: '<i class="fa fa-fw fa-envelope"></i> Compose Mail',
                className:"btn btn-block btn-success btn-compose-mail",
                init: function(api, node, config) {
                    $(node).removeClass('btn-default')
                },
                action: function ( e, dt, node, config ) {
                    window.location.href = '{{ route('BENewsLetterCompose') }}';
                }
            }
        ]
    });
    });
    
</script>
@endsection