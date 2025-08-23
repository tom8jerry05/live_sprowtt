@extends('layouts.frontend')

@section('content')

<section class="sp-ch-text-section">
    <div class="container">
        <div class="sp-ch-text-wrapper">
            <p>The Sprowtt Launch Pad Challenge takes federal lab-to-market efforts to the next level. By fostering entrpenuerail teams to compete against each other in a bi-annual competition that rewards those with  the best business skills and capabilities to run a multi-million dollar company. Twice each year, teams will have the opportunity to test their business acumen against competitors. You will be aligned with a team, or perhaps you have what it takes to lead the mission and act as Team Leader. Through the Launch Pad, you will gain global exposure, connect more quickly to opportunities, and maximize your innovation potentialthrough discovering new technology solutions. In addition, you will collaborate on a global scale to support the growth of startups. Whichever project you choose to participate in, the Launch Pad will support you with our collaborative tools. Our successful and ready-to-go parent company, Sprowtt Inc., helps you to accelerate local and global growth by securing the necessary capital for your project.</p>
        </div>
    </div>
</section>

<section class="fr-judge-apply-sec">
    <div class="container-fluid row">
        <div class="col-sm-12 col-lg-12">
            <div class="panel panel-default judge-apply-pnl-def" >
                <div class="panel-heading">
                    @if(!empty($projects))
                        Apply to be a Sprowtt Launch Pad competition judge
                    @else
                        Apply for {{ucfirst($tombstone->name)}} as judge
                    @endif
                </div>
                <div class="panel-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
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

                    <form method="POST" id="judge-form" action="{{ route('JudgeForm') }}" enctype="multipart/form-data">
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

                        <div class="form-group">
                            <div class="row">


                                @if(!empty($projects))
                                    <div class="col-md-6 required">
                                        <label for="file" class="control-label">Which project would you like to apply for judge?</label>
                                        <!-- <input type="hidden" value="general" name="applierType" id="applierType"> -->
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
                                @else
                                   
                                        <input type="hidden" value="{{ $tombstone->id }}" name="projectId" >
                                        
                                    
                                @endif

                                <div class="col-md-6">
                                    <label for="file" class="control-label">Upload Resume</label>
                                    <input type="file" id="resume" name="resume" class="form-control" required accept=".doc,.docx,.pdf">
                                    @if ($errors->has('resume'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('resume')}}</strong>
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


        $( "#projectId" ).select2({
            theme: "bootstrap",
            placeholder: "Select a Project",
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




