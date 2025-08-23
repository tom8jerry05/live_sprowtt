@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-banner-section">

    <div class="col-12 sp-new-banner-image">
        <img class="" src="{{ asset('frontend/images/Home-page-banner.png') }}" alt="Banner"/>
    </div>

    <div class="container">
        <div class="col-6 sp-new-banner-caption">
            <span class="display-2" > Description </span>
            <h4>{{$tombstone->name}}</h4>
            <h5>{{ substr($tombstone->description,0,420) }}...</h5>
            <a class="btn btn-link blue-btn pull-left tombs-read-more">Read More</a>
        </div>
        <div class="col-6 sp-new-banner-images">
            <div class="img-bck-layer">
            </div>
            <div class="img-frn-layer">
                <img src="{{$tombstone->image_link}}" width="300" height="400">   
            </div>
        </div>
    </div>
</section>

<section class="col-md-12 sp-tomb-exec-summ-sec">
    <div class="container">
        <div class="col-5 col-md-5 sp-tomb-exec-left">
            <div class="sp-tomb-left-head">
                <h4>{{$tombstone->name}}</h4>
                <p>Executive summary</p>
            </div>
            <div class="sp-tomb-left-foot">
                <img src="{{ asset('frontend/images/logo-opacity.png') }}">
            </div>
        </div>
        <div class="col-7 col-md-7 sp-tomb-exec-right">
            <p>{{ substr($tombstone->summary,0,900) }}...</p>
            <a class="btn btn-link blue-btn pull-left tombs-summary-read-more">Read More</a>
        </div>
    </div>
</section>


<section class="col-md-12 sp-tomb-detail-sec">
    <div class="container">
        <div class="col-md-12 sp-tomb-detail-con">
            <h4>Team name</h4>
            <div class="sp-tomb-detail-inner-con">
                <p>Vote for this presentation</p>
                <a class="btn btn-link blue-btn pull-left" id="voteNowbtn" data-id="{{$tombstone->id}}">VOTE NOW</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>Project Name :</u> {{$tombstone->name}} </p>
                <!-- <a href="#" class="btn btn-link blue-btn pull-left">Read More</a> -->
            </div>

            <div class="sp-tomb-detail-inner-con">
                <p><u>Team Name :</u> {{  substr($tombstone->team_name,0,50) }}... </p>
                <!-- <a href="#" class="btn btn-link blue-btn pull-left">Read More</a> -->
            </div>

            <div class="line-spacer"></div>
            <h4>Project Details </h4>
            <div class="sp-tomb-detail-inner-con">
                <p><u>Executive summary PDF :</u> </p>
                <a class="btn btn-link blue-btn pull-left" id="summaryPdf" data-url="{{ $tombstone->pdf_link }}">VIEW PDF </a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>View Team presentation :</u></p>
                <a id="presVidLink" data-type="{{$tombstone->pres_video_option}}" data-url="{{$tombstone->pres_video_link}}" class="btn btn-link blue-btn pull-left">PRESENTATION VIDEO &nbsp;&nbsp;<i class="fa fa-play"></i></a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>Ask Questions about this Technology </u></p>
                <a class="btn btn-link blue-btn pull-left" id="askQues">ASK BUTTON</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>Technology Transfer Video: </u></p>
                <a id="vidLink" data-type="{{$tombstone->video_option}}" data-url="{{$tombstone->video_link}}" class="btn btn-link blue-btn pull-left">VIDEO TECHNOLOGY &nbsp;&nbsp;<i class="fa fa-play"></i></a>
            </div>

            <div class="line-spacer"></div>
            <h4>Team Information </h4>
            <div class="sp-tomb-detail-inner-con">
                <p><u>View Team Members :</u> </p>
                <a href="{{ route('ScoreBoard',$tombstone->id) }}" class="btn btn-link blue-btn pull-left">TEAM MEMBERS</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>View Competition Judges </u></p>
                <a class="btn btn-link blue-btn pull-left" id="viewJudges">VIEW JUDGES</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>View Team's Playing Field </u></p>
                <a href="{{ route('ScoreBoard',$tombstone->id) }}" class="btn btn-link blue-btn pull-left">VIEW PLAYING FIELD</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>View TOP 20 Teams in Score Board</u></p>
                <a href="{{ route('BracketChart') }}" class="btn btn-link blue-btn pull-left">VIEW SCORE BOARD</a>
            </div>

            <div class="sp-tomb-detail-inner-con">
                <p><u>View Bracket Chart</u></p>
                <a href="{{ route('StartupChallenges') }}" class="btn btn-link blue-btn pull-left">VIEW CHART</a>
            </div>

            <div class="line-spacer"></div>

            <div class="sp-tomb-detail-inner-con">
                <p><u>Apply for Sponsorship</u></p>
                <a href="{{ route('Sponsorship') }}" class="btn btn-link blue-btn pull-left">APPLY</a>
            </div>






            <div class="sp-tomb-detail-inner-con">
                <p><u>Be a part of the next Big Technology!</u></p>
                <a href="{{ route('ProjectApply',$tombstone->id) }}" class="btn btn-link blue-btn pull-left">JOIN A TEAM</a>
            </div>

            <div class="sp-tomb-detail-inner-con">
                <p><u>Judge this Team</u></p>
                <a href="{{ route('Judge',$tombstone->id) }}" class="btn btn-link blue-btn pull-left">JOIN NOW</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>View History of NASA spin outs </u></p>
                <a href="{{ route('NasaSpinsOut') }}" class="btn btn-link blue-btn pull-left">VIEW SPIN OUTS</a>
            </div>
            <div class="sp-tomb-detail-inner-con">
                <p><u>Register to attend live Events</u></p>
                <a href="{{ route('EventApplier',$tombstone->id) }}" class="btn btn-link blue-btn pull-left">REGISTER</a>
            </div>
        </div>
    </div>
</section>


<!--Modal: modalPush-->
<div class="modal fade" id="TomsReadModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Description!</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="heading text-center">
            <p class="abt-content">{{ $tombstone->description }} </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Modal: modalPush-->
<div class="modal fade" id="TomsSummaryReadModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Summary!</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="heading text-center">
            <p class="abt-content">{{ $tombstone->summary }} </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Modal: videoModal-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 1110px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Technology Transfer Video</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center" id="videoPlay">
            <video width="" height="" autoplay controls style="display: none;">
                <source class="vidSrc" src="" type="video/mp4">
                <source class="vidSrc" src="" type="video/ogg">
                Your browser does not support the video tag.
            </video>

            <iframe id="extLink" width="" height="" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display: none;"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: videoModal-->



<!--Modal: presVideoModal-->
<div class="modal fade" id="presVideoModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 1110px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Team Presentation Video</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center" id="presVideoPlay">
            <video width="" height="" autoplay controls style="display: none;">
                <source class="presVidSrc" src="" type="video/mp4">
                <source class="presVidSrc" src="" type="video/ogg">
                Your browser does not support the video tag.
            </video>

            <iframe id="presExtLink" width="" height="" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display: none;"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: presVideoModal-->


<!--Modal: askQuesModal-->
<div class="modal fade" id="askQuesModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Ask Question</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
               <form id="ask-question-form" data-id="{{ $tombstone->id }}">
                {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name" class="control-label">Questions :</label>
                            <textarea rows="5" class="form-control" id="question" name="question" placeholder="Ask Question about this Technology" required></textarea> 

                            @if ($errors->has('firstname'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('firstname')}}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="control-label">Email :</label>
                            <input type="email" name="ques_email" id="ques_email" class="form-control" required>

                            @if ($errors->has('firstname'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('firstname')}}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal: askQuesModal-->


<!--Modal: teamMemModal -->
<!-- <div class="modal fade" id="teamMemModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Team Info</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-body">
                    <p><span>Team Leader's Name:</span>
                        @if(isset($assignLeader->firstname))
                            {{(ucfirst($assignLeader->firstname))}} {{(ucfirst($assignLeader->lastname))}}
                        @endif
                    </p>
                    <p><span>Team Leader's University/Organization:</span>
                        @if(isset($assignLeader->currentUniversity))
                            {{$assignLeader->currentUniversity}}
                        @endif
                    </p>
                    <p><span>Team Leader's Type of Graduate School:</span></p>
                    <p><span>Team Leader's Position within University/Organization:</span></p>
                    <br>
                    @if(!empty($assignMember))
                        @php ($no = 0)
                        @foreach($assignMember as $member)
                            @php ($no++)
                            <p><span>Team Member {{$no}}'s Name: </span> {{(ucfirst($member->firstname))}} {{(ucfirst($member->lastname))}}</p>
                            <p><span>Team Member {{$no}}'s University/Organization:</span>{{(ucfirst($member->currentUniversity))}}</p>
                            <p><span>Team Member {{$no}}'s Type of Graduate School:</span></p>
                            <p><span>Team Member {{$no}}'s Position within University/Organization:</span></p>
                            <br>
                        @endforeach
                    @else
                        <p><span>Team Member 1's Name: </span></p>
                        <p><span>Team Member 1's University/Organization:</span></p>
                        <p><span>Team Member 1's Type of Graduate School:</span></p>
                        <p><span>Team Member 1's Position within University/Organization:</span></p>
                        <br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--Modal: teamMemModal -->



<!--Modal: judgeViewModal -->
<div class="modal fade" id="judgeViewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Judges Info</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-body">

                     @if(!empty($judges))
                        @php ($no = 0)
                        @foreach($judges as $judge)
                            @php ($no++)
                            <p><span>Judge {{$no}}'s Name: </span> {{(ucfirst($judge->firstname))}} {{(ucfirst($judge->lastname))}}</p>
                            <p><span>Judge {{$no}}'s Email:</span> {{ $judge->email }} </p>
                            <br>
                        @endforeach
                    @else
                        <p><span>Judge 1's Name: </span></p>
                        <p><span>Judge 1's Email:</span></p>
                        <br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal: judgeViewModal -->






<!--Modal: spinOutViewModal -->
<div class="modal fade" id="spinOutViewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 750px;">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Judges Info</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-body">

                    <embed src="{{ asset('frontend/pdf/NASA_Spin_Outs.pdf')}}" width="750" height="800"></embed>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal: judgeViewModal -->


<div class="modal fade" id="loginFormModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 500px;">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Log In</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-body">
                    <form id="login-form">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" class="control-label">E-mail :</label>
                                <input type="text" name="email" id="email" class="form-control" required placeholder="E-mail Address">

                                @if ($errors->has('firstname'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('firstname')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="control-label">Password :</label>
                                <input type="password" name="password" id="password" class="form-control" required placeholder="Password">

                                @if ($errors->has('firstname'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('firstname')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection



@if (session('success'))
    @section('script')
        <script type="text/javascript">
            $(document).ready(function(){
                Swal.fire(
                    'Success!',
                    '{{ session("success") }}',
                    'success'
                );
            });
        </script>
    @endsection
@endif


@section('script')
<script type="text/javascript">
    $(document).ready(function(){

        $('#voteNowbtn').on('click',function(){
            var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
            if (loggedIn){

                
                var id = $(this).attr('data-id');
                var url = '{{ route("tombstone.votenow",":id") }}';
                url = url.replace(':id', id);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url,
                    type: "GET",             
                    success: function(result){
                        $('#overlay').attr('hidden',true);
                        console.log(result);
                        if(result['status'] == 'success'){
                            Swal.fire(
                                'Success!',
                                ''+result['message']+'',
                                'success'
                            );
                        }else if( result['status'] =='error'){
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: ''+result['message']+'',
                            })
                        }
                    }
                });
            }else if(!loggedIn){
                $('#loginFormModal').modal('show');
            }
        });




        
        $('#vidLink').on('click',function(){
            var url = $(this).attr('data-url');
            var type = $(this).attr('data-type');
            $('#videoModal').modal('show');
            if(type == 'link'){
                $('#extLink').attr('src',url);
                $('#extLink').show();
            }else{
                $('.vidSrc').attr('src',url);
                $('#videoPlay video').show();
                $("#videoPlay video")[0].load(); 
            }
        });

        $('#presVidLink').on('click',function(){
            var url = $(this).attr('data-url');
            var type = $(this).attr('data-type');
            $('#presVideoModal').modal('show');
            if(type == 'link'){
                $('#presExtLink').attr('src',url);
                $('#presExtLink').show();
            }else{
                $('.presVidSrc').attr('src',url);
                $('#presVideoPlay video').show();
                $("#presVideoPlay video")[0].load(); 
            }
        });

        $('#summaryPdf').on('click',function(){
           var url = $(this).attr('data-url');
           window.open(url, "_blank");
        })
        
        $(".tombs-read-more").on('click',function(){
            $('#TomsReadModal').modal('show');
        });

        $(".tombs-summary-read-more").on('click',function(){
            $('#TomsSummaryReadModal').modal('show');
        });


        /*$("#teamMem").on('click',function(){
            $("#teamMemModal").modal('show');
        });*/


        $("#askQues").on('click',function(){
            $("#askQuesModal").modal('show');
        });

        $('#askQuesModal').on('hidden.bs.modal', function () {
            $(this).find("input,textarea").val('').end();
        });

        $("#ask-question-form").on('submit',function(e){
            e.preventDefault();
            var data = $(this).serializeArray();
            var id = $(this).attr('data-id');
            var url = '{{ route("tombstone.askquestion",":id") }}';
            url = url.replace(':id', id);
            $('#overlay').attr('hidden',false);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                type: "GET",              
                data:  data,
                success: function(result){
                    $('#overlay').attr('hidden',true);
                    var record = jQuery.parseJSON(result);
                    console.log(record);
                    if(record['status'] == 1){
                        Swal.fire(
                            'Success!',
                            'Your question submited successfully.We will reply by email as soon as possible.!',
                            'success'
                        );
                        $("#askQuesModal").modal('hide');
                    }else if( record['status'] == 0){
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                }
            });
        });


        $("#login-form").on('submit',function(e){
            e.preventDefault();
            var data = $(this).serializeArray();
            var url = '{{ route("tombstone.login") }}';
            $('#overlay').attr('hidden',false);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                type: "POST",              
                data:  data,
                success: function(result){
                    $('#overlay').attr('hidden',true);
                    //var record = jQuery.parseJSON(result);
                    //console.log(result);
                    if(result['status'] == 'success'){
                        Swal.fire(
                            'Success!',
                            'Logged successfully',
                            'success'
                        );
                        $("#askQuesModal").modal('hide');

                        window.location.reload();
                    }else if( result['status'] =='error'){
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                }
            });

        })



        $('#viewJudges').on('click',function(){
            $('#judgeViewModal').modal('show');
        });


        $('#viewSpinOut').on('click',function(){
            $('#spinOutViewModal').modal('show');
        });
        

        

        
        
    });
</script>
@endsection