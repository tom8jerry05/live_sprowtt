@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Members
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Members</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-8 col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Members Details</h3>
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
                                                <strong>DOB</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->dob }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Primary Phone No</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->primaryphonenumber }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Alternate Phone No</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->alterphonenumber }}
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
                                                    {{ $applier->address1 }}
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
                                                <strong>Zipcode</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->zipcode }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Referral Source</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->referralSource }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Sponsor Code</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->sponsorCode }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

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
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>An US Citizen</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->citizenship }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Current University</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->currentUniversity }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Major</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->major }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Current GPA</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->currentGPA }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Expected Graduation Date</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->graduationDate }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Attending Medical School?</strong>
                                                <p class="m-b-xs">
                                                    {{ $applier->attendmedischool }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="chat-activity-list">
                                        <div class="chat-element ">
                                            <div class="media-body ">
                                                <strong>Resume</strong>
                                                <p class="m-b-xs">
                                                    <a href="JavaScript:void(0);" id="resumeView" data-url="{{ $url }}">
                                                        {{ $applier->resume }}
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