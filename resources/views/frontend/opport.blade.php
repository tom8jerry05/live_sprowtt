@extends('layouts.frontend')

@section('content')

<section class="col-md-12 offers-section">
    <div class="container-fluid">

        <div class="heading text-center">
            <h1><span>Current Opportunities at Sprowtt</span>Equity Offerings</h1>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div id="Carousel" class="carousel slide">                    
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>
                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="{{ route('ComingSoon') }}" class="btn-chat btnpadding">VIEW CHAT</a>

                                            <a href="{{ route('ComingSoon') }}" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>

                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>
                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>
                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>

                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>
                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>
                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>

                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/temp-tombstone-ad.png') }}" alt="service image"/>
                                        </div>
                                        <div class="offers-middle">
                                            <div class="left">
                                                <h3>Business name here</h3>
                                                <p class="place">
                                                    <img src="{{ asset('frontend/images/tombstone-icon-map-pin.png') }}">Anywhere, USA</p>
                                                <p class="font-12"> Your Business description here</p>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="btn btn-default btn-xs" style="margin-bottom: 12px;"> Apply Now</a>
                                                <a href="#" class="btn btn-default btn-xs"> Details</a>
                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <div class="up">
                                                <p class="left"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}"><span>0 </span>Investors</p>
                                                <p class="right"><img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}"><span>0 </span>Days Left</p>
                                            </div>
                                            <div class="down">
                                                <p class="left">0% </p>
                                                <p class="right"><span>$0</span> of %0</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:39%">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a href="#" data-toggle="modal"  class="btn-chat btnpadding">VIEW CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">
                                                <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a data-toggle="modal" href="#socialloginmodal" class="btn-chat btnpadding">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ul>
    
                    <div class="arrow-controls">
                        <a data-slide="prev" href="#Carousel" class="left carousel-control" style="border: none;">
                            <img src="{{ asset('frontend/images/slider-arrow.png') }}" alt="<"/></a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control" style="border: none;">
                            <img src="{{ asset('frontend/images/slider-arrow.png') }}" alt="<"/></a>
                    </div>
                </div>
            </div>
        </div>   

        <div class="search-opp text-center"> 
            <a class="btn btn-default text-uppercase" href="{{ route('SrcOpportunities') }}">
                <img src="{{ asset('frontend/images/button-icon-search2.png') }} ">Search Opportunities
            </a> 
        </div>                                         
    </div>
</section>

<section class="col-md-12 sp-services-section" >
    <div class="container-fluid">        
        <div class="row">
            <div class="col-lg-12">
                <div id="Carousel" class="carousel slide">                    
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image1.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image2.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image3.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image4.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image1.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image2.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image3.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image4.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="item carousel-item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image1.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image2.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image3.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-item">
                                        <div class="service-image-block">
                                            <img src="{{ asset('frontend/images/service-image4.png') }}" alt="service image"/>
                                        </div>
                                        <h4 class="section-head">Lorem ipsum dolor sit </h4>
                                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut</p>
                                        <button class="btn btn-success slider-button">Submit Resume</button>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="arrow-controls">
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"><img src="{{ asset('frontend/images/slider-arrow.png') }}" alt="<"/></a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"><img src="{{ asset('frontend/images/slider-arrow.png') }}" alt="<"/></a>
                    </div>
                </div>
            </div>
        </div>                                            
    </div>
</section>

@endsection