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

<section class="fr-tech-apply-sec" >
    <div class="container-fluid row">
        
        <div class="col-sm-12 col-lg-12">
            <div class="panel panel-default tech-apply-pnl-def" >
                <div class="panel-heading">
                        New Technology Application
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

                    <form id="newtech-form" action="{{ route('TechForm') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group required">
                            <label for="name" class="control-label">Name</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control " name="firstname" 
                                    title="Enter your firstname" placeholder="First" required autofocus value="{{old('firstname')}}">
                                </div>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" 
                                    title="Enter your lastname" placeholder="Last" required autofocus value="{{old('lastname')}}">
                                </div>
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('name')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email" class="control-label">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required autofocus value="{{old('lastname')}}">
                                    @if ($errors->has('name'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('name')}}</strong>
                                    </span>
                                    @endif 
                                </div>
                                <div class="col-md-6">
                                    <label for="phonenumber" class="control-label">Phone Number</label>
                                    <input id="phonenumber" type="number" class="form-control" name="phonenumber" required autofocus value="{{old('phonenumber')}}">
                                    @if ($errors->has('phonenumber'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('phonenumber')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        


                        <div class="form-group required">
                            <label for="residentEurope" class="control-label">Which country are you a legal citizen?</label>

                            <select id="residentEurope" name="residentEurope" class="form-control select2-single select2-hidden-accessible">
                                <option></option>
                                @foreach($countries as $key => $country)
                                    <option value="{{$country['id']}}" {{ old("residentEurope") == $country['id'] ? 'selected' : '' }}> {{$country['name']}}</option>
                                @endforeach
                            </select>
                            
                            @if ($errors->has('residentEurope'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('residentEurope')}}</strong>
                            </span>
                            @endif
                        </div>
                    

                        <div class="form-group required">
                            <label for="affilatedStatus" class="control-label">Which of the following are you affilated with?</label>
                            <select name="affilatedStatus" id="affilatedStatus" class="form-control" required>
                                <option value="" selected>--Select one --</option>
                                <option value="college" {{ old("affilatedStatus") == "college" ? 'selected' : '' }}>College</option>
                                <option value="university" {{ old("affilatedStatus") == "university" ? 'selected' : '' }}>University</option>
                                <option value="incubator" {{ old("affilatedStatus") == "incubator" ? 'selected' : '' }}>Incubator</option>
                            </select>
                            
                            @if ($errors->has('affilatedStatus'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('affilatedStatus')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="innovationTitle" class="control-label">Title of your innovation</label>
                            <textarea id="innovationTitle" class="form-control" name="innovationTitle" placeholder="What is the title of your innovation" required autofocus value="{{old('innovationTitle')}}"></textarea>
                            @if ($errors->has('innovationTitle'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('innovationTitle')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="innovationDescribe" class="control-label">Description of your innovation</label>
                            <textarea id="innovationDescribe" class="form-control" name="innovationDescribe" placeholder="Please describe your innovation with enough detail so we can better understand the basic concept of your technology" required autofocus value="{{old('innovationDescribe')}}"></textarea>
                            @if ($errors->has('innovationDescribe'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('innovationDescribe')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="clinicalBenefits" class="control-label">What clinical benefits might result from this technology?</label>
                            <textarea id="clinicalBenefits" class="form-control" name="clinicalBenefits" placeholder="What clinical benefits might result from this technology?" required autofocus value="{{old('phonenumber')}}"></textarea>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="category" class="control-label">What problem does your product solve in the market?</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="" selected>--Select one --</option>
                                <option value="Category A">Category A</option>
                                <option value="Category B">Category B</option>
                                <option value="Category C">Category C</option>
                                <option value="Category D">Category D</option>
                            </select>
                            
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <label for="marketOffer" class="control-label">Does your product have a competing product in the market?</label>
                            <select name="marketOffer" id="marketOffer" class="form-control" required>
                                <option value="" selected>--Select one --</option>
                                <option value="Market A">Market A</option>
                                <option value="Market B">Market B</option>
                                <option value="Market C">Market C</option>
                                <option value="Market D">Market D</option>
                            </select>
                            
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <label for="developmentStatus" class="control-label">What is the current status of development? Select all that apply.</label><br>

                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="1" >
                            <label for="developmentStatus">Concept</label><br>
    
                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="2" >
                            <label for="developmentStatus">Research</label><br>
                            
                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="3" >
                            <label for="developmentStatus">Engineering Drawings</label><br>

                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="4" >
                            <label for="developmentStatus">Working prototype</label><br>

                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="5" >
                            <label for="developmentStatus">Relevant testing completed</label><br>

                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="6" >
                            <label for="developmentStatus">Regulatory clearance has been received</label><br>

                            <input type="checkbox" name="developmentStatus" id="developmentStatus" value="7" >
                            <label for="developmentStatus">Commercialized Device</label>

                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group ">
                            <label for="regulatoryClearance" class="control-label">If regulatory clearance has been received, which country?</label>
                            <textarea id="regulatoryClearance" class="form-control" name="regulatoryClearance" placeholder="Which country/countries do you have clearance in?" autofocus value="{{old('regulatoryClearance')}}"></textarea>
                            @if ($errors->has('regulatoryClearance'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('regulatoryClearance')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <label for="intellectualProperty" class="control-label">Have you applied for a patent or trademark for this product?</label>
                            <select name="intellectualProperty" id="intellectualProperty" class="form-control" required>
                                <option value="" selected>--Select one --</option>
                                <option value="Status A">Status A</option>
                                <option value="Status B">Status B</option>
                                <option value="Status C">Status C</option>
                                <option value="Status D">Status D</option>
                            </select>
                            
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="disclosedStatus" class="control-label">Have you disclosed this invention publicly(conference, abstract, article, or Other)?</label>
                            <select name="disclosedStatus" id="disclosedStatus" class="form-control">
                                <option value="" selected>--Select one --</option>
                                <option value="Conference">Conference</option>
                                <option value="Abstract">Abstract</option>
                                <option value="Article">Article</option>
                                <option value="Other">Other</option>
                                <option value="None">None</option>
                            </select>
                            
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <label for="businessObjectives" class="control-label">What are your business objectives with this innovation? Select all that apply.</label><br>

                            <input type="checkbox" name="businessObjectives" id="businessObjectives" value="1">
                            <label for="businessObjectives">Co-development</label><br>
    
                            <input type="checkbox" name="businessObjectives" id="businessObjectives" value="2">
                            <label for="businessObjectives">Licensing</label><br>
                            
                            <input type="checkbox" name="businessObjectives" id="businessObjectives" value="3">
                            <label for="businessObjectives">Royalties</label><br>

                            <input type="checkbox" name="businessObjectives" id="businessObjectives" value="4">
                            <label for="businessObjectives">Sale</label><br>

                            <input type="checkbox" name="businessObjectives" id="businessObjectives" value="5">
                            <label for="businessObjectives">Other</label>

                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('businessObjectives')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group ">
                            <label for="additionalInformation" class="control-label">Is there any additional compelling information you would like to share?</label>
                            <textarea id="additionalInformation" class="form-control" name="additionalInformation" placeholder="Is there any additional compelling information you would like to share?" autofocus value="{{old('additionalInformation')}}"></textarea>
                            @if ($errors->has('additionalInformation'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('additionalInformation')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group ">
                            <label for="funding" class="control-label">In an optimal setting,what amount of funding,and resources would it take to commercialize the technology?</label>
                            <textarea id="funding" class="form-control" name="funding" placeholder="In an optimal setting,what amount of funding,and resources would it take to commercialize the technology?" autofocus value="{{old('funding')}}"></textarea>
                            @if ($errors->has('funding'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('funding')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group ">
                            <label for="additionalInformation" class="control-label">Can your inventor(s) spend approximately 1-3 hours/week during the 7-9 week cohort answering technical questions from the enterpreneur team?</label>

                            <input type="radio" name="entrepreneur" id="entrepreneur" value="yes">
                            <label for="entrepreneur">Yes,bring it on!</label><br>
    
                            <input type="radio" name="entrepreneur" id="entrepreneur" value="no">
                            <label for="entrepreneur">Not right now</label><br>

                            <input type="radio" name="entrepreneur" id="entrepreneur" value="other">
                            <label for="entrepreneur">Other</label>
                            
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>



                        <div class="form-group ">
                            <label for="hearAbout" class="control-label">How did you hear about sprowtt?</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="facebook">
                            <label for="hearAbout">Facebook</label><br>
    
                            <input type="radio" name="hearAbout" id="hearAbout" value="twitter">
                            <label for="hearAbout">Twitter</label><br>
                            
                            <input type="radio" name="hearAbout" id="hearAbout" value="linkedIn">
                            <label for="hearAbout">LinkedIn</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="searchengine">
                            <label for="hearAbout">Search Engines</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="friendscolleagues">
                            <label for="hearAbout">Friends/Colleagues</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="other">
                            <label for="hearAbout">Other</label><br>
                            
                            @if ($errors->has('hearAbout'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('hearAbout')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group ">
                            <label for="attachment1" class="control-label">Attachment 1</label>
                            <input type="file" id="attachment1" name="attachment1" class="form-control">
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group ">
                            <label for="attachment2" class="control-label">Attachment 2</label>
                            <input type="file" id="attachment2" name="attachment2" class="form-control">
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <div class="row">
                                <input class="col-md-1" type="checkbox" name="confirmation" id="confirmation" value="1" required>
                                <label for="confirmation" class=" control-label col-md-11">I Understand and acknowledge that all information provided herein is NON-CONFIDENTIAL INFORMATION and no obligation to treat any such information as confidential and/or proprietary.</label>
                            </div>

                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
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
    $( "#residentEurope" ).select2({
        theme: "bootstrap",
        placeholder: "Select a Country",
        width: null,
        height:null,
        containerCssClass: ':all:'
    });

});





    /*$('#newtech-form').on("submit", function(e) {
        e.preventDefault();
        
        
        var file_data1 = $('#attachment1').prop('files')[0];
        var file_data2 = $('#attachment2').prop('files')[0];

        var form_data = new FormData();

        var developmentStatus = [];
            $.each($("input[name='developmentStatus']:checked"), function(){            
                developmentStatus.push($(this).val());
            });

        var businessObjectives = [];
            $.each($("input[name='businessObjectives']:checked"), function(){            
                businessObjectives.push($(this).val());
            });

        form_data.append('attachment1', file_data1);
        form_data.append('attachment2', file_data2);

        form_data.append('firstname', $('#firstname').val());
        form_data.append('lastname', $('#lastname').val());
        form_data.append('email', $('#email').val());
        form_data.append('residentEurope', $('#residentEurope').val());
        form_data.append('affilatedStatus', $('#affilatedStatus').val());
        form_data.append('innovationTitle', $('#innovationTitle').val());
        form_data.append('innovationDescribe', $('#innovationDescribe').val());
        form_data.append('clinicalBenefits', $('#clinicalBenefits').val());
        form_data.append('category', $('#category').val());
        form_data.append('marketOffer', $('#marketOffer').val());
        form_data.append('developmentStatus', developmentStatus);
        form_data.append('regulatoryClearance', $('#regulatoryClearance').val());
        form_data.append('intellectualProperty', $('#intellectualProperty').val());
        form_data.append('disclosedStatus', $('#disclosedStatus').val());
        form_data.append('businessObjectives', businessObjectives);
        form_data.append('additionalInformation', $('#additionalInformation').val());
        form_data.append('confirmation', $('#confirmation').val());
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route("TechForm") }}",
            type: "POST",              
            data:  form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(result){
                console.log(result);
                if(result == 1){
                    alert('File uploaded successfully..!');
                }else if( result == 0){
                    alert('File upload failed..!');
                }

            }
        });
    });*/
</script>
@endsection