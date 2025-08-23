@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-awards-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.png') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Awards </span>            
        </div>
    </div>
</section>

<section class="col-md-12 sp-awards-blocks">
    <div class="container">
        <div class="col-md-12 sp-award-box">
            <div class="col-md-3 sp-award-image">
                <img src="{{ asset('frontend/images/startup-challenge.png') }}" alt="Startup Challenge"/>
            </div>
            <div class="col-md-9 sp-award-content">
                <button class="btn btn-success slider-button reg-open">Registration Open</button>
                <div class="awards-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <h4>Date: 19th July, 2019  |  Chicago</h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success slider-button">Apply</button>
            </div>
        </div>
        
        <div class="col-md-12 sp-award-box">
            <div class="col-md-3 sp-award-image">
                <img src="{{ asset('frontend/images/global-startup-challenge.png') }}" alt="Global Challenge"/>
            </div>
            <div class="col-md-9 sp-award-content">
                <button class="btn btn-success slider-button reg-open">Registration Open</button>
                <div class="awards-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <h4>Date: 19th July, 2019  |  Chicago</h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success slider-button">Apply</button>
            </div>
        </div>
        
        <div class="col-md-12 sp-award-box">
            <div class="col-md-3 sp-award-image">
                <img src="{{ asset('frontend/images/swisscom-startup-challenge.png') }}" alt="Swisscom Challenge"/>
            </div>
            <div class="col-md-9 sp-award-content">
                <button class="btn btn-success slider-button reg-open">Registration Open</button>
                <div class="awards-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <h4>Date: 19th July, 2019  |  Chicago</h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success slider-button">Apply</button>
            </div>
        </div>
        
        <div class="col-md-12 sp-award-box">
            <div class="col-md-3 sp-award-image">
                <img src="{{ asset('frontend/images/bussiness-challenge.png') }}" alt="Business Challenge"/>
            </div>
            <div class="col-md-9 sp-award-content">
                <button class="btn btn-success slider-button reg-open">Registration Open</button>
                <div class="awards-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <h4>Date: 19th July, 2019  |  Chicago</h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="btn btn-success slider-button">Apply</button>
            </div>
        </div>
        
    </div>
</section>

@endsection