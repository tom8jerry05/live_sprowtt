@extends('layouts.frontend')

@section('content')
<section style="background-color: #f7f7f7;">
    <div class="container-fluid row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-default" style="width:80%;margin: auto;padding: 25px 0px 0px 0px;">
                <div class="panel-heading" style="padding: 10px 10px 10px 10px;border: 1px solid #7ba04f;background: #7ba04f;color: white;">
                        Student Form page
                </div>

                <div class="panel-body" style="padding: 10px 20px 10px 20px;border: 1px solid #7ba04f;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        </div>
                    @endif

                    <form method="POST" id="student-form" action="">
                        {{ csrf_field() }}
                        <div class="form-group required">
                            <label for="name" class="control-label">Name</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control " name="firstname" 
                                    title="Enter your firstname" placeholder="First" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" 
                                    title="Enter your lastname" placeholder="Last" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('name')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="phonenumber" class="control-label">Primary Phone Number</label>
                                    <input id="primaryphonenumber" type="number" class="form-control" name="primaryphonenumber" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="phonenumber" class="control-label">Alter Phone Number</label>
                                    <input id="alterphonenumber" type="number" class="form-control" name="alterphonenumber" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="email" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6">
                                    <label for="dob" class="control-label">Date of Birth</label>
                                    <input id="dob" type="date" class="form-control" name="dob" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        



                        <div class="form-group required">
                            <label for="address1" class="control-label">Address Line 1</label>
                            <input id="address1" type="text" class="form-control" name="address1" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif 
                        </div>

                        <div class="form-group required">
                            <label for="address2" class="control-label">Address Line 2</label>
                            <input id="address2" type="text" class="form-control" name="address2" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
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
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="state" class="control-label">State</label>
                                    <select id="state" name="state" class="form-control select2-single select2-hidden-accessible">
                                        
                                    </select>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
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
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="zipcode" class="control-label">Zipcode</label>
                                    <input id="zipcode" type="number" class="form-control" name="zipcode" required autofocus>
                                   
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="referralSource" class="control-label">Referral Source</label>
                                    <input id="referralSource" type="text" class="form-control" name="referralSource" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6">
                                    <label for="sponsorCode" class="control-label">Sponsor Code</label>
                                    <input id="sponsorCode" type="text" class="form-control" name="sponsorCode" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="citizenship" class="control-label">Citizenship</label>
                                    <input id="citizenship" type="text" class="form-control" name="citizenship" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 required">
                                    <label for="currentUniversity" class="control-label">Current University</label>
                                    <input id="currentUniversity" type="text" class="form-control" name="currentUniversity" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="major" class="control-label">Major</label>
                                    <input id="major" type="text" class="form-control" name="major" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">

                                    <label for="currentGPA" class="control-label">Current GPA</label>
                                    <input id="currentGPA" type="text" class="form-control" name="currentGPA" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="graduationDate" class="control-label">Expected Graduation Date</label>
                                    <input id="graduationDate" type="date" class="form-control" name="graduationDate" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="noOfColleges" class="control-label">Number of College Course Completed</label>
                                    <input id="noOfColleges" type="number" class="form-control" name="noOfColleges" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 required">
                                    <label for="medicalSchStart" class="control-label">When do you plan to start the medical school application process?</label>
                                    <input id="medicalSchStart" type="date" class="form-control" name="medicalSchStart" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="MCAT" class="control-label">Have you taken the MCAT?</label>
                                    <input id="MCAT" type="text" class="form-control" name="MCAT" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="score" class="control-label">If so,score</label>
                                    <input id="score" type="number" class="form-control" name="score" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
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
                url: "{{ route("StudentsGetState") }}",
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
                url: "{{ route("StudentsGetCity") }}",
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


    $('#student-form').on("submit", function(e) {
        e.preventDefault();
        var form_data = $(this).serializeArray();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route("StudentsForm") }}",
            type: "POST",              
            data:  form_data,
            success: function(result){
                console.log(result);
                if(result == 1){
                    alert('Form Saved successfully..!');
                }else if( result == 0){
                    alert('Form Not Saved..!');
                }
            }
        });
    });
});
</script>
@endsection




