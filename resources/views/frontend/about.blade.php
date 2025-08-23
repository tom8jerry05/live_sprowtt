@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-ch-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> About </span>
            <h4>I was out there somewhere with the opportunity to see something and be somewhere and do something that only twelve human beings in the history of mankind have been able to do or be or see.</h4>
            <p >Gene Cernan Astronaut</p>
        </div>
    </div>
</section>

<section class="col-md-12 sp-aboutpg-section">
    <div class="container-fluid">
        <div class="col-12 col-md-12 sp-aboutpg-whatweare">
            <h5>Who We Are And What We Do</h5>
            <h2>What Is Sprowtt Launch Pad</h2>
        </div>

        <div class="col-12 col-md-12 ch-challenge-content">
            <img src="{{ asset('frontend/images/about-img.jpg') }}">
            <h4>Sprowtt Launch Pad works with companies and selected outreach teams to explore the market potential of NASA portfolio technologies. Sprowtt Launch Pad is an opportunity for new and existing companies to utilize the Sprowtt platform with no up-front fees, to encourage further space technology commercialization by entrepreneurs. It is available to both existing companies and start-ups formed to commercialize NASA, NIH, DOD, and EPA technology, and assists in addressing many of the challenges faced by start-up companies; such as raising capital and securing intellectual property rights. Selected teams will write business plans that will lay the foundation for new companies. Teams will compete in a multi-phase competition, currently scheduled to take place in late 2020, that is designed to validate the business plans and reward the best of them. Teams will be judged as to the feasibility of commercialization of the chosen technology and the overall plan for its implementation. The winners of the competition will be awarded the opportunity to utilize the Sprowtt platform at no additional cost to pursue the required capital to launch their company.</h4>
            
            <h4>Sprowtt Launch Pad supports government agencies’ Technology Transfer Programs, ensuring that innovations developed for exploration and discovery are broadly available to the public, thereby maximizing their benefit to the nation. Whether you're looking to start a new company, enhance an existing product, or create a new product line, you can gain a competitive edge in the marketplace by putting EPA technology to work for you.</h4>
            
            <h4>The Sprowtt Launch Pad simplifies the EPA’s Technology Transfer Portal by hosting information on all of the EPA-developed technologies available to your startup or existing business. The EPA patent portfolio contains over a hundred different technologies. Sprowtt Launch Pad selects the most recent and emerging technologies from the EPA that are available for licensing. Sprowtt Launch Pad is organized into categories and made searchable, so that you can easily identify technologies suited to building your team and launching your business into the Sprowtt Challenge.</h4>
            
            

        </div>
    </div>
</section>

<section class="col-md-12 sp-add-resume-section">
    <div class="container">
        <div class="col-md-9 sp-resume-quote">
            <h3 class="mem-quote">Join a team or bring your entire team from your college or university, and be a part of the next greatest commercialization competition ever launched!</h3>
        </div>
        <div class="col-md-3 sp-add-resume-btn">
            <a href="{{ route('MemberApply','0') }}" class="btn btn-link white-outline">Join as Team member now</a>
        </div>
    </div>
</section>

<section class="col-md-12 sp-aboutpg-section">
    <div class="container">
        <div class="col-12 col-md-12 ch-challenge-content">
            <h4>Register to Judge the universities and colleges in the Collegiate Entrepreneurship Tech Transfer Competitions. Bring your project or select a technology transfer below. You will be aligned with a team, or perhaps you have what it takes to lead the mission and be selected Team Leader. Through the Launch Pad, you gain global exposure and connect to opportunities faster while maximizing innovation potential and discovering new technologies and solutions. Collaborate on a global scale to support the growth of startups. Whichever project you choose to participate in, the Launch Pad will support you with our collaborative tools. Our successful and ready-to-go parent company, Sprowtt Inc., helps you to accelerate local and global growth by securing the necessary capital for your project.</h4>

            <h4>Build a team, network with like-minded entrepreneurs who are building startups and discuss solutions together, meet potential customers and investors, and develop partnerships. Expand your startup into new countries. We are entrepreneurs ourselves and know what it takes to build a company. We know how important correct capital formation is, and Sprowtt Inc. and its resources are standing ready to assist you and your startup team. The launch pad has industry experts ready to support your startup. We know how much a single connection or piece of advice can mean for the future of your company.</h4>

            <h4>Applications are already open for individuals and university teams to select the Technology Transfer Project and apply to be the next great startup. Every team that joins will be a part of the global pitching competition. Out of all the applications for the Global Startup Competition, the top 20 most promising startups will be announced to the public. Through competition judging of the next great Technology Transfer startups, teams can battle their way into the Global Meetup.</h4>
        </div>
    </div>
</section>





@endsection