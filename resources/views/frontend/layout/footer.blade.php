
@if ( (Request::segment(1) != 'tombstonedetail') && (Request::segment(1) != 'score-board') && (Request::segment(1) != 'playing-field'))
<section class="col-md-12 sp-articles-section" >
    <div class="container">
        <h3>Recent Articles</h3>
       
        <div class="col-md-4 sp-article-box">
            <img src="{{ asset('frontend/images/article1.png') }}" alt="article"/>
            <div class="col-12 article-caption">
                <small>NASA Announces</small>
                <p>New Tipping Point Partnerships for Moon and Mars Technologies</p>
                <small><a href="https://www.nasa.gov/press-point-partnerships-for-moon-and-mars-technologies" target="_blank">Read More <span class="glyphicon glyphicon-chevron-right">></span></a></small>
            </div>
        </div>
        <div class="col-md-4 sp-article-box">
            <img src="{{ asset('frontend/images/article2.png') }}" alt="article"/>
            <div class="col-12 article-caption">
                <small>NASA Announces</small>
                <p>Spinoff 2018 Highlights Space Technology Improving Life on Earth</p>
                <small><a href="https://www.jpl.nasa.gov/news/news.php?feature=7048" target="_blank">Read More <span class="glyphicon glyphicon-chevron-right">></span></a></small>
            </div>
        </div>
        <div class="col-md-4 sp-article-box">
            <img src="{{ asset('frontend/images/article3.png') }}" alt="article"/>
            <div class="col-12 article-caption">
                <small>NASA Announces</small>
                <p>Spin off Book Highlights NASA Technology Everywhere</p>
                <small><a href="https://www.jpl.nasa.gov/news/news.php?feature-7365" target="_blank">Read More <span class="glyphicon glyphicon-chevron-right">></span></a></small>
            </div>
        </div>
    </div>
</section>
@endif



@if ( (Request::segment(1) != 'playing-field')  && (Request::segment(1) != 'score-board') )
<footer class="sp-new-footer-sec">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/details-footer.png') }}" alt="Banner"/>
    </div>
    <div class="container">
        <div class="col-md-4 footer-about">
            <img src="{{ asset('frontend/images/sprowtt-footer.png') }}" alt="sprowtt"/>
            <p class="footer-abt">Sprowtt Launch Pad Inc. was founded in 2019 as a subsidiary of Sprowtt Inc.  Sprowtt, the parent company established in 2012, is a financial technology (FinTech) company that specializes in creating capital formation and revenue generating software platforms for the burgeoning capital raising industry created by the JOBS Act for medium sized issuer companies. Sprowtt Launch Pad Inc. plans to <a href="javascript:void(0);" class="ftabt-read-more">Read More</a></p>
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
                <p>Copyright &copy; 2020  <a href="http://sprowttlaunchpad.com/" target="_blank">Sprowtt Launch Pad</a>. All rights reserved.</p>
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

@endif




<!-- <footer>
	<div class="container">
    	<div class="col-md-3 footer-about">
        	<img src="{{ asset('frontend/images/sprowtt-footer.png') }}" alt="sprowtt"/>
            <p class="footer-abt">Sprowtt Launch Pad Inc. was founded in 2019 as a subsidiary of Sprowtt Inc.  Sprowtt, the parent company established in 2012, is a financial technology (FinTech) company that specializes in creating capital formation and revenue generating software platforms for the burgeoning capital raising industry created by the JOBS Act for medium sized issuer companies. Sprowtt Launch Pad Inc. plans to<a href="javascript:void(0);" class="ftabt-read-more">Read More</a></p>
        </div>
        <div class="col-md-3 footer-links">
        	<h6>Links</h6>
            <ul class="job-seekers-list">
                <li><a href="{{ route('PrivacyPolicy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('TermsofService') }}">Terms of Service</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-contact">
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
        
        <div class="col-md-3 footer-newsletter">
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
        </div>
    </div>
</footer> -->


<!--Modal: modalPush-->
<div class="modal fade" id="FooterAboutReadModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">About Sprowtt Launch Pad!</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="heading text-center">
            <p class="abt-content">Sprowtt Launch Pad Inc. was founded in 2019 as a subsidiary of Sprowtt Inc.  Sprowtt, the parent company established in 2012, is a financial technology (FinTech) company that specializes in creating capital formation and revenue generating software platforms for the burgeoning capital raising industry created by the JOBS Act for medium sized issuer companies. Sprowtt Launch Pad Inc. plans to lead a   robust federal lab-to-market campaign designed to stimulate technology transfer of U.S> government patanetdd inventions with strong market potential. This will be done through broad participation by leading colleges and universities and individual entrepreneurs, and focus on supporting commercialization of a wide-ranege of high-tech prodcust and services with technlgocal roots in the deferral government.  The inititive will be enabled by the development and operation of Sprowtt’s Technlogy Transfer Gateway. The management team of Sprowtt Launch Pad has five decades of entrepreneurial experience, and has numerous years of experience successfully launching and managing more than a dozen early-stage ventures. The Sprowtt Launch Pad team has collectively raised several rounds of early stage capital and knows what it takes to launch a successful early stage company. The Sprowtt Launch Pad team has the experience to facilitate bringing together the right technology with the right entrepreneurs and partner them with the U.S. government technology transfer professionals to license the inteletual property.  Sprowtt Lauch Pad  is comitted to building successful early stage companies based on team relationships. Confidence and experience are important in bringing attractive and growing companies to our platform. All Americans now have the same opportunity to participate in Sprowtt Launch Pad through team building, with the right technologies available through governmentsponsored technology transfer programs.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: modalPush-->


