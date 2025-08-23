@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-ch-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Management Team </span>
        </div>
    </div>
</section>

<section class="col-md-12 sp-aboutpg-section">
    <div class="container-fluid">
        <div class="col-4 col-md-4 sp-aboutpg-whatweare">
            <h5>Meet our Management team</h5>
            <h2>Sprowtt team</h2>
        </div>
        <div class="col-8 col-md-8 sp-sprowtt-about">
            <p> The Sprowtt Launch Pad team has the experience to facilitate Technology Transfers between government agencies and private companies. We bring value to relationships with the government’s tech transfer programs through confidence and experience that is important in bringing attractive and growing companies to our launch pad.</p>
        </div>

        <div class="col-12 col-md-12 divider">
        </div>
    </div>
</section>


<section class="team-members " style="">
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
                                        <img src="{{ asset('frontend/images/mark.jpg') }}">
                                    </div>
                                    <div class="member-data">
                                        <h2>MARK <span class="green-color"></span>JONES</h2>
                                        <h3>Founder and Chairman</h3>
                                        <p></p>
                                        <p>Mark brings over 30 years of entrepreneurial experience in successfully launching and managing large and small companies, including Sprowtt, Sprowtt Services, and Sprowtt Technologies</p>
                                        <a class="btn btn-default" href="{{ route('TeamDescription') }}">Read more</a>
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



<section class="team-members " style="display: none;">
    <div class="container">
        <!-- Wrapper for slides team advisory begins-->
        <div class="row">
            <div class="col-md-12">
               <div class="col-lg-12">
                    <div id="Carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Melitsa_org1_low.jpg">
                                            </div>
                                            <div class="member-data">
                                                <h2>MELITSA <span class="green-color"></span>WAAGE</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Melitsa brings an entrepreneurial spirit with varied extensive startup experiences to Sprowtt and</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Paul_Hoyt_headshot .png">
                                            </div>
                                            <div class="member-data">
                                                <h2>PAUL <span class="green-color"></span>HOYT</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Paul has over 40 years’ experience leading teams to improve profitability and productivity. Comfortable</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Tim Leary-Linked-In.jpg">
                                            </div>
                                            <div class="member-data">
                                                <h2>TIM <span class="green-color"></span>LEARY</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Tim Leary is a seasoned entrepreneur with 35+ years marketing, sales and financial experience in high-growth</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Paul_Hoyt_headshot .png">
                                            </div>
                                            <div class="member-data">
                                                <h2>PAUL <span class="green-color"></span>HOYT</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Paul has over 40 years’ experience leading teams to improve profitability and productivity. Comfortable</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Tim Leary-Linked-In.jpg">
                                            </div>
                                            <div class="member-data">
                                                <h2>TIM <span class="green-color"></span>LEARY</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Tim Leary is a seasoned entrepreneur with 35+ years marketing, sales and financial experience in high-growth</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Timothy.jpg">
                                            </div>
                                            <div class="member-data">
                                                <h2>TIM <span class="green-color"></span>HOGAN</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Tim has extensive experience as an innovator in the Financial Services Industry. His philosophy on</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Tim Leary-Linked-In.jpg">
                                            </div>
                                            <div class="member-data">
                                                <h2>TIM <span class="green-color"></span>LEARY</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Tim Leary is a seasoned entrepreneur with 35+ years marketing, sales and financial experience in high-growth</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="members">
                                            <div class="member-pic">
                                                <img src="https://www.sprowttcf.com/assets/images/team/Timothy.jpg">
                                            </div>
                                            <div class="member-data">
                                                <h2>TIM <span class="green-color"></span>HOGAN</h2>
                                                <h3>Advisory Board</h3>
                                                <p></p>
                                                <p>Tim has extensive experience as an innovator in the Financial Services Industry. His philosophy on</p>
                                                <a class="btn btn-default" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <ul class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class=""></li>
                            <li data-target="#Carousel" data-slide-to="1" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper for slides team advisory ends-->
    </div>
</section>
@endsection