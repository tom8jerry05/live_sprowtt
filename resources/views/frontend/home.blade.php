@extends('layouts.frontend')



@section('content')

<section class="col-md-12 sp-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/banner-min.jpg') }}" alt="Banner"/>
    </div>

    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2" > We Believe in Entrepreneurs </span>
            <h4>The most important thing we can do is inspire young minds and to advance the kind of science, math and technology education that will help youngsters take us to the next phase of space travel.</h4>
            <p >John Glen Astronaut</p>
        </div>
    </div>
</section>



<section class="col-md-12 sp-about-section">
    <div class="container-fluid">
        <div class="col-7 col-md-7 sp-about-video">
            <!-- <video width="" height="" poster="{{ asset('frontend/images/SprowttLanchPad.gif') }}" preload="none" controls>
                <source src="https://www.youtube.com/embed/4dWcw2epTi8" type="video/mp4">
                Your browser does not support the video tag.
            </video> -->
            <iframe width="560" height="415" src="https://www.youtube.com/embed/4dWcw2epTi8?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>

        <div class="col-5 col-md-5 sp-learn-about sp-about-read-more">
            <h2>How SPROWTT Works!</h2>
            <p>Sprowtt Launch Pad provides an innovative and unique opportunity for entrepreneurs to explore and commercialize potentially disruptive technologies in the marketplace originally developed by the nation’s most prestigious U.S. government laboratories. Launch Pad brings together some of the world’s brightest and most motivated entrepreneurs to evaluate and commercialize patented technologies from world-leading technology development organizations such as NASA and the Dept of Defense <a href="javascript:void(0);" class="abt-read-more">read more...</a></p>
        </div>
    </div>
</section>


<style type="text/css">
    .label{
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
    }

    .label-primary{
        background-color: #059010;
    }
    .label-warning{
        background-color: #f0ad4e;
    }

</style>



<section class="col-md-12 offers-section">
    <div class="container-fluid">
        <div class="heading text-center">
            <h1><span>Current Opportunities at Sprowtt Launch Pad</span></h1>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="Carousel" class="carousel slide">                    
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="row">
                            @foreach ($tombstoneData as $i => $tombstone)

                                @if ($i > 0 && $i % $range == 0) 
                                    </div>
                                </div>
                                <div class="item carousel-item">
                                    <div class="row">
                                @endif
                                <div class="col-md-6  col-lg-4">
                                    <div class="offer-item">
                                        <div class="service-image-block">
                                            <img src="{{ $tombstone->image_link }}" alt="service image"/>
                                        </div>

                                    <div class="offers-middle">
                                            <div class="left">
                                                <h3>{{ $tombstone->name }}</h3>
                                                
                                                <div class="inner-off-middle">
                                                    <p class="place"> 
                                                        <span>AGENCY : {{ $tombstone->agency }}</span></p>
                                                    <p class="font-12">

                                                        @if($tombstone->status == '0')
                                                           <span>STATUS : Open</span> 
                                                        @else
                                                            <span>STATUS : Close</span> 
                                                        @endif
                                                    </p>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="offers-lower">
                                            <p class="block-with-text show-read-more" data-id='{{$tombstone->id}}' data-status='{{$tombstone->status}}'>{{ substr($tombstone->description, 0, 200) }} <a href="javascript:void(0);" class="read-more">read more...</a></p>
                                        </div>

                                        <div class="offers-footer"> 
                                            <a class="btn-chat btnpadding appCheck" data-id='{{$tombstone->id}}' data-status='{{$tombstone->status}}' data-tag="applynow"><img src="{{ asset('frontend/images/tombstone-icon-investor.png') }}">APPLY NOW</a>
                                            <a class="btn-chat btnpadding" data-toggle="modal" data-target="#ComingSoonModal">
                                            <img src="{{ asset('frontend/images/tombstone-icon-chat.png') }}">CHAT</a>
                                            <a href="{{ route('tombStonedetail',$tombstone->id) }}" class="btn-chat btnpadding projDetails">
                                            <img src="{{ asset('frontend/images/tombstone-icon-calendar.png') }}">DETAILS</a>
                                        </div>
                                    </div>  
                                </div>
                            @endforeach  
                            </div>
                        </div>
                </div>


                    <ul class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ul>

    
                    <div class="arrow-controls">
                        <a data-slide="prev" href="#Carousel" class="left carousel-control" style="border: none;">
                            <img src="{{ asset('frontend/images/slider-arrow.png') }}" alt="<"/></a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control" style="border: none;">
                            <img src="{{ asset('frontend/images/slider-arrow.png') }}" alt="<"/></a>
                    </div>
                </div>
            </div>
        </div>                                       
    </div>
</section>



<!--Modal: modalPush-->
<div class="modal fade" id="AboutReadModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">How SPROWTT Works!</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="heading text-center">

            <p class="abt-content">Sprowtt Launch Pad provides an innovative and unique opportunity for entrepreneurs to explore and commercialize potentially disruptive technologies in the marketplace originally developed by the nation’s most prestigious U.S. government laboratories. Launch Pad brings together some of the world’s brightest and most motivated entrepreneurs to evaluate and commercialize patented technologies from world-leading technology development organizations such as NASA and the Dept of Defense, as well as the NIH and the EPA.<br><br>
            
            Launch Pad is fueled by the ground-breaking Sprowtt platform. A platform that reduces risk and increases probability of market success by charging no up-front fees, facilitating early-stage company capitalization through early stage capital formation, and constructing a path to full commercialization that meets all regulatory requirements.<br><br>
            
            It is available to both existing companies and start-ups formed to commercialize the federal government’s best technologies and addresses many of the challenges faced by start-up companies; such as raising capital and securing intellectual property rights.<br><br>
            
            Selected teams will write business plans that lay the foundation for new companies and new products in the marketplace. Teams will compete in Sprowtt’s Collegiate Entrepreneurship Tech Transfer Competitions (CETTC); a series of multi-phase competitions designed to validate the business plans and reward the best of them.  Sprowtt’s inaugural CETTC is scheduled to take place in late 2020 and we expect the competition to be fierce.  Teams will be judged based on the feasibility of commercialization of the selected technology and the overall implementation plan. The winners of the competition will be awarded the opportunity to utilize the Sprowtt platform at no additional cost to pursue the required capital to launch their company. The Sprowtt launch pad challenge will ripple throughout the economy, supporting critical industries, creating new businesses and jobs, and attracting entrepreneurs, students, veterans, and active military to science and engineering.  Sprowtt Inc the parent company investment into the launch Pad is intended to support technologies and discoveries for the future, and in the process, it delivers social and economic impacts that benefit the nation today and spur economic growth throughout our great nation.<br><br>                   
            
            <strong>Why are we doing this?</strong><br><br>
            
            Because commercializing the U.S. government’s research and technology fuels the nation’s relentless need to innovate, provides the U.S. with competitive advantage, stimulates the economy, and creates jobs and economic prosperity.<br><br>
            
            At Sprowtt, that’s what we’re all about.<br><br>
            
            Sprowtt Launch Pad works with companies and selected outreach teams to explore the market potential period.</p>

        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: modalPush-->

<!--Modal: modalPush-->
<div class="modal fade" id="ComingSoonModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Coming Soon...</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="comingsoon-heading text-center">
            <h1><span>Coming Soon..</span></h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: modalPush-->



<!--Modal: modalPush-->
<div class="modal fade" id="proCloseModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Project Closed</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="comingsoon-heading text-center">
            <h1><span>Project Closed</span></h1>
            <p> This Technology is not accepting new members at this time. Please apply for another Technology</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: modalPush-->

<section class="col-md-12 sp-add-resume-section">
    <div class="container">
        <div class="col-md-9 sp-resume-quote">
            <h3 class="mem-quote">Join a team or bring your entire team from your college or university, and be a part of the greatest commercialization competition ever launched!</h3>
        </div>
        <div class="col-md-3 sp-add-resume-btn">
            <a href="{{ route('MemberApply','0') }}" class="btn btn-link white-outline">Join as Team member now</a>
        </div>
    </div>
</section>


<section class="col-md-12 sp-tech-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/technologies-bg-min.jpg') }}" alt="Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <h1> The Technologies </h1>
            <p>WE CONNECT ENTREPRENEURS WITH THE WORLD'S MOST ACCOMPLISHED INVENTORS AND RESEARCHERS FROM FEDERAL LABS, AGENCIES AND UNIVERSITIES.</p>
        </div>
    </div>
</section>



<section class="col-md-12 sp-add-resume-section">
    <div class="container">
        <div class="col-md-9 sp-resume-quote">
            <h3>Register to Judge the universities and colleges in the Collegiate Entrepreneurship Tech Transfer Competitions.</h3>
        </div>
        <div class="col-md-3 sp-add-resume-btn">
            <a href="{{ route('Judge','0') }}" class="btn btn-link white-outline">Be a Judge</a>
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

@endsection



@section('script')

<script type="text/javascript">
    $(document).ready(function(){

        $(".appCheck").on('click',function(){
            var tag = $(this).attr('data-tag');
            var status = null;
            var id = $(this).attr('data-id');
            var url = '{{ route("ProjectApply",":id") }}';
            url = url.replace(':id', id);

            if(tag == "applynow"){
                status = $(this).attr('data-status');
            }else if(tag == 'readmore'){
                status = $(this).parents().attr('data-status');
            }

            if(status == 0){
                window.location.href = url;
            }else{
                $('#proCloseModal').modal('show');
            }
        });


        $(".read-more").on('click',function(){
            var id = $(this).parents().attr('data-id');
            var url = '{{ route("tombStonedetail",":id") }}';
            url = url.replace(':id', id);
            window.location.href = url;
        })


        $(".abt-read-more").on('click',function(){
            $('#AboutReadModal').modal('show');
        })
    });
</script>

@endsection





        