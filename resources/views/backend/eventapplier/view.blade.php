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
    <div class="row">
        <div class="col-lg-8 col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Event Applier Details</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Name</strong>
                                                <p class="m-b-xs"> 
                                                    {{ $applier->firstname.' '.$applier->lastname }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Email</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Phone No</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->phonenumber }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <br>
                                
                                <div class="col-md-12">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Address</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->address}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Country</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->country }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>State</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->state }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>City</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->city }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Event Days</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->event_days }} Days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Applied Project</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->project_id }}
                                                </p>
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
            
            <!-- <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            

                            
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        $('#resumeView').on('click',function(){
           var url = $(this).attr('data-url');
           window.open(url, "_blank");
        })
    });
</script>
@endsection