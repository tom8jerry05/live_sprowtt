@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Newsletter
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Newsletter ></li>
        <li class="active">Compose mail</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Compose Mail</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif


                        <form class="composeForm" method="POST" action="{{route('BENewsLetterSendMails')}}" enctype="multipart/form-data" id="Compose-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h4>To:</h4>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios1" value="subscribed_users" required>
                                        Subscribed Users
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios2" value="registered_sponsors">
                                        Registered Sponsors
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios2" value="registered_judges">
                                        Registered Judges
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios2" value="registered_team_leaders">
                                        Registered Team Leaders
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios2" value="registered_team_members">
                                        Registered Team Members
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios2" value="registered_ambassador">
                                        Registered Ambassador
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="mail_option" id="optionsRadios2" value="to_mail">
                                        To mail
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" id="toMail" style="display: none">
                                <input class="form-control" id="mail_to" name="mail_to" placeholder="To:">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="mail_subject" name="mail_subject" placeholder="Subject:" required>
                            </div>
                            <div class="form-group">
                                <textarea id="compose-textarea" id="mail_content" name="mail_content" class="form-control" rows="10" cols="50" required></textarea>
                            </div>
                            <div class="box-footer">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();






        $("input[name='mail_option']").on('click',function () {
            var card_type = $("input[name='mail_option']:checked").val();
            if(card_type === 'to_mail'){
                $('#toMail').show();
                $('#toMail').attr('required');
            }
        });



    });
</script>
@endsection