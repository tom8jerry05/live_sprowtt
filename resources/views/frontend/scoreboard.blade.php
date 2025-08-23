@extends('layouts.frontend')

@section('content')


<style type="text/css">
	@media only screen and (min-width:1920px){
		.modal.show .modal-dialog {
			max-width: 650px !important;
		}
	}
</style>


<section class="col-md-12 sp-score-board-section">
    <div class="container-fluid">
    	<div class="col-12 sp-sb-bg-image">
        	<img src="{{ asset('frontend/images/playing_field_bg.png') }}" alt="Playing-Field"/>
    	</div>


    	<div class="sp-sb-content">

	    	<div class="col-12 sp-sb-head">
	    		<div class="vote-sec">
	    			<p class="left-vote">
	    				@if(isset($ltVote))
                        	{{ $ltVote }}
                        @else
                        	00000
                        @endif
                    </p> 
	    			<p class="right-vote">
	    				@if(isset($rtVote))
                        	{{ $rtVote }}
                        @else
                        	00000
                        @endif
	    			</p>
	    		</div>

	    		<div class="name-time-sec">
	    			<p class="left-name" title="@if(isset($ltTeam)){{$ltTeam}}@endif">
	    				@if(isset($ltTeam))
                        	{{ substr($ltTeam,0,12)}}..
                        @else
                        	Team Name
                        @endif
	    			</p>
	    			<p class="center-time"> 90.00</p>
	    			<p class="right-name" title="@if(isset($rtTeam)){{$rtTeam}}@endif">
	    				@if(isset($rtTeam))
                        	{{ substr($rtTeam,0,12)}}..
                        @else
                        	Team Name
                        @endif
	    			</p>
	    		</div>
	    	</div>

	    	<div class="col-12 sp-sb-top">
	    		<div class="sp-left-team">
	    			<p title="@if(isset($ltTeam)){{$ltTeam}}@endif">
	    				@if(isset($ltTeam))
                        	{{ substr($ltTeam,0,12)}}..
                        @else
                        	Team Name
                        @endif
	    			</p>
	    		</div>

	    		<div class="sp-right-team">
	    			<p class title="@if(isset($rtTeam)){{$rtTeam}}@endif">
	    				@if(isset($rtTeam))
                        	{{ substr($rtTeam,0,12)}}..
                        @else
                        	Team Name
                        @endif
	    			</p>
	    		</div>
	    	</div>

	    	<div class="col-12 sp-sb-body">
	    		<div class="sp-left-team">
	    			<div class="lt-first-row">
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>2</span>
	    					@if(isset($ltassignMember[0]))
		    					<p title="{{ $ltassignMember[0]->firstname }}">
		    						{{ substr($ltassignMember[0]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[0]->firstname.' '.$ltassignMember[0]->lastname }}" data-major="{{ $ltassignMember[0]->major }}" data-school="{{ $ltassignMember[0]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>3</span>
	    					@if(isset($ltassignMember[1]))
		    					<p title="{{ $ltassignMember[1]->firstname }}">
		    						{{ substr($ltassignMember[1]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[1]->firstname.' '.$ltassignMember[1]->lastname }}" data-major="{{ $ltassignMember[1]->major }}" data-school="{{ $ltassignMember[1]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="lt-first-row">
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>4</span>
	    					@if(isset($ltassignMember[2]))
		    					<p title="{{ $ltassignMember[2]->firstname }}">
		    						{{ substr($ltassignMember[2]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[2]->firstname.' '.$ltassignMember[2]->lastname }}" data-major="{{ $ltassignMember[2]->major }}" data-school="{{ $ltassignMember[2]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>5</span>
	    					@if(isset($ltassignMember[3]))
		    					<p title="{{ $ltassignMember[3]->firstname }}">
		    						{{ substr($ltassignMember[3]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[3]->firstname.' '.$ltassignMember[3]->lastname }}" data-major="{{ $ltassignMember[3]->major }}" data-school="{{ $ltassignMember[3]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="lt-first-row">

	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>6</span>
	    					@if(isset($ltassignMember[4]))
		    					<p title="{{ $ltassignMember[4]->firstname }}">
		    						{{ substr($ltassignMember[4]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[4]->firstname.' '.$ltassignMember[4]->lastname }}" data-major="{{ $ltassignMember[4]->major }}" data-school="{{ $ltassignMember[4]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>7</span>
	    					@if(isset($ltassignMember[5]))
		    					<p title="{{ $ltassignMember[5]->firstname }}">
		    						{{ substr($ltassignMember[5]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[5]->firstname.' '.$ltassignMember[5]->lastname }}" data-major="{{ $ltassignMember[5]->major }}" data-school="{{ $ltassignMember[5]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/green.png') }}">
	    					<span class="leader">1</span>

	    					@if(isset($ltassignLeader[0]))
		    					<p title="{{ $ltassignLeader[0]->firstname }}">
		    						{{ substr($ltassignLeader[0]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignLeader[0]->firstname.' '.$ltassignLeader[0]->lastname }}" data-major="{{ $ltassignLeader[0]->major }}" data-school="{{ $ltassignLeader[0]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    					
	    				</div>
	    			</div>

	    			<div class="lt-first-row">
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>8</span>
	    					@if(isset($ltassignMember[6]))
		    					<p title="{{ $ltassignMember[6]->firstname }}">
		    						{{ substr($ltassignMember[6]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[6]->firstname.' '.$ltassignMember[6]->lastname }}" data-major="{{ $ltassignMember[6]->major }}" data-school="{{ $ltassignMember[6]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>9</span>
	    					@if(isset($ltassignMember[7]))
		    					<p title="{{ $ltassignMember[7]->firstname }}">
		    						{{ substr($ltassignMember[7]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[7]->firstname.' '.$ltassignMember[7]->lastname }}" data-major="{{ $ltassignMember[7]->major }}" data-school="{{ $ltassignMember[7]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="lt-first-row">
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>10</span>
	    					@if(isset($ltassignMember[8]))
		    					<p title="{{ $ltassignMember[8]->firstname }}">
		    						{{ substr($ltassignMember[8]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[8]->firstname.' '.$ltassignMember[8]->lastname }}" data-major="{{ $ltassignMember[8]->major }}" data-school="{{ $ltassignMember[8]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="lt-first-col">
	    					<img src="{{ asset('frontend/images/lt-cloth.png') }}">
	    					<span>11</span>
	    					@if(isset($ltassignMember[9]))
		    					<p title="{{ $ltassignMember[9]->firstname }}">
		    						{{ substr($ltassignMember[9]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $ltassignMember[9]->firstname.' '.$ltassignMember[9]->lastname }}" data-major="{{ $ltassignMember[9]->major }}" data-school="{{ $ltassignMember[9]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>
	    		</div>

	    		<div class="sp-right-team">

	    			<div class="rt-first-row">
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>2</span>
	    					@if(isset($rtassignMember[0]))
		    					<p title="{{ $rtassignMember[0]->firstname }}">
		    						{{ substr($rtassignMember[0]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[0]->firstname.' '.$rtassignMember[0]->lastname }}" data-major="{{ $rtassignMember[0]->major }}" data-school="{{ $rtassignMember[0]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>3</span>
	    					@if(isset($rtassignMember[1]))
		    					<p title="{{ $rtassignMember[1]->firstname }}">
		    						{{ substr($rtassignMember[1]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[1]->firstname.' '.$rtassignMember[1]->lastname }}" data-major="{{ $rtassignMember[1]->major }}" data-school="{{ $rtassignMember[1]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="rt-first-row">
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>4</span>
	    					@if(isset($rtassignMember[2]))
		    					<p title="{{ $rtassignMember[2]->firstname }}">
		    						{{ substr($rtassignMember[2]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[2]->firstname.' '.$rtassignMember[2]->lastname }}" data-major="{{ $rtassignMember[2]->major }}" data-school="{{ $rtassignMember[2]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>5</span>
	    					@if(isset($rtassignMember[3]))
		    					<p title="{{ $rtassignMember[3]->firstname }}">
		    						{{ substr($rtassignMember[3]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[3]->firstname.' '.$rtassignMember[3]->lastname }}" data-major="{{ $rtassignMember[3]->major }}" data-school="{{ $rtassignMember[3]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="rt-first-row">
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>6</span>
	    					@if(isset($rtassignMember[4]))
		    					<p title="{{ $rtassignMember[4]->firstname }}">
		    						{{ substr($rtassignMember[4]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[4]->firstname.' '.$rtassignMember[4]->lastname }}" data-major="{{ $rtassignMember[4]->major }}" data-school="{{ $rtassignMember[4]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>7</span>
	    					@if(isset($rtassignMember[5]))
		    					<p title="{{ $rtassignMember[5]->firstname }}">
		    						{{ substr($rtassignMember[5]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[5]->firstname.' '.$rtassignMember[5]->lastname }}" data-major="{{ $rtassignMember[5]->major }}" data-school="{{ $rtassignMember[5]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>

	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/orange.png') }}">
	    					<span class="leader">1</span>
	    					@if(isset($rtassignLeader[0]))
		    					<p title="{{ $rtassignLeader[0]->firstname }}">
		    						{{ substr($rtassignLeader[0]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignLeader[0]->firstname.' '.$rtassignLeader[0]->lastname }}" data-major="{{ $rtassignLeader[0]->major }}" data-school="{{ $rtassignLeader[0]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="rt-first-row">
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>8</span>
	    					@if(isset($rtassignMember[6]))
		    					<p title="{{ $rtassignMember[6]->firstname }}">
		    						{{ substr($rtassignMember[6]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[6]->firstname.' '.$rtassignMember[6]->lastname }}" data-major="{{ $rtassignMember[6]->major }}" data-school="{{ $rtassignMember[6]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>9</span>
	    					@if(isset($rtassignMember[7]))
		    					<p title="{{ $rtassignMember[7]->firstname }}">
		    						{{ substr($rtassignMember[7]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[7]->firstname.' '.$rtassignMember[7]->lastname }}" data-major="{{ $rtassignMember[7]->major }}" data-school="{{ $rtassignMember[7]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>

	    			<div class="rt-first-row">
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>10</span>
	    					@if(isset($rtassignMember[8]))
		    					<p title="{{ $rtassignMember[8]->firstname }}">
		    						{{ substr($rtassignMember[8]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[8]->firstname.' '.$rtassignMember[8]->lastname }}" data-major="{{ $rtassignMember[8]->major }}" data-school="{{ $rtassignMember[8]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    				<div class="rt-first-col">
	    					<img src="{{ asset('frontend/images/rt-cloth.png') }}">
	    					<span>11</span>
	    					@if(isset($rtassignMember[9]))
		    					<p title="{{ $rtassignMember[9]->firstname }}">
		    						{{ substr($rtassignMember[9]->firstname ,0,10)}}..

		    						<button type="button" title="view" class="btn btn-warning btn-sm score-board-btn" data-name="{{ $rtassignMember[9]->firstname.' '.$rtassignMember[9]->lastname }}" data-major="{{ $rtassignMember[9]->major }}" data-school="{{ $rtassignMember[9]->currentUniversity }}"><i class="fa fa-eye"></i></button>
		    					</p>
		                    @else
		                      	<p class="Nt-Sel">Not Selected</p>
		                    @endif
	    				</div>
	    			</div>
	    		</div>
	    	</div>

	    	<div class="col-12 sp-sb-body-foot">
	    		<div class="sp-bf-left-team">
	    			<h6>
	    				@if(isset($ltProject))
	    					{{ ucfirst($ltProject) }}
	    				@endif
	    			</h6>
	    		</div>
	    		<div class="sp-bf-right-team">
	    			<h6>
	    				@if(isset($rtProject))
	    					{{ ucfirst($rtProject) }}
	    				@endif
	    			</h6>
	    		</div>
	    	</div>

	    	<div class="col-12 sp-sb-foot">
	    		<div class="sp-sponsor">
	    			<p>Sponsor Name</p>
	    			<h5>ADVERTISE</h5>
	    			<a href="#">Click here</a>
	    		</div>

	    		<div class="sp-sponsor">
	    			<p>Sponsor Name</p>
	    			<h5>ADVERTISE</h5>
	    			<a href="#">Click here</a>
	    		</div>

	    		
	    	</div>
	    </div>
    </div>
</section>


<!--Modal: modalPush-->
<div class="modal fade" id="PlayerDetailModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Member Detail</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="player-detail">
            <h6 class="label">Member Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</h6>
            <span id="mem-name"></span>
        </div>

        <div class="player-detail">
            <h6 class="label">Member Major &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6>
            <span id="mem-major"></span>
        </div>

        <div class="player-detail">
            <h6 class="label">Member University :</h6>
            <span id="mem-school"></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Modal: modalPush-->





@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {

    	$( ".score-board-btn" ).on('click',function(){

    		var name = $(this).attr('data-name');
    		var major = $(this).attr('data-major');
    		var school = $(this).attr('data-school');
    		$("#PlayerDetailModal").modal('show');

    		$("#PlayerDetailModal .modal-body #mem-name").text(name);
    		$("#PlayerDetailModal .modal-body #mem-major").text(major);
    		$("#PlayerDetailModal .modal-body #mem-school").text(school);


    	});

    });
</script>
@endsection

