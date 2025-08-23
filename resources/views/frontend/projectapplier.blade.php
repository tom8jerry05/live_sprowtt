@extends('layouts.frontend')

@section('content')
<style type="text/css">
    .help-block{
        font-size: 14px;
    }
</style>

<section class="sp-ch-text-section">
    <div class="container">
        <div class="sp-ch-text-wrapper">
            <p>The Sprowtt Launch Pad Challenge takes federal lab-to-market efforts to the next level. By fostering entrpenuerail teams to compete against each other in a bi-annual competition that rewards those with  the best business skills and capabilities to run a multi-million dollar company. Twice each year, teams will have the opportunity to test their business acumen against competitors. You will be aligned with a team, or perhaps you have what it takes to lead the mission and act as Team Leader. Through the Launch Pad, you will gain global exposure, connect more quickly to opportunities, and maximize your innovation potentialthrough discovering new technology solutions. In addition, you will collaborate on a global scale to support the growth of startups. Whichever project you choose to participate in, the Launch Pad will support you with our collaborative tools. Our successful and ready-to-go parent company, Sprowtt Inc., helps you to accelerate local and global growth by securing the necessary capital for your project.</p>
        </div>
    </div>
</section>
<section  class="fr-project-apply-sec">
    <div class="container-fluid row">
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-lg-12">
            <div class="panel panel-default project-apply-pnl-def">
                <div class="panel-heading">
                    @if(!empty($tombstone))
                        Apply for {{ucfirst($tombstone->name)}}
                    @else
                        Apply to be considered for a Technology Transfer Team
                    @endif
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

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

                   
                    <form method="POST" id="student-form" action="{{ route('ProjectApplyForm') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group required">
                            <label for="name" class="control-label">Name</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control " name="firstname" 
                                    title="Enter your firstname" placeholder="First" required autofocus value="{{old('firstname')}}">
                                    @if ($errors->has('firstname'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('firstname')}}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" 
                                    title="Enter your lastname" placeholder="Last" required autofocus value="{{old('lastname')}}">
                                    @if ($errors->has('lastname'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('lastname')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="phonenumber" class="control-label">Primary Phone Number</label>
                                    <input id="primaryphonenumber" type="number" class="form-control" name="primaryphonenumber" required autofocus value="{{old('primaryphonenumber')}}">
                                    @if ($errors->has('primaryphonenumber'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('primaryphonenumber')}}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="phonenumber" class="control-label">Alternative Phone Number</label>
                                    <input id="alterphonenumber" type="number" class="form-control" name="alterphonenumber" required autofocus value="{{old('alterphonenumber')}}">
                                    @if ($errors->has('alterphonenumber'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('alterphonenumber')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="email" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required autofocus value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('email')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6">
                                    <label for="dob" class="control-label">Date of Birth</label>
                                    <input id="dob" type="date" class="form-control" name="dob" required autofocus>
                                    @if ($errors->has('dob'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('dob')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        



                        <div class="form-group required">
                            <label for="address1" class="control-label">Address</label>
                            <input id="address1" type="text" class="form-control" name="address1" required autofocus value="{{old('address1')}}">
                            @if ($errors->has('address1'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('address1')}}</strong>
                            </span>
                            @endif 
                        </div>

                       



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="country" class="control-label">Country</label>
                                    <select id="country" name="country" class="form-control select2-single select2-hidden-accessible">
                                        <option></option>
                                        @foreach($countries as $key => $country)
                                            <option value="{{$country['id']}}"> {{$country['name']}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('country')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="state" class="control-label">State</label>
                                    <select id="state" name="state" class="form-control select2-single select2-hidden-accessible" >
                                    </select>
                                    @if ($errors->has('state'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('state')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="city" class="control-label">City</label>
                                    <select id="city" name="city" class="form-control select2-single select2-hidden-accessible">
                                        
                                    </select>
                                    @if ($errors->has('city'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('city')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="zipcode" class="control-label">Zipcode</label>
                                    <input id="zipcode" type="number" class="form-control" name="zipcode" required autofocus value="{{old('zipcode')}}">
                                    @if ($errors->has('zipcode'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('zipcode')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>


                        
                                

                        @if(!empty($tombstone))
                        <div class="col-md-8 required">

                            <input type="hidden" value="{{ $tombstone->id }}" name="projectId" >
                            <input type="hidden" value="project" name="applierType" id="applierType">

                        </div>
                        @else
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 required">
                                    <label for="file" class="control-label">Which technology would you like to apply for member?</label>

                                    <input type="hidden" value="general" name="applierType" id="applierType">

                                    <select id="projectId" name="projectId" class="form-control" required>
                                        <option value="" disabled selected>- Select a technology -</option>
                                        @foreach($projects as $key => $project) 
                                        <option value="{{$project['id']}}"> {{$project['name']}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('projectId'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('projectId')}}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="col-md-4"></div>

                            </div>
                        </div>
                        @endif


                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 required">
                                    <label for="currentUniversity" class="control-label">College / University / Vocational Training School</label>
                                    <input id="currentUniversity" type="text" class="form-control" name="currentUniversity" required autofocus value="{{old('currentUniversity')}}">
                                    @if ($errors->has('currentUniversity'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('currentUniversity')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="major" class="control-label">Major</label>
                                    <input id="major" type="text" class="form-control" name="major" required autofocus value="{{old('major')}}">
                                    @if ($errors->has('major'))
                                    <span class="help-block alert-danger" >
                                        <strong>{{ $errors->first('major')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">

                                    <label for="currentGPA" class="control-label">Current GPA</label>
                                    <input id="currentGPA" type="text" class="form-control" name="currentGPA" required autofocus value="{{old('currentGPA')}}">
                                    @if ($errors->has('currentGPA'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('currentGPA')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <!-- <div class="form-group">
                            <div class="row">

                                <div class="col-md-6 required">
                                    <label for="appropriateAmount" class="control-label">Are you Attending Medical School?</label><br>

                                    <label for="attendmedischool">
                                        <input type="radio" name="attendmedischool" id="attendmedischool" value="yes" {{ old("attendmedischool") == "yes" ? 'checked' : '' }}>Yes
                                    </label>
                                    <label for="attendmedischool">
                                        <input type="radio" name="attendmedischool" id="attendmedischool" value="no" {{ old("attendmedischool") == "no" ? 'checked' : '' }}>No
                                    </label>
                                    @if ($errors->has('attendmedischool'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('attendmedischool')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="graduationDate" class="control-label">Expected Graduation Date from medical school</label>
                                    <input id="graduationDate" type="date" class="form-control" name="graduationDate" required autofocus>
                                    @if ($errors->has('graduationDate'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('graduationDate')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6 required">
                                    <label for="file" class="control-label">Upload Resume</label>
                                    <input type="file" id="resume" name="resume" class="form-control" required value="{{old('resume')}}" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                    @if ($errors->has('resume'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('resume')}}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6 required">
                                    <label for="citizenship" class="control-label">Are you an US Citizen?</label><br>
                                    <label for="citizenship" >
                                        <input type="radio" name="citizenship" id="citizenship" value="yes" {{ old("citizenship") == "yes" ? 'checked' : '' }}>Yes
                                    </label>
                                    <label for="citizenship">
                                        <input type="radio" name="citizenship" id="citizenship" value="no" {{ old("citizenship") == "no" ? 'checked' : '' }}>No
                                    </label>
                                    @if ($errors->has('citizenship'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('citizenship')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="file" class="control-label">Are you interested to apply for team leader?</label>

                                    <label for="interestedtl">
                                        <input type="radio" name="interestedtl" id="interestedtl" value="yes" {{ old("interestedtl") == "yes" ? 'checked' : '' }}>Yes
                                    </label>
                                    <label for="interestedtl">
                                        <input type="radio" name="interestedtl" id="interestedtl" value="no" {{ old("interestedtl") == "no" ? 'checked' : '' }}>No
                                    </label>
                                    
                                    @if ($errors->has('interestedtl'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('interestedtl')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>       
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
   
    $( "#country" ).select2({
        theme: "bootstrap",
        placeholder: "Select a Country",
        width: null,
        height:null,
        containerCssClass: ':all:'
    });

    $( "#state" ).select2({
        theme: "bootstrap",
        placeholder: "Select a State",
        width: null,
        height:null,
        containerCssClass: ':all:'
    });

    $( "#city" ).select2({
        theme: "bootstrap",
        placeholder: "Select a City",
        width: null,
        height:null,
        containerCssClass: ':all:'
    });

    $( "#projectId" ).select2({
        theme: "bootstrap",
        placeholder: "Select a technology",
        width: null,
        height:null,
        containerCssClass: ':all:'
    });


    

    //getting states on select country
    $('#country').change(function(){
        var countryID = $(this).val();    
        if(countryID){
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
                    if(result){
                        var record = jQuery.parseJSON(result);
                        $("#state").empty();
                        $("#state").append('<option></option>');
                        $.each(record,function(key,value){
                            $("#state").append('<option value="'+value['id']+'">'+value['name']+'</option>');
                        });
                    }else{
                        $("#state").empty();
                    }
                }
            });
        }else{
            $("#state").empty();
            $("#city").empty();
        }      
    });


    //getting cities on select state
    $( "#state" ).on('change',function(){
        var stateID = $(this).val();    
        if(stateID){
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
                    if(result){
                        var record = jQuery.parseJSON(result);
                        $("#city").empty();
                        $("#city").append('<option></option>');
                        $.each(record,function(key,value){
                            $("#city").append('<option value="'+value['id']+'">'+value['name']+'</option>');
                        });
                    }else{
                        $("#city").empty();
                    }
                }
            });
        }else{
            $("#city").empty();
        }
    });

});
</script>
@endsection





     