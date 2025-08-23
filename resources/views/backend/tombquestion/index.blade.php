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
    Project Question's
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project Question's</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Project Question's</h3>
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

                        <table class="table table-bordered table-striped dataTable" role="grid" id="tombstone-ques-table">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Project Name</th>
                                    <th>Question</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Response Status</th>
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



<div class="modal fade" id="quesRespModal" >
    <div class="modal-dialog modal-notify">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Project Summary!</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="resp-question-form">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="control-label">Questions :</label>
                                <p id="asked-question"></p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="control-label">Response :</label>
                                <textarea rows="5" class="form-control" id="responce" name="responce" placeholder="Response above question here" required></textarea>
                                @if ($errors->has('responce'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('responce')}}</strong>
                                </span>
                                @endif 
                            </div>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-sm">Send Response</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        var grid = $('#tombstone-ques-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('tombstone.quesGrid') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },  
                { data: 'question', name: 'question' },
                { data: 'ques_email', name: 'ques_email' },  
                { data: 'created_at', name: 'created_at' },
                { data: 'response', name: 'response' },
                { data: 'action', name: 'action' },     
            ], 
        });



        $('#quesRespModal').on('hidden.bs.modal', function () {
            $(this).find("input,textarea").val('').end();
        });


        $('#tombstone-ques-table tbody').on('click','#questionRes',function(){
            $("#quesRespModal").modal('show');
            var id = $(this).attr('data-id');
            var ques = $(this).attr('data-ques');
            $("#resp-question-form").attr('data-id',id);
            $("#resp-question-form #asked-question").text(ques);
        })

        $("#resp-question-form").on('submit',function(e){
            e.preventDefault();
            var data = $(this).serializeArray();
            var id = $(this).attr('data-id');
            var url = '{{ route("tombstone.quesResponce",":id") }}';
            url = url.replace(':id', id);
            $('#overlay').attr('hidden',false);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                type: "GET",              
                data:  data,
                success: function(result){
                    $('#overlay').attr('hidden',true);
                    var record = jQuery.parseJSON(result);
                    console.log(record);
                    if(record['status'] == 1){
                        $("#askQuesModal").modal('hide');
                        Swal.fire(
                            'Success!',
                            'Response sent to the viewer!',
                            'success'
                        );
                        location.reload();
                    }else if( record['status'] == 0){
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                }
            });

        });


    });
    
</script>
@endsection