<style type="text/css">
header {background-color: #ffffff;}
.listitems a{color: #000;}
.sp-copyright-section{height: 35px;}
.copy-area p{margin-top: 10px;}
.sprowttnavbar .btn.btn-link.white-outline{    background-color: blue;border-radius: 25px;font-size: 17px;}
.btn.btn-link.white-outline:hover{}

.listitems a{text-transform: uppercase;    font-size: 17px;font-weight: 600;}

</style>



<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top sprowttnavbar" role="navigation">

            <div class="col-md-2 sp-logo-area">

                <a class="navbar-brand" href="{{ route('Home') }}"> <img src="{{ asset('frontend/images/sprowtt-logo.png') }}" alt="Sprowtt"/> </a>

            </div>

            <div class="col-md-8 sp-nav-area">

                <ul class="nav navbar-nav navbar-right">

                    <li class="listitems"> <a href="{{ route('Home') }}"> Home </a> </li>

                    <li class="listitems"> <a href="{{ route('StartupChallenges') }}"> Startup Challenges </a> </li>

                    <li class="listitems"> <a href="{{ route('HowitWorks') }}"> How it works </a> </li>                      

                    <li class="listitems dropdown open listitems-about"> 

                        <a href='{{ route("About") }}'> About </a> 

                        <ul class="dropdown-menu learnmenu aboutmenu">

                            <span class="listimagespace"> 

                                <img src="{{ asset('frontend/images/background-about.png') }}"> 

                            </span>

                            <div class="clslearnhow">

                                <h3> About Sprowtt </h3>

                                <div class="learnleftblock">



                                    <span style="display: none;"> 

                                        <a href="{{ route('Inventors') }}" > 

                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}"> Inventors form

                                        </a>

                                    </span>

                                    <span style="display: none;"> 
                                        <a href="{{ route('Tech') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}"> Tech form
                                        </a>
                                    </span>

                                    

                                    <span style="display: none;"> 
                                        <a href="{{ route('About') }}"> 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}"> Our About
                                        </a> 
                                    </span>

                                    <span> 
                                        <a href="{{ route('ManagementTeam') }}"> 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Management Team
                                        </a> 
                                    </span>



                                    <span> 
                                        <a href="{{ route('AdvisoryBoard') }}"> 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Advisory Board
                                        </a> 
                                    </span>



                                    <div class="socialiconsmenu">
                                        <h4> Contact With Us </h4>
                                        <span> 
                                            <a href="https://www.facebook.com/Sprowtt/" target="_blank"> <img src="{{ asset('frontend/images/facebook.png') }}" alt="facebook"> </a>
                                           <!-- <a href="#"> <img src="{{ asset('frontend/images/twitter.png') }}" alt="twitter"> </a>-->
                                            <a href="https://www.linkedin.com/company/sprowtt/" target="_blank"> <img src="{{ asset('frontend/images/linked-in.png') }}" alt="linkedin"> </a>
                                            <a href="https://www.youtube.com/channel/UC0bhNnrxcMj6zFVhCBRMJFw" target="_blank"> <img src="{{ asset('frontend/images/youtube.png') }}" alt="youtube"> </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="learnrightblock">
                                    <h4> Contact Us </h4>
                                    <form id="contact-form">
                                        <div class="nav-contactForm">
                                            <input placeholder="Your Name" type="text" name="name" id="name" required>
                                            <input placeholder="Your Email" type="email" name="email" id="email" required>
                                            <textarea name="message" id="message" required></textarea>
                                        </div>
                                        <li class="kopie1"><button class="btn" type="submit">Send Message</button></li>
                                    </form>
                                </div>
                            </div>
                        </ul>
                    </li>

                    
                    <li class="listitems dropdown open listitems-teams"> 
                        <a href="{{ route('Teams') }}"> Teams </a>
                        <ul class="dropdown-menu learnmenu investmenu teamsmenu">
                            <span class="listimagespace"> 
                                <img src="{{ asset('frontend/images/background-invest.png') }}"> 
                            </span>
                            <div class="clslearnhow">
                                <h3> Teams </h3>
                                <div class="learnleftblock">
                                    <span> 
                                        <a href="{{ route('MemberApply','0') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Apply to join a Team
                                        </a>
                                    </span>
                                    <span> 
                                        <a href="{{ route('Tech') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Apply to bring your new technology
                                        </a>
                                    </span>
                                    <span> 
                                        <a href="{{ route('Judge','0') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Apply for competition judge
                                        </a>
                                    </span>
                                    <span> 
                                        <a href="{{ route('Ambassador') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Apply to be a sprowtt ambassador 
                                        </a>
                                    </span>
                                    <span> 
                                        <a href="{{ route('Internship') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Apply for Sprowtt Internship
                                        </a>
                                    </span>

                                    <span> 
                                        <a href="{{ route('Sponsorship') }}" > 
                                            <img src="{{ asset('frontend/images/right-arrow-icon.png') }}">Apply for Sponsorship
                                        </a>
                                    </span>
                                </div>

                                <div class="learnrightblock">
                                    <p>“Become a member of the Sprowtt team and be among the next trail blazers into the future. Here at Sprowtt, we believe everyone can be part of the mission no matter how big or small that role is, when we choose you to be a part of our Sprowtt Team. Select the role you would like to have, and join us in the mission of commercializing the greatest technologies in the world”</p>
                                    <span class="QuoteBy">Mark Jones CEO Sprowtt Launch Pad Inc.</span>
                                    <li class="kopie1"><a href="{{ route('MemberApply','0') }}">Join the Team</a></li>
                                </div>
                            </div>
                        </ul>  
                    </li>
                </ul>


                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="{{ route('Home') }}">Home</a>
                    <a href="{{ route('StartupChallenges') }}">Startup Challenges</a>
                    <a href="{{ route('HowitWorks') }}">How it works</a>
                    <a href="#">About</a>
                    <a href="#">Teams</a>
                    @guest
                      <a href="{{ route('login') }}" class="btn btn-link white-outline pull-left">Log In</a>
                    @else
                      <a href="{{ route('dashboard') }}" class="btn btn-link white-outline pull-left">Dashboard</a>
                    @endguest
                </div>
                <span class="mobilMenu" onclick="openNav()">&#9776;</span>
            </div>
            <div class="col-md-2 sp-btn-link-area">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-link white-outline pull-left">Log In</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-link white-outline pull-left">Dashboard</a>
                @endguest
        	</div>
        </nav>
    </div>
</header>





