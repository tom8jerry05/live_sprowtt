@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Users
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-8 col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users Details</h3>
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
                                                        {{ $query->firstname.' '.$query->lastname }}
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
                                                    <p class="m-b-xs">{{ $query->phonenumber }}</p>
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
                                                    <p class="m-b-xs">{{ $query->email }}</p>
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
                                                    <strong>Address</strong>
                                                    <p class="m-b-xs">{{ $query->address }}</p>
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
                                                    <strong>Country</strong>
                                                    <p class="m-b-xs">{{ $query->country }}</p>
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
                                                    <strong>State</strong>
                                                    <p class="m-b-xs">{{ $query->state }}</p>
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
                                                    <strong>City</strong>
                                                    <p class="m-b-xs">{{ $query->city }}</p>
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
                                                    <strong>Resume</strong>
                                                    <p class="m-b-xs">
                                                        
                                                        <a href="JavaScript:void(0);" id="resumeView" data-url="{{ $url }}">
                                                            {{ $query->resume }}
                                                        </a>
                                                    
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