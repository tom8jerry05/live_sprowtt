@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Users</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Users</li>
	</ol>
</section>

<!-- Main content -->
<section class="content" style="min-height: 1250px;">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Create Users</h3>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    	@endif

						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif

					</div>


					<form class="UsersForm" method="POST"  action="{{route('users.store')}}" id="Users-form" enctype="multipart/form-data">
						{{ csrf_field() }}


						<div class="col-md-6">
							<div class="form-group">
								<label>Role</label>
								<select class="form-control" id="role" name="role" required>
									<option value="" selected>--Select Role--</option>
									@foreach($roles as $role)
										<option value="{{$role->id}}" {{ old("role") == $role->id ? 'selected' : '' }}>{{ucfirst($role->role_name)}}</option>
									@endforeach 
								</select>
								@if ($errors->has('role'))
								<span class="help-block text-red">
									<strong>{{ $errors->first('role')}}</strong>
								</span>
								@endif 
							</div>
						</div>

						@if ( old("role") == App\Role::$TEAM_LEADER  || old("role") == App\Role::$TEAM_MEMBER)
						<div id="roleForm" style="display: block;">
						@else
						<div id="roleForm" style="display: none">
						@endif


							<div class="col-md-6">
								<div class="form-group">
									<label>Project</label>
									<select class="form-control" id="projectId" name="projectId">
										<option value="" selected>--Select Project--</option>
										@foreach($projects as $project)
										<option value="{{$project->id}}" {{ old("projectId") == $project->id ? 'selected' : '' }}>{{ucfirst($project->name)}}</option>
										@endforeach
									</select>
									<input type="hidden" name="leaderReplace" id="leaderReplace" value="notreplace">
									@if ($errors->has('projectId'))
									<span class="help-block text-red">
									<strong>{{ $errors->first('projectId')}}</strong>
									</span>
									@endif 
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>User Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required value="{{ old('name') }}">
								@if ($errors->has('name'))
								<span class="help-block text-red">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
								@endif 
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>User Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required value="{{ old('email')}}">
								@if ($errors->has('email'))
								<span class="help-block text-red">
									<strong>{{ $errors->first('email')}}</strong>
								</span>
								@endif 
							</div>
						</div>

						@if ( old("role") == App\Role::$TEAM_LEADER  || old("role") == App\Role::$TEAM_MEMBER )
						<div id="memberForm" style="display: block;">
						@else
						<div id="memberForm" style="display: none">
						@endif

							<div class="col-md-12">
								<p class="lead"><strong>Member Details:</strong></p>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name" class="control-label">Name</label>
									<div class="row">
										<div class="col-md-6">
											<input id="firstname" type="text" class="form-control "
											title="Enter your firstname" placeholder="First" value="{{ old('firstname')}}" disabled>
											<input id="firstnameval" type="hidden" name="firstname" value="{{ old('firstname')}}">
											@if ($errors->has('firstname'))
												<span class="help-block text-red">
													<strong>{{ $errors->first('firstname')}}</strong>
												</span>
											@endif
										</div>
										<div class="col-md-6">
											<input id="lastname" type="text" class="form-control" name="lastname" 
											title="Enter your lastname" placeholder="Last" value="{{ old('lastname')}}">
											@if ($errors->has('lastname'))
												<span class="help-block text-red">
													<strong>{{ $errors->first('lastname')}}</strong>
												</span>
											@endif
										</div>
											
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phonenumber" class="control-label">Primary Phone Number</label>
									<input id="primaryphonenumber" type="number" class="form-control" name="primaryphonenumber" value="{{ old('primaryphonenumber')}}">
									@if ($errors->has('primaryphonenumber'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('primaryphonenumber')}}</strong>
										</span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phonenumber" class="control-label">Alternative Phone Number</label>
									<input id="alterphonenumber" type="number" class="form-control" name="alterphonenumber" value="{{ old('alterphonenumber')}}">
									@if ($errors->has('alterphonenumber'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('alterphonenumber')}}</strong>
										</span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email" class="control-label">Email</label>
									<input id="mememail" type="email" class="form-control" value="{{ old('mememail')}}"disabled>
									<input id="mememailval" type="hidden" name="mememail" value="{{ old('mememail')}}">
									@if ($errors->has('mememail'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('mememail')}}</strong>
										</span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="dob" class="control-label">Date of Birth</label>

									<input id="dob" type="date" class="form-control" name="dob">
									@if ($errors->has('dob'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('dob')}}</strong>
										</span>
									@endif
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="address1" class="control-label">Address</label>
									<input id="address1" type="text" class="form-control" name="address1" value="{{ old('address1')}}">
									@if ($errors->has('address1'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('address1')}}</strong>
										</span>
									@endif 
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="country" class="control-label">Country</label><br>
                                    <select id="country0" name="country" class="form-control select2" data-placeholder="Select a country" style="width: 100%;">
                                        <option></option>
                                        @foreach($countries as $key => $country)
                                            <option value="{{$country['id']}}"> {{$country['name']}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('country')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-6 required">
                            	<div class="form-group">
                                    <label for="state" class="control-label">State</label><br>
                                    <select id="state0" name="state" class="form-control select2" data-placeholder="Select a state" style="width: 100%;" value="{{old('country')}} ">
                                        
                                    </select>
                                    @if ($errors->has('state'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('state')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="city" class="control-label">City</label>
                                    <select id="city0" name="city" class="form-control select2" data-placeholder="Select a state" style="width: 100%;">
                                        
                                    </select>
                                    @if ($errors->has('city'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('city')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zipcode" class="control-label">Zipcode</label>
                                    <input id="zipcode" type="number" class="form-control" name="zipcode" value="{{ old('zipcode') }}">
                                   
                                    @if ($errors->has('zipcode'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('zipcode')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="form-group">
                                    <label for="referralSource" class="control-label">Referral Source</label>
                                    <input id="referralSource" type="text" class="form-control" name="referralSource" value="{{ old('referralSource') }}">
                                    @if ($errors->has('referralSource'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('referralSource')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="form-group">
                                    <label for="sponsorCode" class="control-label">Sponsor Code</label>
                                    <input id="sponsorCode" type="text" class="form-control" name="sponsorCode" value="{{ old('sponsorCode') }}">
                                    @if ($errors->has('sponsorCode'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('sponsorCode')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-4">
                            	<div class="form-group">
                                    <label for="citizenship" class="control-label">Member an US Citizen?</label><br>
                                    <label for="citizenship">
                                        <input type="radio" name="citizenship" id="citizenship" value="yes" {{ old("citizenship") == "yes" ? 'checked' : '' }}>Yes
                                    </label><br>
                                    <label for="citizenship">
                                        <input type="radio" name="citizenship" id="citizenship" value="no" {{ old("citizenship") == "no" ? 'checked' : '' }}>No
                                    </label>
                                   	@if ($errors->has('citizenship'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('citizenship')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-12">
                            	<div class="form-group">
                                    <label for="currentUniversity" class="control-label">College / University / Vocational Training School</label>
                                    <input id="currentUniversity" type="text" class="form-control" name="currentUniversity" value="{{ old('currentUniversity') }}">
                                    @if ($errors->has('currentUniversity'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('currentUniversity')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="major" class="control-label">Major</label>
                                    <input id="major" type="text" class="form-control" name="major" value="{{ old('major') }}">
                                    @if ($errors->has('major'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('major')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-6">
                           		<div class="form-group">
                                    <label for="currentGPA" class="control-label">Current GPA</label>
                                    <input id="currentGPA" type="text" class="form-control" name="currentGPA" value="{{ old('currentGPA') }}">
                                    @if ($errors->has('currentGPA'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('currentGPA')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="appropriateAmount" class="control-label">Memeber an Attending Medical School?</label><br>

                                    <label for="attendmedischool">
                                        <input type="radio" name="attendmedischool" id="attendmedischool" value="yes" {{ old("attendmedischool") == "yes" ? 'checked' : '' }}>Yes
                                    </label>
                                    <label for="attendmedischool">
                                        <input type="radio" name="attendmedischool" id="attendmedischool"  value="no" {{ old("attendmedischool") == "no" ? 'checked' : '' }}>No
                                    </label>
                                    @if ($errors->has('attendmedischool'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('attendmedischool')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="graduationDate" class="control-label">Expected Graduation Date from medical school</label>
                                    <input id="graduationDate" type="date" class="form-control" name="graduationDate" >
                                    @if ($errors->has('graduationDate'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('graduationDate')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="file" class="control-label">Upload Resume</label>
                                    <input type="file" id="resume" name="resume" class="form-control" value="{{ old('resume') }}" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                    @if ($errors->has('resume'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('resume')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
						</div>

						@if ( old("role") == App\Role::$JUDGE  || old("role") == App\Role::$INTERN || old("role") == App\Role::$AMBASSADOR )
							<div id="judgeForm" style="display: block;">
						@else
							<div id="judgeForm" style="display: none">
						@endif

							<div class="col-md-12">
								<p class="lead"><strong>Member Details:</strong></p>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="name" class="control-label">Name</label>
									<div class="row">
										<div class="col-md-6">
											<input id="firstname" type="text" class="form-control "
											title="Enter your firstname" placeholder="First" value="{{ old('firstname')}}" disabled>
											<input id="firstnameval" type="hidden" name="firstname" value="{{ old('firstname')}}">
											@if ($errors->has('firstname'))
												<span class="help-block text-red">
													<strong>{{ $errors->first('firstname')}}</strong>
												</span>
											@endif
										</div>
										<div class="col-md-6">
											<input id="lastname" type="text" class="form-control" name="lastname" 
											title="Enter your lastname" placeholder="Last" value="{{ old('lastname')}}">
											@if ($errors->has('lastname'))
												<span class="help-block text-red">
													<strong>{{ $errors->first('lastname')}}</strong>
												</span>
											@endif
										</div>
											
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email" class="control-label">Email</label>
									<input id="judemail" type="email" class="form-control" value="{{ old('judemail')}}"disabled>
									<input id="judemailval" type="hidden" name="judemail" value="{{ old('judemail')}}">
									@if ($errors->has('judemail'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('judemail')}}</strong>
										</span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phonenumber" class="control-label">Phone Number</label>
									<input id="phonenumber" type="number" class="form-control" name="phonenumber" value="{{ old('phonenumber')}}">
									@if ($errors->has('phonenumber'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('phonenumber')}}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="address" class="control-label">Address</label>
									<input id="address" type="text" class="form-control" name="address" value="{{ old('address')}}">
									@if ($errors->has('address'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('address1')}}</strong>
										</span>
									@endif 
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="country" class="control-label">Country</label><br>
                                    <select id="country" name="country" class="form-control select2" data-placeholder="Select a country" style="width: 100%;">
                                        <option></option>
                                        @foreach($countries as $key => $country)
                                            <option value="{{$country['id']}}"> {{$country['name']}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('country')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-6 required">
                            	<div class="form-group">
                                    <label for="state" class="control-label">State</label><br>
                                    <select id="state" name="state" class="form-control select2" data-placeholder="Select a state" style="width: 100%;" value="{{old('country')}} ">
                                        
                                    </select>
                                    @if ($errors->has('state'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('state')}}</strong>
										</span>
									@endif 
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="city" class="control-label">City</label>
                                    <select id="city" name="city" class="form-control select2" data-placeholder="Select a state" style="width: 100%;">
                                        
                                    </select>
                                    @if ($errors->has('city'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('city')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="file" class="control-label">Upload Resume</label>
                                    <input type="file" id="resume" name="resume" class="form-control" value="{{ old('resume') }}" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                    @if ($errors->has('resume'))
										<span class="help-block text-red">
											<strong>{{ $errors->first('resume')}}</strong>
										</span>
									@endif
                                </div>
                            </div>
						</div>







						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-info pull-right">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection


@section('script')
<script type="text/javascript">
$(document).ready(function(){
	//Member form select2
	$('#memberForm #country0').select2();
	$('#memberForm #state0').select2();
	$('#memberForm #city0').select2();

	//Judge form select2
	$( "#judgeForm #country" ).select2();
	$( "#judgeForm #state" ).select2();
	$( "#judgeForm #city" ).select2();



	$('#roleForm #projectId').on('change',function(){
		var role = $('#role').val();
		var projectid = $(this).val();
		var url = '{{ route("users.checkproject",":id") }}';
        	url = url.replace(':id', projectid);

        if(role == {{ App\Role::$TEAM_LEADER }} ){

			$('#overlay').attr('hidden',false);
        	$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		$.ajax({
    			url: url,
    			type: "GET",
    			success:function(result){ 
					$('#overlay').attr('hidden',true);
    				var record = jQuery.parseJSON(result);
    				console.log(record['status']);
    				if(record['status'] == 1){
    					Swal.fire({
    						title: 'This project already has a Team Leader, do you want to replace the current Team Leader?',
    						
    						type: 'warning',
    						showCancelButton: true,
    						confirmButtonColor: '#3085d6',
    						cancelButtonColor: '#d33',
    						confirmButtonText: 'Yes, replace it!'
    					}).then((result) => {
    						if (result.value = true) {
    							$('#roleForm #leaderReplace').val('replace');
    						}else{
    							$('#roleForm #leaderReplace').val('notreplace');
    						}
    					})
    				}
    			}
    		});
        }
	});



	//On Changing role
	$('#role').on('change',function(){
		var roleId = $(this).val();
		if( (roleId == {{ App\Role::$TEAM_LEADER }} ||  roleId == {{ App\Role::$TEAM_MEMBER }}) ){

			$('#roleForm').show();
			$('#memberForm').show();
			$('#judgeForm').hide();
			requireTrue();
			judgeRequireFalse();
			var firstname  = $('.UsersForm #name').val();
			var email  = $('.UsersForm #email').val();
			$('#memberForm #firstname').val(firstname).prop('disabled',true);
			$('#memberForm #firstnameval').val(firstname);
			$('#memberForm #mememail').val(email).prop('disabled',true);
			$('#memberForm #mememailval').val(email);
		}

		if(roleId == {{ App\Role::$SUB_ADMIN }}){
			$('#roleForm').hide();
			$('#memberForm').hide();
			$('#judgeForm').hide();
			requireFalse();
			judgeRequireFalse();
		}

		if(roleId == {{ App\Role::$STUDENT }}){
			$('#roleForm').hide();
			$('#memberForm').hide();
			$('#judgeForm').hide();
			requireFalse();
			judgeRequireFalse();
		}

		if( (roleId == {{ App\Role::$JUDGE }} || roleId == {{ App\Role::$INTERN }} || roleId == {{ App\Role::$AMBASSADOR }}) ){
			$('#roleForm').hide();
			$('#memberForm').hide();
			$('#judgeForm').show();
			judgeRequireTrue();
			requireFalse();
			var firstname  = $('.UsersForm #name').val();
			var email  = $('.UsersForm #email').val();
			$('#judgeForm #firstname').val(firstname).prop('disabled',true);
			$('#judgeForm #firstnameval').val(firstname);
			$('#judgeForm #judemail').val(email).prop('disabled',true);
			$('#judgeForm #judemailval').val(email);
		}
	});


	//On Changing name
	$('.UsersForm #name').on('change',function(){
		var role = $('#role').val();
		if( (role == {{ App\Role::$TEAM_LEADER }} ||  role == {{ App\Role::$TEAM_MEMBER }}) ){
			$('#memberForm #firstname').val($(this).val());
			$('#memberForm #firstnameval').val($(this).val());
			$('#memberForm #firstname').prop('disabled',true);
		}

		if( (role == {{ App\Role::$JUDGE }} || role == {{ App\Role::$INTERN }} || role == {{ App\Role::$AMBASSADOR }}) ){
			$('#judgeForm #firstname').val($(this).val());
			$('#judgeForm #firstnameval').val($(this).val());
			$('#judgeForm #firstname').prop('disabled',true);
		}		
	});

	//On Changing email
	$('.UsersForm #email').on('change',function(){
		var role = $('#role').val();
		if( (role == {{ App\Role::$TEAM_LEADER }} ||  role == {{ App\Role::$TEAM_MEMBER }}) ){
			$('#memberForm #mememail').val($(this).val());
			$('#memberForm #mememailval').val($(this).val());
			$('#memberForm #mememail').prop('disabled',true);
		}
		if( (role == {{ App\Role::$JUDGE }} || role == {{ App\Role::$INTERN }} || role == {{ App\Role::$AMBASSADOR }}) ){
			$('#judgeForm #judemail').val($(this).val());
			$('#judgeForm #judemailval').val($(this).val());
			$('#judgeForm #judemail').prop('disabled',true);
		}
	});


    //getting states on select country
    $('#memberForm #country0').on('change',function(){
    	var role = $('#role').val();
    	var countryID = $(this).val();    
    	if(countryID){

			$('#overlay').attr('hidden',false);
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		$.ajax({
    			url: "{{ route("ProjectApplyGetState") }}",
    			type: "POST",              
    			data:  {
    				'country_id':countryID,
    			},
    			success:function(result){

					$('#overlay').attr('hidden',true);               
    				if(result){
    					var record = jQuery.parseJSON(result);

						$("#memberForm #state0").empty();
    					$("#memberForm #state0").append('<option></option>');
    					$.each(record,function(key,value){
    						$("#memberForm #state0").append('<option value="'+value['id']+'">'+value['name']+'</option>');
    					});
    				}else{
    					$("#memberForm #state0").empty();
    				}
    			}
    		});
    	}else{
    		$("#memberForm #state").empty();
    		$("#memberForm #city").empty();
    	}      
    });
    $('#judgeForm #country').on('change',function(){
    	
    	var countryID = $(this).val();    
    	if(countryID){

			$('#overlay').attr('hidden',false);
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		$.ajax({
    			url: "{{ route("ProjectApplyGetState") }}",
    			type: "POST",              
    			data:  {
    				'country_id':countryID,
    			},
    			success:function(result){ 

					$('#overlay').attr('hidden',true);              
    				if(result){
    					var record = jQuery.parseJSON(result);

						$("#judgeForm #state").empty();
    					$("#judgeForm #state").append('<option></option>');
    					$.each(record,function(key,value){
    						$("#judgeForm #state").append('<option value="'+value['id']+'">'+value['name']+'</option>');
    					});
    				}else{
    					$("#judgeForm #state").empty();
    				}
    			}
    		});
    	}else{
    		$("#judgeForm #state").empty();
    		$("#judgeForm #city").empty();
    	}      
    });

    //getting cities on select state
    $( "#memberForm #state0" ).on('change',function(){
    	var stateID = $(this).val();    
    	if(stateID){
			$('#overlay').attr('hidden',false);
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		$.ajax({
    			url: "{{ route("ProjectApplyGetCity") }}",
    			type: "POST",              
    			data:  {
    				'state_id':stateID,
    			},
    			success:function(result){ 

					$('#overlay').attr('hidden',true);              
    				if(result){
    					var record = jQuery.parseJSON(result);
    					$("#memberForm #city0").empty();
    					$("#memberForm #city0").append('<option></option>');
    					$.each(record,function(key,value){
    						$("#memberForm #city0").append('<option value="'+value['id']+'">'+value['name']+'</option>');
    					});
    				}else{
    					$("#memberForm #city0").empty();
    				}
    			}
    		});
    	}else{
    		$("#memberForm #city").empty();
    	}
    });
    $( "#judgeForm #state" ).on('change',function(){
    	var stateID = $(this).val();    
    	if(stateID){
			$('#overlay').attr('hidden',false);
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		$.ajax({
    			url: "{{ route("ProjectApplyGetCity") }}",
    			type: "POST",              
    			data:  {
    				'state_id':stateID,
    			},
    			success:function(result){  
					$('#overlay').attr('hidden',true);             
    				if(result){
    					var record = jQuery.parseJSON(result);
    					$("#judgeForm #city").empty();
    					$("#judgeForm #city").append('<option></option>');
    					$.each(record,function(key,value){
    						$("#judgeForm #city").append('<option value="'+value['id']+'">'+value['name']+'</option>');
    					});
    				}else{
    					$("#judgeForm #city").empty();
    				}
    			}
    		});
    	}else{
    		$("#judgeForm #city").empty();
    	}
    });


    




});


function requireTrue(){
	$('#roleForm #project').prop('required',true);
	$('#memberForm #firstname').prop('required',true);
	$('#memberForm #lastname').prop('required',true);
	$('#memberForm #primaryphonenumber').prop('required',true);
	$('#memberForm #alterphonenumber').prop('required',true);
	$('#memberForm #mememail').prop('required',true);
	$('#memberForm #dob').prop('required',true);
	$('#memberForm #address1').prop('required',true);
	//$('#memberForm #address2').prop('required',true);
	$('#memberForm #country0').prop('required',true);
	$('#memberForm #state0').prop('required',true);
	$('#memberForm #city0').prop('required',true);
	$('#memberForm #zipcode').prop('required',true);
	$('#memberForm #referralSource').prop('required',true);
	$('#memberForm #sponsorCode').prop('required',true);
	$('#memberForm #currentUniversity').prop('required',true);
	$('#memberForm #major').prop('required',true);
	$('#memberForm #currentGPA').prop('required',true);
	$('#memberForm #attendmedischool').prop('required',true);
	$('#memberForm #graduationDate').prop('required',true);
	$('#memberForm #resume').prop('required',true);
}

function requireFalse(){
    $('#roleForm #project').prop('required',false);
	$('#memberForm #firstname').prop('required',false);
	$('#memberForm #lastname').prop('required',false);
	$('#memberForm #primaryphonenumber').prop('required',false);
	$('#memberForm #alterphonenumber').prop('required',false);
	$('#memberForm #mememail').prop('required',false);
	$('#memberForm #dob').prop('required',false);
	$('#memberForm #address1').prop('required',false);
	//$('#memberForm #address2').prop('required',false);
	$('#memberForm #country0').prop('required',false);
	$('#memberForm #state0').prop('required',false);
	$('#memberForm #city0').prop('required',false);
	$('#memberForm #zipcode').prop('required',false);
	$('#memberForm #referralSource').prop('required',false);
	$('#memberForm #sponsorCode').prop('required',false);
	$('#memberForm #currentUniversity').prop('required',false);
	$('#memberForm #major').prop('required',false);
	$('#memberForm #currentGPA').prop('required',false);
	$('#memberForm #attendmedischool').prop('required',false);
	$('#memberForm #graduationDate').prop('required',false);
	$('#memberForm #resume').prop('required',false);
}


function judgeRequireTrue(){
	$('#judgeForm #firstname').prop('required',true);
	$('#judgeForm #lastname').prop('required',true);
	$('#judgeForm #phonenumber').prop('required',true);
	$('#judgeForm #judemail').prop('required',true);
	$('#judgeForm #address').prop('required',true);
	$('#judgeForm #country').prop('required',true);
	$('#judgeForm #state').prop('required',true);
	$('#judgeForm #city').prop('required',true);
	$('#judgeForm #resume').prop('required',true);
}

function judgeRequireFalse(){
	$('#judgeForm #firstname').prop('required',false);
	$('#judgeForm #lastname').prop('required',false);
	$('#judgeForm #phonenumber').prop('required',false);
	$('#judgeForm #judemail').prop('required',false);
	$('#judgeForm #address').prop('required',false);
	$('#judgeForm #country').prop('required',false);
	$('#judgeForm #state').prop('required',false);
	$('#judgeForm #city').prop('required',false);
	$('#judgeForm #resume').prop('required',false);
}
</script>
@endsection