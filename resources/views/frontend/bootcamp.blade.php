@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-bootcamp-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Bootcamp-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Launch Your Venture </span> 
            <h4>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium volutptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</h4>        </div>
    </div>
</section>

<section class="col-md-12 sp-bootcamp-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 sp-bootcamp-sec-img">
                <img src="{{ asset('frontend/images/bootcamp-image.png') }}" alt="bootcamp"/>
            </div>
            <div class="col-md-7 sp-bootcamp-sec-content">
                <h2>Lorem ipsum dolor sit <br>amet consectetur adipiscing elit</h2>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </h4>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</h4>
            </div>
        </div>
    </div>
</section>

<section class="col-md-12 sp-bootcamp-venturedetails">
    <div class="container">
        <div class="col-md-12 details-block">
            <h2>2019 Venture Details</h2>
            <ul class="vesture-detail-list">
                <li>Lorem ipsum dolor sit amet, exercitation</li> 
                <li>Lorem ipsum dolor sit amet, exercitation</li> 
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>
        </div>
    </div>
</section>

<section class="col-md-12 sp-bootcamp-victory">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/win.jpg') }}" alt="Bootcamp-Banner"/>
    </div>
    <div class="container">         
            <div class="col-md-12 sp-banner-caption">
                <img src="{{ asset('frontend/images/trophy.png') }}" alt="Trophy"/>
                <h2>Get a Chance to win</h2>
                <span class="display-1">$100,000</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea pariatur.</p>
            </div>
    </div>    
</section>

<section class="col-md-12 sp-bootcamp-process">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sp-process-block-left">                
            </div>
            <div class="col-md-6 sp-process-block-right">
                <div class="col-md-2 spiconblock">
                    <img src="{{ asset('frontend/images/icon-admission.png') }}" alt="admission"/>
                </div>
                <div class="col-md-10 sp-process-block">
                    <h2>Admissions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                </div>                
            </div>
        </div> <!-- /- row -->
        <div class="row">
            <div class="col-md-6 sp-process-block-left">      
                <div class="col-md-2 spiconblock">
                    <img src="{{ asset('frontend/images/icon-experience.png') }}" alt="admission"/>
                </div>
                <div class="col-md-10 sp-process-block">
                    <h2>Guided or Flexible<br>Learning Experience</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                </div>                                          
            </div>
            <div class="col-md-6 sp-process-block-right">     
            </div>
        </div> <!-- /- row -->
        <div class="row">
            <div class="col-md-6 sp-process-block-left">                
            </div>
            <div class="col-md-6 sp-process-block-right">
                <div class="col-md-2 spiconblock">
                    <img src="{{ asset('frontend/images/icon-who-should.png') }}" alt="admission"/>
                </div>
                <div class="col-md-10 sp-process-block">
                    <h2>Who Should Enroll?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                </div>                
            </div>
        </div> <!-- /- row -->
        <div class="row">
            <div class="col-md-6 sp-process-block-left">      
                <div class="col-md-2 spiconblock">
                    <img src="{{ asset('frontend/images/icon-process.png') }}" alt="admission"/>
                </div>
                <div class="col-md-10 sp-process-block">
                    <h2>Application process</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                </div>                                          
            </div>
            <div class="col-md-6 sp-process-block-right">     
            </div>
        </div> <!-- /- row -->
    </div>
</section>

<section class="col-md-12 sp-apply-now-section">
    <div class="container">
        <div class="col-md-9 sp-apply-quote">
            <h3>Apply now to book your place for the bootcamp!</h3>
        </div>
        <div class="col-md-3 sp-apply-btn">
            <button class="btn btn-link white-outline">Apply Now</button>
        </div>
    </div>
</section>

@endsection