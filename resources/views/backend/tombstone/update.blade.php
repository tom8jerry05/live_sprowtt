@extends('layouts.backend')

@section('content')

<style type="text/css">
    .tooltip-head{
        color: #fff;
        background: #000;
        padding: 10px 10px 5px;
        border-radius: 4px 4px 0 0;
        text-align: center;
        margin-bottom: -2px; /* Hide default tooltip rounded corner from top */
        width: 450px;
    }
    .tooltip-head .glyphicon{
        font-size: 22px;
        vertical-align: bottom;
    }
    .tooltip-head h3{
        margin: 0;
        font-size: 18px;
    }
    .tooltip-inner{
        min-width: 450px !important;
    }
    .summary-pdf a{
    	background-color: #00c9ff;
    	color: white !important;
	}
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Tombstone
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Tombstone</li>
	</ol>
</section>

<!-- Main content -->
<section class="content" style="min-height: 1450px;">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Edit Tombstone</h3>
			</div>
			<div class="box-body">
				<div class="row no-margin">
					<div class="col-md-12">
						@if(Session::has('errors'))
						<div class="alert alert-danger">
							{{Session::get('errors')}}
						</div>
						@endif

						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif

					</div>


					<form class="TombstoneForm" method="POST"  action="#" enctype="multipart/form-data" id="Tombstone-edit-form">
						{{ csrf_field() }}

						<div class="edit-panel">
							<div class=" video-block">
								<!-- <video controls class="video">
                    				<source src="{{ $tombstone->video_link }}" type="video/mp4">
                    				<source src="{{ $tombstone->video_link }}" type="video/ogg">
                    				Your browser does not support the video tag.
                				</video> -->

                				<div class="edit-button">
                					<a class="btn btn-warning btn-xs" id="edit-btn">edit</a>
                				</div>
                				<img src="{{ $tombstone->image_link }}"> 
                				<div class="desc-body">
                					<p><span>Descriptions:</span> {{ substr($tombstone->description,0,500) }} <a href="javascript:void(0);" class="tombs-read-more text-dark">read more...</a></p>
                				</div>
							</div>
						</div>


						<!--<div class="edit-panel">
							<div class=" text-block comment-row">
								<p class="">All visible rows are selected.Select all 0 rows?</p>
								<p class="answer">All rows are selected.Clear selection.</p>
								<span>There are no comments.</span>
							</div>
						</div>-->


						<div class="edit-panel">
							<div class="text-block">
								<div class="project-data">
									<div class="summary-edit-button">
                						<a class="btn btn-warning btn-xs" id="summary-edit-btn">edit</a>
                					</div>
									<div class="summary-block">
										<div class="panel-header">
											<h3>{{ $tombstone->name }}</h3>
										</div>
										<div class="inner-header">
                        					<h5>Executive summary</h5>
                    					</div>
                    					<div class="inner-body">
                        					<p class="summary"><span>Executive summary:</span>
                        						{{ substr($tombstone->summary,0,1200) }} <a href="javascript:void(0);" class="summary-read-more text-dark">read more...</a>
                    						</p>

                    						<p class="summary-pdf"><span>Executive summary PDF: <a type="button" id="summaryPdf" class="btn btn-xs btn-sm" data-url="{{ $tombstone->pdf_link }}">View Pdf</a></span>
                    						</p>
                						</div>
                					</div>

                					

                					<div class="submission-edit-button">
                						<a class="btn btn-warning btn-xs" id="submission-edit-btn">edit</a>
                					</div>
                					<div class="submission-block">
                						<div class="inner-header">
                							<h5>Submission Information</h5>
                						</div>
                						<div class="inner-body">
                							<p class="teamName"><span>Team Name:</span>{{$tombstone->team_name}}</p>
                							<p class='inventionData'><span>Case Number(s):</span>{{$tombstone->invention_number}}</p>

                							<p class='agencyData'><span>Agency Name:</span>{{$tombstone->agency}}</p>
                							<p class="vidUrl"><span>Technology Transfer Video URL:</span><a> {{$tombstone->video_link}}</a> </p>

                							<p class="pres_vidUrl"><span>Team Presentation Video URL:</span><a> {{$tombstone->pres_video_link}}</a> </p>
                							<p class="chaPos"><span>Chart Position:</span><a> {{$tombstone->positionLable}}</a> </p>

                                            <p class="plaPos"><span>Tombstone Position:</span><a> Place {{$tombstone->place_position}}</a> </p>

                                            <p class="plaPos"><span>Tombstone Status:</span>
                                            	<a>
                                            		@if($tombstone->status == '0')
                                            			<span class="pull-right-container">
											              <small class="label bg-green">Opened</small>
											            </span>
                                            		@else
                                            			<span class="pull-right-container">
											              <small class="label label-warning">Closed</small>
											            </span>
                                            		@endif
                                            	</a> 
                                            </p>

                						</div>
                					</div>

                					<div class="teamtl-edit-button">
                						<a class="btn btn-warning btn-xs" id="teamtl-edit-btn">edit</a>
                					</div>

                					<div class="team-tl-block">
                						<div class="inner-header">
                							<h5>Team Information</h5>
                						</div>

                						<div class="inner-body">
                							<p class="tl-name"><span>Team Leader's Name:</span>
                								@if(isset($assignLeader->firstname))
                									{{(ucfirst($assignLeader->firstname))}} {{(ucfirst($assignLeader->lastname))}}
                								@endif
                							</p>
                							<p class="tl-university"><span>Team Leader's University/Organization:</span>
                								@if(isset($assignLeader->currentUniversity))
                									{{$assignLeader->currentUniversity}}
                								@endif
                							</p>
                							<p><span>Team Leader's Type of Graduate School:</span></p>
                							<p><span>Team Leader's Position within University/Organization:</span></p>
                							<br>
                						</div>
                					</div>

                					<div class="team-mem-edit-button">
                						<a class="btn btn-warning btn-xs" id="team-mem-edit-btn">edit</a>
                					</div>

                					<div class="team-meb-block">
                						<div class="inner-body">


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
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- Description view Modal -->
	<div class="modal fade" id="modal-tomb-desc" style="display: none;">
		<div class="modal-dialog modal-notify">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Project Description!</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
				<div class="modal-body">
					<div class="abt-content">
						<p>{{ $tombstone->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Summary view Modal -->
	<div class="modal fade" id="modal-tomb-summary" style="display: none;">
		<div class="modal-dialog modal-notify">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Project Summary!</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
				<div class="modal-body">
					<div class="abt-content">
						<p>{{ $tombstone->summary }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Image Edit Modal -->
	<div class="modal fade" id="modal-image" style="display: none;">
		<div class="modal-dialog modal-notify">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Image Update</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
				<div class="modal-body">
					<form class="imgForm" enctype="multipart/form-data" id="imgForm" data-id="{{ $tombstone->id }}">
						{{ csrf_field() }}
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Image Upload</label>
									<input type="file" class="form-control" id="image_link" name="image_link" accept="image/*" >
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label>Description</label><p id="descStatus" class="text-red hide" >Maximum characters are 500..!</p>
									<textarea rows="5" class="form-control" id="description" name="description" placeholder="Enter description of Project"required>{{ $tombstone->description }}</textarea>
								   	<div id="descharNum"></div>	
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>
						</div>
							
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success btn-sm">Save changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Summary Edit Modal -->
	<div class="modal fade" id="modal-summary" style="display: none;">
		<div class="modal-dialog modal-notify">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Summaries Update</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
				<div class="modal-body">
					<form class="summaryForm" enctype="multipart/form-data" id="summaryForm" data-id="{{ $tombstone->id }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Project Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$tombstone->name}}" required>
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label>Summaries</label><p id="roleStatus" class="text-red hide" >Maximum characters are 2000..!</p>
									<textarea rows="10" class="form-control" id="summary" name="summary" placeholder="Enter Summary of Project"required>{{ $tombstone->summary }}</textarea>
								   <div id="charNum"></div>	
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label>Summary PDF</label>

									<input type="file" class="form-control" id="pdf_link" name="pdf_link" accept="application/pdf" required>
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>
						</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success btn-sm">Save changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Submission Edit Modal -->
	<div class="modal fade" id="modal-submission" style="display: none;">
		<div class="modal-dialog modal-notify">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Case Number Update</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
				<div class="modal-body">
					<form class="inventionForm" enctype="multipart/form-data" id="inventionForm" data-id="{{ $tombstone->id }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Team Name</label>
									<p id="teamNameStatus" class="text-red hide" >Max char length are 12..!</p>
									<input type="text" class="form-control" id="team_name" name="team_name" placeholder="Enter Team Name" value="{{ $tombstone->team_name }}" required maxlength="12">
									
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label>Case Number</label>
									<input type="text" class="form-control" id="inven_number" name="inven_number" placeholder="Enter Case number" value="{{ $tombstone->invention_number }}" required>
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Agency</label>


									<select class="form-control" name="agency" id="agency" required>
                                		<option value="" disabled selected>Select Agency</option>
                                		<option value="nasa" @if ($tombstone->agency=="nasa"): selected  @endif>NASA</option>
                                		<option value="nih"  @if ($tombstone->agency=='nih'):selected  @endif>NIH</option>
                                		<option value="dod"  @if ($tombstone->agency=='dod'):selected  @endif>DOD</option>
                                		<option value="epa"  @if ($tombstone->agency=='epa'):selected  @endif>EPA</option>
                            		</select>

									@if ($errors->has('agency'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('agency')}}</strong>
									</span>
									@endif 
								</div>
							</div>

							<div class="col-md-6">
								<label>Technology Video Option</label>
								<div class="form-group">
									<div class="radio">
										<label>
											<input type="radio" id="video_option" name="video_option" class="optionsRadios" value="upload">
											Upload
										</label>

										<label>
											<input type="radio" id="video_option" name="video_option" class="optionsRadios" value="link">
											Link
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6" id="videoLink" style="display: none;">
								<div class="form-group">
									<label>Technology Video Link</label>
									<input type="url" class="form-control" id="video_url_link" name="video_link" placeholder="Enter Video Link">
									
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>
							<div class="col-md-6" id="videoFile" >
								<div class="form-group">
									<label>Technology Video Upload</label>

									<input type="file" class="form-control" id="video_upload_link" name="video_link"  accept="video/mp4,video/x-m4v,video/*" size="5MB">
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>

							<div class="col-md-6">
								<label>Presentation Video Option</label>
								<div class="form-group">
									<div class="radio">
										<label>
											<input type="radio" id="pres_video_option" name="pres_video_option" class="pres_optionsRadios" value="upload">
											Upload
										</label>

										<label>
											<input type="radio" id="pres_video_option" name="pres_video_option" class="pres_optionsRadios" value="link">
											Link
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6" id="pres_videoLink" style="display: none;">
								<div class="form-group">
									<label>Presentation Video Link</label>
									<input type="url" class="form-control" id="pres_video_url_link" name="video_link" placeholder="Enter Video Link">
									
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>
							<div class="col-md-6" id="pres_videoFile" >
								<div class="form-group">
									<label>Presentation Video Upload</label>

									<input type="file" class="form-control" id="pres_video_upload_link" name="video_link"  accept="video/mp4,video/x-m4v,video/*" size="5MB">
									@if ($errors->has('name'))
									<span class="help-block alert-danger">
										<strong>{{ $errors->first('name')}}</strong>
									</span>
									@endif 
								</div>
							</div>
							@if(isset($assignLeader->firstname))
							<input type="hidden" name="applier_id" id="applierId" value="{{$assignLeader->applier_id}}">
							@endif
							<div class="col-md-9">
								<div class="form-group">
	                                <label>Chart Position</label>
	                                <select id="position" name="position" class="form-control select2" data-placeholder="Select a position" style="width: 100%;" required>
	                                    <option></option>
                                        @foreach ($positions as $key => $value)
                                            <option value="{{ $key }}"  {{ $tombstone->position == $key ? 'selected' : '' }} >{{ $value }}</option>
                                        @endforeach
	                                </select>
	                                @if ($errors->has('position'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('position')}}</strong>
										</span>
									@endif
	                            </div>
                        	</div>
                        	<div class="col-md-3">
                        		<div class="form-group">
                        			<button type="button" id="positionToolTip" class="btn btn-info btn-xs cha-info-btn" title="<img src='{{ asset('backend/dist/img/CHART.jpg') }}' width='400' height='300'>">Position Info</button>
                        		</div>
                        	</div>


                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Tombstone Position</label>
                                    <select id="place_position" name="place_position" class="form-control select2" data-placeholder="Select a place position" style="width: 100%;" required>
                                        <option></option>
                                        @foreach ($place_positions as $key => $value)
                                        @if($key != 0)
                                        <option value="{{ $key }}"  {{ $tombstone->place_position == $key ? 'selected' : '' }} >{{ $value }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('position'))
                                    <span class="help-block text-red">
											<strong>{{ $errors->first('position')}}</strong>
										</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-3">
                        	</div>


                            <div class="col-md-9">
                               	<div class="form-group">
	                                <label for="project_status" class="control-label">Project Status</label><br>
	                                <div class="radio">
	                                    <label>
	                                        <input type="radio" name="project_status_option" class="proStatusRadio" value="0">
	                                        Opened
	                                    </label>
	                                    <label>
	                                        <input type="radio" name="project_status_option" class="proStatusRadio" value="1">
	                                        Closed
	                                    </label>
	                                </div>
                            	</div>
                            </div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success btn-sm">Save changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Leader Edit Modal -->
	<div class="modal fade" id="modal-teamtl" style="display: none;">
		<div class="modal-dialog modal-notify" style="width: 860px;">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Team Leader Update</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
      			<div class="modal-body">
      				<div class="row">
      					<div class="col-md-12">
      						<table class="table table-bordered mem-table">
      							<tbody>
      								<tr>
      									<th style="width: 10px">#</th>
      									<th>Applier Name</th>
      									<th>Applier Email</th>
      									<th>Applied for TL</th>
      									<th>Applied Type</th>
      									<th style="width:250px">Action</th>
      								</tr>

      								@if (!empty($projapplier))
	      								@php ($no = 0)
	      								@foreach ($projapplier as $applier)
		      								@if ($applier->interestedtl == 'yes')
		      									@php ($no++)
		      									@if($applier->leaderchecked == 1)  
			      								<tr style="background-color: #7BA04F;color: #fff;">
			      								@else
			      								<tr>
			      								@endif
				  									<td>{{$no}}</td>
				  									<td>{{(ucfirst($applier->firstname))}} {{(ucfirst($applier->lastname))}}</td>
				  									<td>{{$applier->email}}</td>
				  									<td>{{ucfirst($applier->interestedtl)}}</td>
				  									<td>{{ucfirst($applier->applier_type)}}</td>
				  									<td><a class="btn btn-success btn-xs memUpdate" data-id="{{$applier->id}}" data-proj-id="{{$tombstone->id }}">Set as TL</a>  <a class="btn btn-info btn-xs memView" data-id="{{$applier->id}}">View</a> <a class="btn btn-danger btn-xs memDel" data-id="{{$applier->id}}">Remove</a></td>
				  								</tr>
		      								@endif
	      								@endforeach
      								@endif
      							</tbody>
      						</table>
      					</div>	
      				</div>
      			</div>
			</div>
		</div>
	</div>
	<!-- Team Member Edit Modal -->
	<div class="modal fade" id="modal-team-mem" style="display: none;">
		<div class="modal-dialog modal-notify" style="width: 860px;">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
					<p class="heading">Team Member Update</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered mem-table" id="">
								<tbody>
									<tr>
										<th style="width: 10px">&nbsp;</th>
										<th style="width: 10px">#</th>
										<th>Applier Name</th>
										<th>Applier Email</th>
										<th>Applied for TL</th>
										<th>Applied Type</th>
										<th style="width:150px">Member Details</th>
									</tr>
									@if (!empty($projapplier))
									@php ($mno = 0)
									@foreach ($projapplier as $applier)
									@if ($applier->interestedtl == 'no')
									@php ($mno++)
									<tr>
										<td><input type="checkbox"/ data-id="{{$applier->id}}" data-proj-id="{{$tombstone->id }}" @if($applier->checked == 1) checked @endif ></td>
										<td>{{$mno}}</td>
										<td>{{(ucfirst($applier->firstname))}} {{(ucfirst($applier->lastname))}}</td>
										<td>{{$applier->email}}</td>
										<td>{{$applier->interestedtl}}</td>
										<td>{{$applier->applier_type}}</td>
										<td><a class="btn btn-info btn-xs memView" data-id="{{$applier->id}}">View</a> <a class="btn btn-danger btn-xs memDel" data-id="{{$applier->id}}">Remove</a></td>
									</tr>
									@endif
									@endforeach
									@endif
								</tbody>
							</table>
						</div>	
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Close</button>
					<button type="submit" id="btnGet" class="btn btn-success btn-sm">Set as Member</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Member View Modal -->
	<div class="modal fade" id="modal-member-view" style="display: none;">
		<div class="modal-dialog modal-notify" style="width: 860px;">
			<div class="modal-content">
				<div class="modal-header d-flex justify-content-center">
        			<p class="heading">Team Member's Details</p>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">×</span>
        			</button>
      			</div>
				<div class="modal-body TeamMemeber">
					<div class="row">
						<div class="col-lg-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Name</strong>
										<p class="m-b-xs" id='memName'></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Email</strong>
										<p class="m-b-xs" id='memEmail'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>DOB</strong>
										<p class="m-b-xs" id='memDOB'></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Primary Phone No</strong>
										<p class="m-b-xs" id='memPrimPhoneNo'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Alternate Phone No</strong>
										<p class="m-b-xs" id='memAltPhoneNo'></p>
									</div>
								</div>
							</div>
						</div>

						<br>
						
						<div class="col-md-12">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Address</strong>
										<p class="m-b-xs" id='memAD1'></p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Country</strong>
										<p class="m-b-xs" id='memCountry'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>State</strong>
										<p class="m-b-xs" id='memState'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>City</strong>
										<p class="m-b-xs" id='memCity'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Zipcode</strong>
										<p class="m-b-xs" id='memZC'></p>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Referral Source</strong>
										<p class="m-b-xs" id='memRS'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Sponsor Code</strong>
										<p class="m-b-xs" id='memSC'></p>
									</div>
								</div>
							</div>
						</div> -->
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>An US Citizen</strong>
										<p class="m-b-xs" id='memCitizen'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Current University</strong>
										<p class="m-b-xs" id='memUniversity'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Major</strong>
										<p class="m-b-xs" id='memMajor'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Current GPA</strong>
										<p class="m-b-xs" id='memGPA'></p>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Expected Graduation Date</strong>
										<p class="m-b-xs" id='memGradDate'></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Attending Medical School?</strong>
										<p class="m-b-xs" id='memAtMedicalSchool'></p>
									</div>
								</div>
							</div>
						</div> -->

						<div class="col-md-12">
							<div class="chat-activity-list">
								<div class="chat-element ">
									<div class="media-body ">
										<strong>Resume</strong>
										<p class="m-b-xs" id='memResume'></p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


@section('script')
<script type="text/javascript">

	$(document).ready(function(){

		$("#position").select2();

		$('#place_position').select2();

		$("#positionToolTip").tooltip({
			placement : 'top',
            template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><i class="fa fa-info-circle"></span> Position Info</h3></div><div class="tooltip-inner" style="width:1250px;!important"></div></div>',  
            html: true,
		});


		$('#summaryPdf').on('click',function(){
           var url = $(this).attr('data-url');
           window.open(url, "_blank");
        });

        /*$('#description').on('keyup',function(){
			var val = $(this).val();
			var len = val.length;
			if (len >= 500) {
				$('#descStatus').removeClass('hide');
                setInterval(blink_text_desc, 1000);
        	} else {
          		$('#descharNum').text('Character :'+ (len));
        	}

        	if (len < 500) {
        		$('#descStatus').addClass('hide');
        	}
		});*/


		$('#team_name').on('keyup',function(){
			var val = $(this).val();
			var len = val.length;
			if (len >= 12) {
				$('#teamNameStatus').removeClass('hide');
                setInterval(blink_text, 1000);
        	} else {
          		$('#tncharNum').text('Character :'+ (len));
        	}

        	if (len < 12) {
        		$('#teamNameStatus').addClass('hide');
        	}
		});




		$("img").click(function(event){
  			event.preventDefault();
		});

        $('#edit-btn').on('click',function(){
        	$('#modal-image').modal('show');
        });
        $('#summary-edit-btn').on('click',function(){
        	$('#modal-summary').modal('show');
        });
        $('#submission-edit-btn').on('click',function(){
        	$('#modal-submission').modal('show');
        });

        $('#teamtl-edit-btn').on('click',function(){
        	$('#modal-teamtl').modal('show');
        });

        $('#team-mem-edit-btn').on('click',function(){
        	$('#modal-team-mem').modal('show');
        });


        $('.tombs-read-more').on('click',function(){
        	$('#modal-tomb-desc').modal('show');
        });

        $('.summary-read-more').on('click',function(){
        	$('#modal-tomb-summary').modal('show');
        });

        

        $('#imgForm').on('submit',function(e){
        	e.preventDefault();
        	var form_data = new FormData();
        	var file_data = $('#image_link').prop('files')[0];
			form_data.append('image_link', file_data);
			form_data.append('description',$('#description').val());

			var id = $(this).attr('data-id');
        	var url = '{{ route("tombstone.imgupdate",":id") }}';
        	url = url.replace(':id', id);
        	$('#overlay').attr('hidden',false);
        	$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        	});
        	$.ajax({
            	url: url,
            	type: "POST",              
            	data:  form_data,
            	contentType: false,
            	cache: false,
            	processData: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){
                		$('.video-block img').attr('src',record['image_link']);
                		$('.video-block .desc-body p').text("");
                		$('.video-block .desc-body p').append("<span>Description:</span>"+record['description']);
                		$('#modal-image').modal('hide');
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

        /*$('#videoForm').on('submit',function(e){
        	e.preventDefault();
        	var option = $("input[name='video_option']:checked").val();
        	
        	var presOption = $("input[name='pres_video_option']:checked").val();
        	
        	var form_data = new FormData();
        	if(option == 'upload'){
				var file_data = $('#video_upload_link').prop('files')[0];
				form_data.append('video_link', file_data);
        	}else if(option == 'link'){
        		form_data.append('video_link', $('#video_url_link').val());
        	}

        	form_data.append('video_option',option);
        	var id = $(this).attr('data-id');
        	var url = '{{ route("tombstone.vidupdate",":id") }}';
        	url = url.replace(':id', id);
        	$('#overlay').attr('hidden',false);
        	$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        	});

        	$.ajax({
            	url: url,
            	type: "POST",              
            	data:  form_data,
            	contentType: false,
            	cache: false,
            	processData: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){
                		$('.video source').attr('src',record['value']);
                		$(".video-block video")[0].load();
                		$('#modal-video').modal('hide');
                	}else if( record['status'] == 0){
                    	Swal.fire({
						  	type: 'error',
						  	title: 'Oops...',
						  	text: 'Something went wrong!',
						})
                	}
            	}
        	});
        });*/

        $('#summaryForm').on('submit',function(e){
        	e.preventDefault();
        	var form_data = new FormData();
        	form_data.append('name',$('#name').val());
        	form_data.append('summary',$('#summary').val());
        	var file_data = $('#pdf_link').prop('files')[0];
        	form_data.append('pdf_link',file_data);
        	
        	var id = $(this).attr('data-id');
        	var url = '{{ route("tombstone.sumupdate",":id") }}';
        	url = url.replace(':id', id);
        	$('#overlay').attr('hidden',false);
        	$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        	});
        	$.ajax({
            	url: url,
            	type: "POST",              
            	data:  form_data,
            	contentType: false,
            	cache: false,
            	processData: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){
                		$('.summary-block .panel-header h3').text(record['name']);
                		$('.summary-block .inner-body .summary').text("");
                		$('.summary-block .inner-body .summary').append("<span>Executive summary:</span>"+record['value']);
                		$('.summary-block .inner-body #summaryPdf').attr('data-url','');
                		$('.summary-block .inner-body #summaryPdf').attr('data-url',record['link']);
                		$('#modal-summary').modal('hide');
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

        $('#inventionForm').on('submit',function(e){
        	e.preventDefault();
        	var option = $("input[name='video_option']:checked").val();
        	var presOption = $("input[name='pres_video_option']:checked").val();
        	
        	var status = $("input[name='project_status_option']:checked").val();





        	
        	var form_data = new FormData();
        	if(option == 'upload'){
				var file_data = $('#video_upload_link').prop('files')[0];
				form_data.append('video_link', file_data);
        	}else if(option == 'link'){
        		form_data.append('video_link', $('#video_url_link').val());
        	}

        	if(presOption == 'upload'){
				var pres_file_data = $('#pres_video_upload_link').prop('files')[0];
				form_data.append('pres_video_link', pres_file_data);
        	}else if(presOption == 'link'){
        		form_data.append('pres_video_link', $('#pres_video_url_link').val());
        	}

        	form_data.append('video_option',option);
        	form_data.append('pres_video_option',presOption);
        	form_data.append('inven_number',$('#inven_number').val());
        	form_data.append('agency',$('#agency').val());
        	form_data.append('team_name',$('#team_name').val());
        	form_data.append('applier_id',$('#applierId').val());
        	form_data.append('position',$('#position').val());
            form_data.append('place_position',$('#place_position').val());
            form_data.append('status',status);


        	if($('#applierId').val()  == null){
        		Swal.fire({
				  title: 'Team members are not selected (or) not applied.',
				  text: "This project position does not consider in the chart but other values are allowed to save",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, Save it!'
				}).then((result) => {
				  if (result.value) {
				    var id = $(this).attr('data-id');
		        	var url = '{{ route("tombstone.invenupdate",":id") }}';
		        	url = url.replace(':id', id);
		        	$('#overlay').attr('hidden',false);

		        	$.ajaxSetup({
		            	headers: {
		                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            	}
		        	});
		        	$.ajax({
		            	url: url,
		            	type: "POST",              
		            	data:  form_data,
		            	contentType: false,
		            	cache: false,
		            	processData: false,
		            	success: function(result){
		            		$('#overlay').attr('hidden',true);
		                	var record = jQuery.parseJSON(result);
		                	if(record['status'] == 1){
		                		$('.submission-block .inner-body .teamName').text("");
		                		$('.submission-block .inner-body .teamName').append("<span>Team Name:</span>"+record['team_name']);

		                		$('.submission-block .inner-body .inventionData').text("");
		                		$('.submission-block .inner-body .inventionData').append("<span>Case Number(s):</span>"+record['invention_number']);

		                		$('.submission-block .inner-body .agencyData').text("");
		                		$('.submission-block .inner-body .agencyData').append("<span>Agency Name:</span>"+record['agency']);

		                		$('.submission-block .inner-body .vidUrl').text("");
		                		$('.submission-block .inner-body .vidUrl').append("<span>Technology Transfer Video URL:</span><a>"+record['video_link']+"</a>");

		                		$('.submission-block .inner-body .chaPos').text("");
		                		$('.submission-block .inner-body .chaPos').append("<span>Chart Position:</span>"+record['position']);
                                location.reload();
		                		$('#modal-submission').modal('hide');


		                	}else if( record['status'] == 0){
		                		$('#modal-submission').modal('hide');
		                    	Swal.fire({
								  	type: 'error',
								  	title: 'Oops...',
								  	text: record['error']['position'][0],
								})
		                	}
		            	}
        			});
				  }
				})
        	}else{
        		var id = $(this).attr('data-id');
	        	var url = '{{ route("tombstone.invenupdate",":id") }}';
	        	url = url.replace(':id', id);
	        	$('#overlay').attr('hidden',false);

	        	$.ajaxSetup({
	            	headers: {
	                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            	}
	        	});
	        	$.ajax({
	            	url: url,
	            	type: "POST",              
	            	data:  form_data,
	            	contentType: false,
	            	cache: false,
	            	processData: false,
	            	success: function(result){
	            		$('#overlay').attr('hidden',true);
	                	var record = jQuery.parseJSON(result);
	                	if(record['status'] == 1){
	                		$('.submission-block .inner-body .teamName').text("");
	                		$('.submission-block .inner-body .teamName').append("<span>Team Name:</span>"+record['team_name']);

	                		$('.submission-block .inner-body .inventionData').text("");
	                		$('.submission-block .inner-body .inventionData').append("<span>Case Number(s):</span>"+record['invention_number']);

	                		$('.submission-block .inner-body .agencyData').text("");
	                		$('.submission-block .inner-body .agencyData').append("<span>Agency Name:</span>"+record['agency']);

	                		$('.submission-block .inner-body .vidUrl').text("");
	                		$('.submission-block .inner-body .vidUrl').append("<span>Video URL:</span><a>"+record['video_link']+"</a>");

	                		$('.submission-block .inner-body .chaPos').text("");
	                		$('.submission-block .inner-body .chaPos').append("<span>Chart Position:</span>"+record['position']);

                            location.reload();

	                		$('#modal-submission').modal('hide');
	                	}else if( record['status'] == 0){
	                		$('#modal-submission').modal('hide');
	                    	Swal.fire({
							  	type: 'error',
							  	title: 'Oops...',
							  	text: record['error']['position'][0],
							})
	                	}
	            	}
	        	});

        	}
        });

        //setting Team Leader
        $('.mem-table tbody ').on( 'click', '.memUpdate',function () {

        	var id =$(this).attr('data-id');
        	var projectId = $(this).attr('data-proj-id');

        	var form_data = new FormData();
        	form_data.append('projectid',projectId);
        	form_data.append('applierid',id);

        	var url = '{{ route("tombstone.tlassign") }}';
        	$('#overlay').attr('hidden',false);
        	$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        	});
        	$.ajax({
            	url: url,
            	type: "POST",              
            	data:  form_data,
            	contentType: false,
            	cache: false,
            	processData: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){

                		$('.team-tl-block .inner-body .tl-name').text("");
                		$('.team-tl-block .inner-body .tl-name').append("<span>Team Leader's Name:</span> "+ record['name']);

                		$('.team-tl-block .inner-body .tl-university').text("");
                		$('.team-tl-block .inner-body .tl-university').append("<span>Team Leader's University/Organization:</span> "+ record['university']);

                		$('#modal-teamtl').modal('hide');
                		location.reload();
                	}else if( record['status'] == 0){
                    	alert('Leader selected failed..!');
                	}
            	}
        	});
        });



		//view members
		var openModalId = '';
        $('#modal-teamtl').on('show.bs.modal', function(){
    		 openModalId ='#'+$(this).attr('id');
		});

		$('#TM-table tbody ').on( 'click', '.memView',function () {
        	var id =$(this).attr('data-id');
        	alert('Member Applier'+$(this).attr('data-id'));
        });

        $('.mem-table tbody ').on( 'click', '.memView',function () {
        	var id =$(this).attr('data-id');
        	var url = '{{ route("tombstone.applierview",":id") }}';
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
            	cache: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){
                		console.log(record['details']);
                		$('.TeamMemeber #memName').text(record['details']['firstname']+' '+record['details']['lastname']);
                		$('.TeamMemeber #memEmail').text(record['details']['email']);
                		$('.TeamMemeber #memPrimPhoneNo').text(record['details']['primaryphonenumber']);
                		$('.TeamMemeber #memAltPhoneNo').text(record['details']['alterphonenumber']);
                		$('.TeamMemeber #memDOB').text(record['details']['dob']);
                		$('.TeamMemeber #memAD1').text(' ');
                		$('.TeamMemeber #memAD1').append( record['details']['address1']/*+'<br>'+record['details']['address2']*/ );
                		//$('.TeamMemeber #memAD2').text(record['details']['address2']);

                		$('.TeamMemeber #memCountry').text(record['details']['country']);
                		$('.TeamMemeber #memState').text(record['details']['state']);
                		$('.TeamMemeber #memCity').text(record['details']['city']);

                		$('.TeamMemeber #memZC').text(record['details']['zipcode']);
                		//$('.TeamMemeber #memRS').text(record['details']['referralSource']);
                		//$('.TeamMemeber #memSC').text(record['details']['sponsorCode']);
                		$('.TeamMemeber #memCitizen').text(record['details']['citizenship']);
                		$('.TeamMemeber #memUniversity').text(record['details']['currentUniversity']);
                		$('.TeamMemeber #memMajor').text(record['details']['major']);
                		$('.TeamMemeber #memGPA').text(record['details']['currentGPA']);
                		//$('.TeamMemeber #memAtMedicalSchool').text(record['details']['attendmedischool']);
                		//$('.TeamMemeber #memGradDate').text(record['details']['graduationDate']);
                		$('.TeamMemeber #memResume').text(" ");
                		$('.TeamMemeber #memResume').append( '<a onclick="viewRes('+record['details']['id']+')" >'+record['details']['resume']+' </a>' );
                		$(openModalId).modal('hide');
                		$('#modal-member-view').modal('show');
                	}else if( record['status'] == 0){
                    	alert('failed..!');
                	}
            	}
        	});
        });

        $('.mem-table tbody ').on( 'click', '.memDel',function () {
        	var id =$(this).attr('data-id');
        	var url = '{{ route("tombstone.applierdelete",":id") }}';
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
            	cache: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){
                		location.reload();
                	}else if( record['status'] == 0){
                    	alert('failed..!');
                	}
            	}
        	});
        });

        //setting members 
        $('#btnGet').on('click',function(){
        	var memData = [];
        	$(".mem-table input[type=checkbox]:checked").each(function () {
                var id =$(this).attr('data-id');
        		var projectId = $(this).attr('data-proj-id');
        		memData.push({
    				applierid : id, 
    				projectid : projectId
				})
            });
        	var url = '{{ route('tombstone.tmassign') }}';
        	var projData = $(".mem-table input[type=checkbox]:checked").attr('data-proj-id');
        	$('#overlay').attr('hidden',false);
            $.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        	});
        	$.ajax({
            	url: url,
            	type: "POST",              
            	data:  {
            		mem:memData,
            		projId: projData,
            	},
            	cache: false,
            	success: function(result){
            		$('#overlay').attr('hidden',true);
                	var record = jQuery.parseJSON(result);
                	if(record['status'] == 1){
                		console.log(record);
                		$('.team-meb-block .inner-body').text('');
                		var no=0;
                		$(record['value']).each(function (index, value) {
                			no++;
                			var	html = "<p><span>Team Member "+no+"'s Name:</span>"+value.name+"</p>"+
                					"<p><span>Team Member "+no+"'s University/Organization:</span>"+value.university+"</p>"+
                					"<p><span>Team Member "+no+"'s Type of Graduate School:</span></p>"+
                					"<p><span>Team Member "+no+"'s Position within University/Organization:</span></p>"+
                					"<br>";
                			$('.team-meb-block .inner-body').append(html);
                		});
                		$('#modal-team-mem').modal('hide');
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
        
		$('.optionsRadios').on('click',function(){
			optVal = $(this).val();
			if(optVal == 'upload'){
				$('#videoFile').show();
				//$('#video_upload_link').prop('required',true);
				$('#videoLink').hide();
				//$('#video_url_link').removeAttr('required','required');
			}else if(optVal == 'link'){
				$('#videoLink').show();
				//$('#video_url_link').prop('required',true);
				$('#videoFile').hide();
				//$('#video_upload_link').removeAttr('required','required');
			}
		});
		


		$('.pres_optionsRadios').on('click',function(){
			optVal = $(this).val();
			if(optVal == 'upload'){
				$('#pres_videoFile').show();
				//$('#video_upload_link').prop('required',true);
				$('#pres_videoLink').hide();
				//$('#video_url_link').removeAttr('required','required');
			}else if(optVal == 'link'){
				$('#pres_videoLink').show();
				//$('#video_url_link').prop('required',true);
				$('#pres_videoFile').hide();
				//$('#video_upload_link').removeAttr('required','required');
			}
		});

		/*$('#summary').on('keyup',function(){
			var val = $(this).val();
			var len = val.length;
			if (len >= 2000) {
				$('#roleStatus').removeClass('hide');
                setInterval(blink_text, 1000);
        	} else {
          		$('#charNum').text('Character :'+ (len));
        	}
		});*/
	});

	//text blinking
    /*function blink_text_desc(){
        $('#descStatus').fadeOut(500);
        $('#descStatus').fadeIn(500);
    }*/

	function blink_text(){
        $('#roleStatus').fadeOut(500);
        $('#roleStatus').fadeIn(500);
    }


    //view resume file in new tab 
    function viewRes(id){
    	var url = '{{ route("tombstone.getresume",":id") }}';
    	url = url.replace(':id', id);
    	$.ajax({
    		url: url,
    		type: "GET",
    		cache: false,
    		success: function(result){
    			var record = jQuery.parseJSON(result);
    			if(record['status'] == 1){
    				console.log(record['details']['resume']);

    				window.open(
    					'https://docs.google.com/gview?url='+record['details']['resume']+'&embedded=true',
    					'_blank'
    					);
    			}else if( record['status'] == 0){
    				alert('failed..!');
    			}
    		}
    	});
    }



</script>
@endsection