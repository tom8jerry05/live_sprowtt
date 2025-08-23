@extends('layouts.frontend')

@section('content')
<style type="text/css">
.sp-new-banner-caption{
    float: left;
    position: absolute;
    top: 10%;
    /* max-width: 80%; */
    /* width: auto; */
    padding: 0;
    text-align: left;
    /* margin: 0 10%; */
    flex: 0 0 80%;
}
.sp-new-banner-caption span {
    color: #fff;
    font-weight: 600;
}

.sp-new-banner-caption h4 {
    color: #36e716;
    float: left;
    width: 100%;
    font-weight: 600;
    padding-top: 10px;
}

.sp-new-banner-caption h5 {
    color: #fff;
    float: left;
    width: 100%;
    line-height: 28px;
    text-align: justify;
}
.btn.btn-link.blue-btn{
    color: #fff;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
    padding: 8px 16px;
    text-decoration: none;
    letter-spacing: 0.5px;
    background-color: #2272e9;
    border-radius: 25px;
    font-size: 17px;
    margin-top: 25px;
    box-shadow: 2px 1px 8px #1b1a1a;
}

.sp-new-banner-images{
    position: absolute;
    top: 10%;
    left: 60%;
}

.sp-new-banner-images .img-bck-layer{
    height: 470px;
    width: 300px;
    background-color: #d2cccc;
    opacity: 0.6;
    position: absolute;
    top: -33px;
    left: 70px;
}
.sp-new-banner-images .img-frn-layer{
    position: absolute;
    top: 1px;
    box-shadow: 2px 1px 8px #1b1a1a;
}

.sp-tomb-exec-summ-sec {
    float: left;
    width: 100%;
    padding: 50px 0;
}




.sp-tomb-exec-left {float: left;width: 40%;}
.sp-tomb-exec-right {float: left;width: 60%;}
.sp-tomb-exec-right p{text-align: justify;}
.sp-tomb-left-head{border-left: 3px solid #7ba04f;padding-left: 10px;}
.sp-tomb-left-head h4{font-weight: 700;font-size: 2.5rem;}
.sp-tomb-left-head p{font-size: 1.50rem;font-weight: 600;color:#7ba04f;}
.sp-tomb-left-foot{text-align: center;}
.sp-tomb-left-foot img{width: 300px;}


.sp-tomb-detail-sec{float: left;width: 100%;padding: 50px 0;background-color: #f7f7f7;}


.sp-tomb-detail-con {
    float: left;
    width: 100%;
    background-color: #fff;
    box-shadow: 1px 1px 2px #c8c2c2;
    padding: 15px;
    border-radius: 3px;

}


.sp-tomb-detail-con h4{
    font-weight: 600;
}

.sp-tomb-detail-inner-con{float: left;width: 100%;background-color: #7ba04f;padding: 10px;border-radius: 5px;margin: 5px 0px;}
.sp-tomb-detail-inner-con p{float: left;width: 70%;margin: 0;color: #fff;padding: 3px 5px;font-weight: 500;}
.sp-tomb-detail-inner-con .btn.btn-link.blue-btn{float: left;margin-top: 0px;font-size: 14px;padding: 6px 12px;box-shadow: 1px 1px 1px #444242;}

.line-spacer {
    float: left;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px
}


.sp-new-footer-sec{
    float: left;
    width: 100%;
    background-color: unset; 
    height: auto;
    padding: 0px;
}

.sp-new-footer-sec .footer-about{
    float: left;
    padding: 25px 60px 0px 0px;
    width: 100%;
    position: absolute;
}

.sp-new-footer-sec .footer-contact{
    float: left;
    padding: 0 10px;
    width: 100%;
    position: absolute;
    left: 40%;
}

.sp-new-footer-sec .footer-newsletter{
    float: left;
    padding: 0px 70px;
    width: 100%;
    position: absolute;
    left: 65%;
}

.emailbtn {
    float: right;
    position: absolute;
    right: 75px;
    margin-top: 5px;
    background-color: #7ba04f;
    border: none;
}

.sp-copyright-section .copy-area-right{
    float: left;
    width: 100%;
    padding: 7px 10px;
    font-size: 14px;
    text-align: right;
}

.copy-area-right .links a{
    color: #fff;
}

.copy-area-right .links span{
    color: #fff;
    padding: 0px 10px;
}


</style>




<section class="col-md-12 sp-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/Home-page-banner.png') }}" alt="Banner"/>
    </div>

    <div class="container">
        <div class="col-6 sp-new-banner-caption">
            <span class="display-2" > Description </span>
            <h4>ALUMINUM ALLOY FOR HIGH TEMPERATURE</h4>
            <h5>Applications A novel low cost cast aluminum alloy offers dramatic strength at high temperatures NASA's Marshall Space Flight Center originally developed a high-performance piston alloy to meet US I egislative restrictions on vehicular exhaust hydrocarbon emission& NASA 398 aluminum alloy exhibits excellent tensile and fatigue strength at</h5>
            <a href="#" class="btn btn-link blue-btn pull-left">Read More</a>
        </div>
        <div class="col-6 sp-new-banner-images">
            <div class="img-bck-layer">
            </div>
            <div class="img-frn-layer">
                <img src="{{ asset('frontend/images/tombstone-details.png') }}" width="300" height="400">   
            </div>
        </div>
    </div>
</section>

<section class="col-md-12 sp-tomb-exec-summ-sec">
    <div class="container">
        <div class="col-5 col-md-5 sp-tomb-exec-left">
            <div class="sp-tomb-left-head">
                <h4>Aluminum-silicon hypereutectic alloy</h4>
                <p>Executive summary</p>
            </div>
            <div class="sp-tomb-left-foot">
                <img src="{{ asset('frontend/images/logo-opacity.png') }}">
            </div>
        </div>
        <div class="col-7 col-md-7 sp-tomb-exec-right">
            <p>ASA 398 is an aluminum-silicon hypereutectic alloy (16% w. Si) with a microstructure that consists Of small polygonal primary silicon particles evenly distributed in an aluminum matrix. Tho alloy can be utilized in automotive applications with high mechanical loading at elevated temperatures from 500 F (260C) to 700 F (370C), and can offer significant improvements in strength relative to most conventional aluminum alloys. Material physical and mechanical properties for NASA 39B- T5 (permanent mold) are provided in Tablo 1 below. Additional information is available on request. </p>
            <a href="#" class="btn btn-link blue-btn pull-left">Read More</a>
        </div>
    </div>
</section>


<section class="col-md-12 sp-tomb-detail-sec">
    <div class="container">
        <div class="col-md-12 sp-tomb-detail-con">
            <h4>Team name</h4>
            <div class="sp-tomb-detail-inner-con">
                <p>Vote for this presentation</p>
                <a href="#" class="btn btn-link blue-btn pull-left">VOTE NOW</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>Team Name: Your School Here ALUMINUM-SILICON HYPEREUTECTIC ALLOY </p>
                <!-- <a href="#" class="btn btn-link blue-btn pull-left">Read More</a> -->
            </div>

            <div class="line-spacer"></div>
            <h4>Project Details </h4>
            <div class="sp-tomb-detail-inner-con">
                <p>Executive summary PDF: </p>
                <a href="#" class="btn btn-link blue-btn pull-left">VIEW PDF </a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>View Team presentation:</p>
                <a href="#" class="btn btn-link blue-btn pull-left">PRESENTATION VIDEO &nbsp;&nbsp;<i class="fa fa-play"></i></a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>Ask Questions about this Tecnology</p>
                <a href="#" class="btn btn-link blue-btn pull-left">ASK BUTTON</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>Technology Transfer Video: </p>
                <a href="#" class="btn btn-link blue-btn pull-left">VIDEO TECHNOLOGY &nbsp;&nbsp;<i class="fa fa-play"></i></a>
            </div>

            <div class="line-spacer"></div>
            <h4>Team Information </h4>
            <div class="sp-tomb-detail-inner-con">
                <p>View Team Members: </p>
                <a href="#" class="btn btn-link blue-btn pull-left">TEAM MEMBERS</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>View Competition Judges </p>
                <a href="#" class="btn btn-link blue-btn pull-left">VIEW JUDGES</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>View Team Score Board </p>
                <a href="#" class="btn btn-link blue-btn pull-left">VIEW BOARD</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>View TOP 20 Bracket Competition</p>
                <a href="#" class="btn btn-link blue-btn pull-left">VIEW</a>
            </div>
            <div class="line-spacer"></div>
            <div class="sp-tomb-detail-inner-con">
                <p>Be a part of the next Big Technology!</p>
                <a href="#" class="btn btn-link blue-btn pull-left">JOIN A TEAM</a>
            </div>

            <div class="sp-tomb-detail-inner-con">
                <p>Judge this Team</p>
                <a href="#" class="btn btn-link blue-btn pull-left">JOIN NOW</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>View History of NASA spin outs </p>
                <a href="#" class="btn btn-link blue-btn pull-left">VIEW SPIN OUTS</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p>Register to attend live Events</p>
                <a href="#" class="btn btn-link blue-btn pull-left">REGISTER</a>
            </div>
        </div>
    </div>
</section>



<footer class="sp-new-footer-sec">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/details-footer.png') }}" alt="Banner"/>
    </div>
    <div class="container">
        <div class="col-md-4 footer-about">
            <img src="{{ asset('frontend/images/sprowtt-footer.png') }}" alt="sprowtt"/>
            <p class="footer-abt">Sprowtt Launch Pad Inc. was founded in 2019 as a subsidiary of Sprowtt Inc.  Sprowtt, the parent company established in 2012, is a financial technology (FinTech) company that specializes in creating capital formation and revenue generating software platforms for the burgeoning capital raising industry created by the JOBS Act for medium sized issuer companies. Sprowtt Launch Pad Inc. plans to<a href="javascript:void(0);" class="ftabt-read-more">Read More</a></p>
        </div>
        
        <div class="col-md-4 footer-contact">
            <h6>Contact Us</h6>
            <div class="contact-address">
                <div class="col-md-2 address-icon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 address-address">
                    <p>3030 N Rocky Point Dr W<br>Suite 150Tampa,<br>FL 33607</p>
                </div>
            </div>
            <div class="contact-address">
                <div class="col-md-2 address-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 address-address">
                    <p><a href="tel:1 (888) 39-SPROW">1 (888) 39-SPROW</a><br><a href="tel:1 (888) 397-7769">1 (888) 397-7769</a></p>
                </div>
            </div>
            <div class="contact-address">
                <div class="col-md-2 address-icon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 address-address">
                    <p><a href="mailto:info@sprowtt.com">info@sprowttlaunchpad.com</a></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 footer-newsletter">
            <h6>Newsletter</h6>
            <div class="contact-subscribe">
                <form id="newsletter-form">
                   <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <button class="btn btn-success emailbtn"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                </form>

            </div>


            <div class="social-icons">
                    
                <a href="https://www.linkedin.com/company/sprowtt/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                
                <a href="https://www.facebook.com/Sprowtt/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                <a href="https://www.youtube.com/channel/UC0bhNnrxcMj6zFVhCBRMJFw" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    
            </div>
        </div>
    </div>
    
    <div class="col-md-12 sp-copyright-section">
        <div class="container">
            <div class="col-md-8 copy-area">
                <p>Copyright &copy; 2019 <a href="http://sprowttlaunchpad.com/" target="_blank">Sprowtt Launch Pad</a>. All rights reserved.</p>
            </div>

            <div class="col-md-4 copy-area-right">
                <div class="links">
                    <a href="{{ route('PrivacyPolicy') }}">Privacy Policy</a> <span>|</span>
                    <a href="{{ route('TermsofService') }}">Terms of Service</a>
                </div>

            </div>
        </div>
    </div>
</footer>


@endsection