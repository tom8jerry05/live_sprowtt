@extends('layouts.frontend')

@section('content')
<style>
a.tombs-read-more {
    text-align: unset !important;
    float: none !important;
    color: #000000 !important;
}

a.tombs-summary-read-more {
    text-align: unset !important;
    float: none !important;
    color: #000000 !important;
}

.summary-pdf a{
    background-color: #00c9ff;
    color: white !important;
}
</style>


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


<section class="detailpage-section" >
    <div class="container">

    	<div class="detail-body1">
    		<div class="left">
                <img src="{{$tombstone->image_link}}" width="" height="">
                <div class="inner-right">
                    <p><span>Description:</span>{{ substr($tombstone->description,0,600) }} <a href="javascript:void(0);" class="tombs-read-more">read more...</a></p>     
                </div>
    			<div class="row col-md-12 thumbnail" style="display: none;">
                    <img src="{{ asset('frontend/images/video-sample.jpg') }}" width="200" height="220">
    			</div>
               <!-- <div class="left-panel">
                    <p >All visible rows are selected.Select all 0 rows?</p>
                    <p class="answer">All rows are selected.Clear selection.</p>
                    <span>There are no comments.</span>
                </div> --> 
    		</div>
    		<div class=" right">
                <div class="right-panel">
                    <div class="right-panel-header">
                        <h3>{{$tombstone->name}}</h3>
                    </div>
                    <div class="inner-header">
                        <h5>Executive summary</h5>
                    </div>
                    <div class="inner-body">
                        <p class="summary"><span>Executive summary:</span>
                        {{ substr($tombstone->summary,0,1200) }} <a href="javascript:void(0);" class="tombs-summary-read-more">read more...</a> </p>
							
						<p class="summary-pdf"><span>Executive summary PDF: <a id="summaryPdf" type="button" class="btn btn-sm btn-xs" data-url="{{ $tombstone->pdf_link }}">View Pdf</a></span></p>
                    </div>
                    <div class="inner-header">
                        <h5>Submission Information</h5>
                    </div>
                    <div class="inner-body">
                        <p><span>Team Name:</span>{{$tombstone->team_name}} </p>
                        <p><span>Invention Number(s):</span> {{$tombstone->invention_number}}</p>
                        <p class="agencyData"><span>Agency Name:</span> {{$tombstone->agency}}</p>
                        <p><span>Video URL:</span><a href="JavaScript:void(0);" id="vidLink" data-type="{{$tombstone->video_option}}"> {{$tombstone->video_link}}</a> </p>
                    </div>
                    <div class="inner-header">
                        <h5>Team Information</h5>
                    </div>
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
    </div>
</section>

<!--Modal: videoModal-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document" style="max-width: 1110px;">
    <div class="modal-content text-center">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Project video</p>
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
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#vidLink').on('click',function(){
            var url = $(this).text();
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

        
		
    });
	
	
</script>
@endsection