@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Inventors
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Inventors</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-lg-8 col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Inventors Details</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Name</strong>
                                                    <p class="m-b-xs">
                                                        {{ $inventorsdetails->firstname.' '.$inventorsdetails->lastname }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong> Phone No</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->phonenumber }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Email</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>LinkedIn URL</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->linkedin }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Entrepreneur Technical Questions</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->entrepreneur }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Heard About sprowtt</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->hear_about }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Attend the opening and closing session in washington D.C</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->dates }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>About Lab</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->about_lab }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Specific Inventions</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->specific_invitation }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>TRL of the invention</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->trl }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Appropriate Amount of funding</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->appropriate_amount}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Suggestion</strong>
                                                    <p class="m-b-xs">{{ $inventorsdetails->suggestion }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-4">
            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            

                            
                        </div>
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

        
    });
</script>
@endsection