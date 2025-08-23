@extends('layouts.frontend')

@section('content')



<section  class="fr-internship-apply-sec">
    <div class="container-fluid row">
        
        <div class="col-sm-12 col-lg-12">
            <div class="panel panel-default internship-apply-pnl-def">
                <div class="panel-heading">
                    Attend a Sprowtt Launch Pad Live event meet and work directly mentors to successfully raise capital with Angel Investors polish your presentation skills and accelerate your Business on the Launch Pad
                </div>

                <div class="panel-body" style="padding: 10px 20px 10px 20px;border: 1px solid #7ba04f;">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        </div>
                    @endif

                    <form method="POST" id="internship-form" action="{{ route('EventApplierForm') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control " name="firstname" 
                                    title="Enter your firstname" placeholder="First" required autofocus value="{{ old('firstname') }}">
                                </div>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" 
                                    title="Enter your lastname" placeholder="Last" required autofocus value="{{ old('lastname') }}">
                                </div>
                                @if ($errors->has('firstname') || $errors->has('lastname'))
                                <span class="help-block alert-danger">
                                    @if($errors->has('firstname'))
                                        <strong>{{ $errors->first('firstname')}}</strong>
                                    @endif
                                    @if($errors->has('lastname'))
                                        <strong>{{ $errors->first('lastname')}}</strong>
                                    @endif
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="email" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required autofocus value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('email')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="phonenumber" class="control-label">Phone Number</label>
                                    <input id="phonenumber" type="number" class="form-control" name="phonenumber" required autofocus value="{{ old('phonenumber') }}">
                                    @if ($errors->has('phonenumber'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('phonenumber')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 required">
                                    <label for="address" class="control-label">Address</label>
                                    <input id="address" type="text" class="form-control" name="address" required autofocus value="{{ old('address') }}">
                                    @if ($errors->has('address'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('address')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 required">
                                    <label for="country" class="control-label">Country</label>
                                    <select id="country" name="country" class="form-control select2-single select2-hidden-accessible" required>
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
                                <div class="col-md-4 required">
                                    <label for="state" class="control-label">State</label>
                                    <select id="state" name="state" class="form-control select2-single select2-hidden-accessible" required>
                                        
                                    </select>
                                    @if ($errors->has('state'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('state')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                                <div class="col-md-4 required">
                                    <label for="city" class="control-label">City</label>
                                    <select id="city" name="city" class="form-control select2-single select2-hidden-accessible" required>
                                        
                                    </select>
                                    @if ($errors->has('city'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('city')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>
                        </div>

                        <input type="hidden" value="{{ $tombstone->id }}" name="projectId" >

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 required">
                                    <label for="file" class="control-label">How many days event to like to attend?</label> <br>

                                    <label for="interestedEv">
                                        <input type="radio" name="interestedEv" id="interestedEv" value="1" {{ old("interestedEv") == "1" ? 'checked' : '' }}> I am interested in attending a <b>1 day</b> event.
                                    </label>
                                    <label for="interestedEv">
                                        <input type="radio" name="interestedEv" id="interestedEv" value="3" {{ old("interestedEv") == "3" ? 'checked' : '' }}> I am interested in attending a <b>3 days</b> event.
                                    </label>
                                    
                                    @if ($errors->has('interestedEv'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('interestedEv')}}</strong>
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
    });
</script>
@endsection




