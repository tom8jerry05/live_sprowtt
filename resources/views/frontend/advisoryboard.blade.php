@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-ch-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Advisory Board </span>
        </div>
    </div>
</section>

<section class="col-md-12 sp-aboutpg-section">
    <div class="container-fluid">
        <div class="col-4 col-md-4 sp-aboutpg-whatweare">
            <h5>Meet our Advisory Board</h5>
            <h2>Sprowtt team</h2>
        </div>
        <div class="col-8 col-md-8 sp-sprowtt-about">
            <p>The Sprowtt Launch Pad team has the experience to facilitate Technology Transfers between government agencies and private companies. We bring value to relationships with the government’s tech transfer programs through confidence and experience that is important in bringing attractive and growing companies to our launch pad.</p>
        </div>

        <div class="col-12 col-md-12 divider">
        </div>
    </div>
</section>


<section class="team-members">
    <div class="container">
        <!-- Wrapper for slides team management begins-->
        <div class="row">
            <div class="col-md-12">
                <div class="carousel1 slide1" id="myCarousel14">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-6">
                                <div class="members">
                                    <div class="member-pic">
                                        <img src="{{ asset('frontend/images/LA.jpg') }}">
                                    </div>
                                    <div class="member-data">
                                        <h2>LANCE <span class="green-color"></span>ABLIN</h2>
                                        <p></p>
                                        <p>Mr. Ablin has a diverse and experienced background in many areas of business, as both an investor and a serial entrepreneur.</p>
                                        <a class="btn btn-default" href="{{ route('AdvisoryDescription') }}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Wrapper for slides team management ends-->
        <div class="more-members"></div>
       
    </div>
</section>

@endsection