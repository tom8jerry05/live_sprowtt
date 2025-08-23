@extends('layouts.frontend')

@section('content')

<section class="sp-ch-text-section">
    <div class="container">
        <div class="sp-ch-text-wrapper">
            <p>The Sprowtt Launch Pad Challenge takes federal lab-to-market efforts to the next level. By fostering entrpenuerail teams to compete against each other in a bi-annual competition that rewards those with  the best business skills and capabilities to run a multi-million dollar company. Twice each year, teams will have the opportunity to test their business acumen against competitors. You will be aligned with a team, or perhaps you have what it takes to lead the mission and act as Team Leader. Through the Launch Pad, you will gain global exposure, connect more quickly to opportunities, and maximize your innovation potentialthrough discovering new technology solutions. In addition, you will collaborate on a global scale to support the growth of startups. Whichever project you choose to participate in, the Launch Pad will support you with our collaborative tools. Our successful and ready-to-go parent company, Sprowtt Inc., helps you to accelerate local and global growth by securing the necessary capital for your project.</p>
        </div>
    </div>
</section>

<section  class="fr-internship-apply-sec">
    <div class="container-fluid row">
        
        <div class="col-sm-12 col-lg-12">
            <div class="panel panel-default internship-apply-pnl-def">
                <div class="panel-heading">
                    Apply for Sponsorship
                </div>

                <div class="panel-body" style="padding: 10px 20px 10px 20px;border: 1px solid #7ba04f;">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        </div>
                    @endif



                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}<br><br>
                        </div>
                    @endif

                    <form method="POST" id="internship-form" action="{{ route('SponsorshipForm') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="companyname" class="control-label">Company Name</label>
                                    <input id="companyname" type="text" class="form-control " name="companyname"
                                    title="Enter your Company Name" placeholder="Company Name" required autofocus value="{{ old('companyname') }}">
                                    @if($errors->has('companyname'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('companyname')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="contactperson" class="control-label">Contact Person</label>
                                    <input id="contactperson" type="text" class="form-control " name="contactperson"
                                    title="Enter the Contact Person Name" placeholder="Contact Person" required autofocus value="{{ old('contactperson') }}">
                                    @if($errors->has('contactperson'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('contactperson')}}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6 required">
                                    <label for="phonenumber" class="control-label">Contact Number</label>
                                    <input id="phonenumber" type="number" class="form-control" name="phonenumber" title="Enter the Contact Person Number" placeholder="Contact Number" required autofocus value="{{ old('phonenumber') }}">
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
                                <div class="col-md-6 required">
                                    <label for="email" class="control-label">Contact Email</label>
                                    <input id="email" type="email" class="form-control" name="email" title="Enter the Contact Person Email" placeholder="Contact Email" required autofocus value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('email')}}</strong>
                                    </span>
                                    @endif 
                                </div>

                                <div class="col-md-6 required">
                                    <label for="file" class="control-label">Which technology would you like to Sponsor?</label>
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




