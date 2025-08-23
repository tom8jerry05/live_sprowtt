@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        New Tech
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Tech</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-lg-8 col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New Tech Details</h3>
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
                                                        {{ $techdetails->firstname.' '.$techdetails->lastname }}
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
                                                    <strong>Email</strong>
                                                    <p class="m-b-xs">{{ $techdetails->email }}</p>
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
                                                    <strong>Resident of the European Union</strong>
                                                    <p class="m-b-xs">{{ $techdetails->resident_europe }}</p>
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
                                                    <strong>Affilated Status</strong>
                                                    <p class="m-b-xs">{{ $techdetails->affilated_status }}</p>
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
                                                    <strong>Category</strong>
                                                    <p class="m-b-xs">{{ $techdetails->category }}</p>
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
                                                    <strong>Current Market Offer</strong>
                                                    <p class="m-b-xs">{{ $techdetails->market_offer }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Status of Intellectual Property</strong>
                                                    <p class="m-b-xs">{{ $techdetails->intellectual_property }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Status of Disclosed</strong>
                                                    <p class="m-b-xs">{{ $techdetails->disclosed_status }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Status of Development</strong>
                                                    <p class="m-b-xs">
                                                        <ul>
                                                            @foreach ($techdetails->development_status as $development)
                                                                <li> {{ $development}} </li> 
                                                            @endforeach 
                                                        </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Status of Business Objectives</strong>
                                                    <p class="m-b-xs">
                                                        <ul>
                                                            @foreach ($techdetails->business_objectives as $objectives)
                                                                <li> {{ $objectives}} </li> 
                                                            @endforeach 
                                                        </ul> 
                                                    </p>
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
                                                    <strong>Title of innovation</strong>
                                                    <p class="m-b-xs">{{ $techdetails->innovation_title }}</p>
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
                                                    <strong>Description of innovation</strong>
                                                    <p class="m-b-xs">{{ $techdetails->innovation_describe }}</p>
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
                                                    <strong>Clinical Benefits of Technology </strong>
                                                    <p class="m-b-xs">{{ $techdetails->clinical_benefits }}</p>
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
                                                    <strong>Countries of Regulatory Clearance</strong>
                                                    <p class="m-b-xs">{{ $techdetails->regulatory_clearance }}</p>
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
                                                    <strong>Additional Information</strong>
                                                    <p class="m-b-xs">{{ $techdetails->additional_information }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Attachment1</strong>
                                                    <p class="m-b-xs">
                                                        <a href="JavaScript:void(0);" id="resume1View" data-url="{{ $url1 }}">
                                                            {{ $techdetails->attachment1 }}
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Attachment2</strong>
                                                    <p class="m-b-xs">
                                                        <a href="JavaScript:void(0);" id="resume2View" data-url="{{ $url2 }}">
                                                            {{ $techdetails->attachment2 }}
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

        $('#resume1View').on('click',function(){
           var url = $(this).attr('data-url');
           window.open(url, "_blank");
        })

        $('#resume2View').on('click',function(){
           var url = $(this).attr('data-url');
           window.open(url, "_blank");
        })
    });
</script>
@endsection