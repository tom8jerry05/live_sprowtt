@extends('layouts.frontend')

@section('content')


<style type="text/css">
    .search-sec{
        padding: 2rem;
    }
    .search-slt{
        display: block;
        width: 100%;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #55595c;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        height: calc(3rem + 2px) !important;
        border-radius:0;
    }
    .wrn-btn{
        width: 100%;
        font-size: 16px;
        font-weight: 400;
        text-transform: capitalize;
        height: calc(3rem + 2px) !important;
        border-radius:0;
    }
    @media (min-width: 992px){
        .search-sec{
            float: left;
            background: rgba(91, 146, 3, 0.51);
            width: 100%;
            /* position: relative; */
            /* top: -114px; */

        }
    }

    @media (max-width: 992px){
        .search-sec{
            background: #1A4668;
        }
    }

    .challagesPagi{
        float: right;
    }
</style>
<section class="search-sec">
    <div class="container">
        <form action="{{ route('tombstone.search') }}" method="get" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                            <input type="text" name="projectName" class="form-control search-slt" placeholder="Project Keyword" value="">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Agency Type</option>
                                <option>Nasa</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>





<section  style="float: left;width: 100%;padding: 0;height: auto;padding-top: 40px;">
    <div class="container">
        <div class="gridblck row">


            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 30px;">
                <div class="offer-item">
                    <div class="service-image-block">
                        <img src="{{ asset('frontend/images/background-about.png') }}" alt="service image"/>
                    </div>
                    <div class="offers-middle">
                        <div class="left">
                            <h3>App Prasanth</h3>
                            <div class="inner-off-middle">
                                <p class="place"> 
                                    <span>AGENCY : NASE</span></p>
                                <p class="font-12">
                                    <span>STATUS : Open</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="offers-lower">
                        <p class="block-with-text show-read-more" data-id='' data-status=''>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla hendrerit ut massa vitae tempor. Nulla porta nisi leo, nec ultrices risus ultricies id.<a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>

                    <div class="offers-footer"> 
                        <a class="btn-chat btnpadding appCheck" data-id='' data-status='' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                        <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                        <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                        <a href="#" class="btn-chat btnpadding projDetails">
                        <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                    </div>
                </div>
            </div>
            


            
            

            

        </div>
    </div>
</section>

@endsection