@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-how-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="HowItWorks-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> How It Works </span>
            <h4>"You don't Concentrate on risk you concentrate on results no risk is too great to prevent the necessary job from getting done."</h4>
            <p>Chuck Yagger NASA Test Pilot</p>  
                      
        </div>
    </div>
</section>


<section class="sp-ch-text-section">
    <div class="container">
        <div class="sp-ch-text-wrapper">
            <p>Applications are already open for individuals and university teams to select the Technology Transfer Project and apply to be the next great startup. Every team that joins will be a part of the global pitching competition. Out of all the applications for the Global Startup Competition, the top 20 most promising startups will be announced to the public. Through competition judging of the next great Technology Transfer startups, teams can battle their way into the Global Meetup. Perhaps you have your own technology and would like to build a team here on the Launch Pad to launch your company, complete the application and get started today!</p>
            <div class="sp-ch-text-link">
                <a href="new-tech" class="btn btn-link white-outline pull-right">Join now</a>
            </div>
        </div>
    </div>
</section>

<section class="col-md-12 sp-how-image-section">
    <div class="container">
        <div class="col-12 sp-image-caption">
            <img src="{{ asset('frontend/images/how-sprowtt.png') }}" alt="HowItWorks-Banner"/>
        </div>
    </div>
</section>



<section class="col-md-12 sp-how-doc-list"> 
    <div class="container">
        <h2>For Final Presentation</h2>      
        <p>Documents required for Presentation</p>          
        <ul class="doc-list">
            <li>Business Plan </li>
            <li>Projected Income statement </li>
            <li>Projected Balance sheet </li>
            <li>Projected cash flow statement </li>
            <li>List of complete resources needed (Foot notes)</li>
            <li>Patent and trademark documents</li>
            <li>Overview/due diligence documents on technology </li>
            <li>Valuation </li>
            <li>Product/service opportunity description </li>
            <li>Management team</li>
            <li>Video transcription</li>
            <li>Use of proceeds of Initial Funding </li>
        </ul>
    </div>
</section>


<section class="col-md-12 sp-solutions">    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 solution-image">
                <img src="{{ asset('frontend/images/ambass1image.jpg') }}" alt="Solutions"/>
            </div>
            <div class="col-md-7 solution-content sp-how-feature-sec">
                <h2>Questions and Answers</h2>
                <div class="container">
                    <div class="wrapper center-block">
                        <div id="accordion">
                            <div class="card">
                                <div class="inner-card">
                                    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <h5 class="mb-0 card-title"> 
                                             Who can become a Sprowtt Launch Pad Ambassador?
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Anyone can become a Sprowtt Launch Pad Ambassador™. The only requirement is that you know entrepreneurs, college students, or business owners in the USA who want to commercialize technology utilizing a team approach, through your introduction of Sprowtt Launch Pad. We also encourage business professionals, such as attorneys, accountants, investment bankers, business advisors, etc. to bring us clients or recommended non-client companies. We welcome professional, trade or other organizations, such as incubator associations and educational institutions, to become Sprowtt Launch Pad Ambassadors.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="mb-0 card-title">
                                        How can I introduce a company to Sprowtt Launch Pad?
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        You may have friends who are entrepreneurs or college students that have an interest in starting a business. They may need a new idea or technology to start or grow their business. Indeed, your Sprowtt Launch Pad Ambassador role is simple: just share a link on your social media platform, or send the link/a Sprowtt Ambassador™ code to the college students or business owners that you know. We can identify you as the source of the introduction to a company via the link or the Ambassador code, especially if the company applies for the use of a posted technology. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0 card-title">
                                        What else do I need to do in addition to sharing a Sprowtt Launch Pad Ambassador link?
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        The Sprowtt Launch Pad Ambassador Program works by simply sharing a Sprowtt Launch Pad Ambassador link on your social media account, or sending your own custom link or a Sprowtt Ambassador code to the contacts you know.<br>
                                        
                                        It’s our job to review the eligibility of the individuals you refer and guide them through the application process. Sprowtt Launch Pad is looking for someone who best represents our values and personality. Someone who can build followers and engage in conversations that promote technology transfer from the various government agencies. Sprowtt’s only request is that you understand the guidelines and conduct yourself in a professional manner.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h5 class="mb-0 card-title">
                                        What kind of companies or college students is Sprowtt Launch Pad looking for?
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                       We don’t have specific preferences regarding the types of companies or college students. Small-to- medium sized companies, and both undergraduate and graduate level students are all encouraged to join. We are looking for dedicated entrepreneurs who are willing to take on the responsibility and work in a team environment. It is a plus if the entrepreneurs have experience in developing a “crowd” such as customers, social media or professional support, etc.
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <h5 class="mb-0 card-title">
                                        How do I receive Ambassador fees?
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        Sprowtt Launch Pad does not pay fees. There is no employer or employee relationship as result of referring entrepreneurs to Sprowtt Launch Pad. An ambassador is not considered an associated person of Sprowtt. Accordingly, you are not authorized to make any representations on behalf of Sprowtt or bind Sprowtt in any way. Sprowtt Launch Pad is considering a reward-based program in the future, to be announced soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="col-md-12 sp-how-testimonial-section" style="display: none;">
    <div class="container">
        <div id="myCarouselT" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <!--<ol class="carousel-indicators">
                <li data-target="#myCarouselT" data-slide-to="0" class="active"></li>
                <li data-target="#myCarouselT" data-slide-to="1"></li>
                <li data-target="#myCarouselT" data-slide-to="2"></li>
            </ol>  --> 
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">        
                <div class="item carousel-item active">
                    <div class="img-box"><img src="{{ asset('frontend/images/testimonial-slider-img1.png') }}" alt=""></div>
                    
                    <p class="testimonial">“All good men and women must take responsibility to create legacies that will take the next generation to a level we could only imagine”</p>
                    <p class="overview">Jim Rohn</p>

                    <a href="#" class="btn btn-link green-outline pull-right">Become a Sprowtt Launch pad Ambassador</a>
                    <a href="#" class="btn btn-link green-outline pull-left">Change your Legacy Join Now</a>
                </div>
                
                      
            </div>
            <!-- Carousel controls -->
            <!-- <a class="carousel-control left carousel-control-prev" href="#myCarouselT" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarouselT" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a> -->
        </div>
    </div>
</section>

<section class="col-md-12 sp-how-banner-section testimonial">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/legacy.jpg') }}" alt="HowItWorks-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <h4>“All good men and women must take responsibility to create legacies that will take the next generation to a level we could only imagine”</h4>
            <p>Jim Rohn</p>
            <div class="legacy-btn-block">
                <a href="{{route('Ambassador')}}" class="btn btn-link white-outline">Change your Legacy Join Now Become a Sprowtt Launch pad Ambassador</a>
                <!--<a href="#" class="btn btn-link white-outline pull-left">Change your Legacy Join Now</a> -->
            </div>     
        </div>
    </div>
</section>

<section class="col-md-12 sp-support-section">
    <div class="container">
        <h3><span>You May Have Seen Us</span>Featured In</h3>
        <div class="col-md-12 sp-partners">
            <div class="col-md-3 sp-partner-logo">
                <img src="{{ asset('frontend/images/Forbes1.jpg') }}" alt="DCLG"/>
            </div>
            <div class="col-md-3 sp-partner-logo">
                <img src="{{ asset('frontend/images/Inc_image1.jpg') }}" alt="DCLG"/>
            </div>
        </div>
    </div>
</section>

<section class="col-md-12 sp-how-ruready-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/bull.png') }}" alt="Get Started"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-4">Everyone here has the sence that right now is one of those moments when we are influencing the future.</span>
            <h4>Steve Jobs</h4> 
                     
            <a href="{{ route('MemberApply','0') }}" class="btn btn-link white-outline">Join a Technology Team Now!</a>
        </div>
    </div>
</section>




@endsection

@section('script')
<script type="text/javascript">
    
</script>
@endsection