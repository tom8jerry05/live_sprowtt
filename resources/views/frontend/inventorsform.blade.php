@extends('layouts.frontend')

@section('content')
<section style="background-color: #f7f7f7;">
    <div class="container-fluid row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-default" style="width:80%;margin: auto;padding: 25px 0px 0px 0px;">
                <div class="panel-heading" style="padding: 10px 10px 10px 10px;border: 1px solid #7ba04f;background: #7ba04f;color: white;">
                        Inventors Form page
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

                    <form id="inventor-form" action="">
                        {{ csrf_field() }}
                        <div class="form-group required">
                            <label for="name" class="control-label">Name</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control " name="firstname" 
                                    title="Enter your firstname" placeholder="First" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control " name="lastname" 
                                    title="Enter your lastname" placeholder="Last" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
                                    <strong>{{ $errors->first('name')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label for="email" class="control-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif 
                        </div>
                        
                        <div class="form-group required">
                            <label for="phonenumber" class="control-label">Phone Number</label>
                            <input id="phonenumber" type="number" class="form-control" name="phonenumber" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="linkedin" class="control-label">LinkedIn URL</label>
                            <input id="linkedin" type="text" class="form-control" name="linkedin" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="aboutLab" class="control-label">Please tell us about your lab</label>
                            <textarea id="aboutLab" class="form-control" name="aboutLab" required autofocus></textarea>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="specificInvitation" class="control-label">Do you have specific inventions,inventors or research projects you'd like to nominate for sprowtt?if so,please tell us about it.</label>
                            <textarea id="specificInvitation" class="form-control" name="specificInvitation"  autofocus></textarea>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="trl" class="control-label">What is the TRL of the invention?</label>
                            <textarea id="trl" class="form-control" name="trl" rows="1" autofocus></textarea>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="appropriateAmount" class="control-label">In an optimal setting, with an appropriate amount of funding, people and resources,approximately how long would it take to commercialize the invention and how much would it cost?</label>
                            <textarea id="appropriateAmount" class="form-control" name="appropriateAmount" rows="1" autofocus></textarea>
                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <label for="appropriateAmount" class="control-label">Can your inventor(s) spend approximately 1-3 hours/week during the 7-9 week cohort answering technical questions from the entrepreneur team?</label>

                            <input type="radio" name="entrepreneur" id="entrepreneur" value="1">
                            <label for="entrepreneur">Yes,bring it on!</label><br>
    
                            <input type="radio" name="entrepreneur" id="entrepreneur" value="2">
                            <label for="entrepreneur">Not right now</label><br>
                            
                            <input type="radio" name="entrepreneur" id="entrepreneur" value="3">
                            <label for="entrepreneur">Other</label>

                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group required">
                            <label for="dates" class="control-label">Can your inventor attend the opening and closing session in washington D.C.? Dates to be confirmed but will likely be in September and November 2019,respectively.</label>

                            <input type="radio" name="dates" id="dates" value="1">
                            <label for="dates">As of now,nothing is preventing them from attending, but we'll confirm once dates are finalized</label><br>
    
                            <input type="radio" name="dates" id="dates" value="2">
                            <label for="dates">They won't be able to attend</label><br>
                            
                            <input type="radio" name="dates" id="dates" value="3">
                            <label for="dates">Other</label>

                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group required">
                            <label for="hearAbout" class="control-label">How did you hear about sprowtt?</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="1">
                            <label for="hearAbout">Facebook</label><br>
    
                            <input type="radio" name="hearAbout" id="hearAbout" value="2">
                            <label for="hearAbout">Twitter</label><br>
                            
                            <input type="radio" name="hearAbout" id="hearAbout" value="3">
                            <label for="hearAbout">LinkedIn</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="3">
                            <label for="hearAbout">Search Engines</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="3">
                            <label for="hearAbout">Friends/Colleagues</label><br>

                            <input type="radio" name="hearAbout" id="hearAbout" value="3">
                            <label for="hearAbout">Other</label><br>

                            @if ($errors->has('name'))
                            <span class="help-block alert-danger">
                                <strong>{{ $errors->first('name')}}</strong>
                            </span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="suggestion" class="control-label">If you have any suggestion, we'd love to hear them!</label>
                            <textarea id="suggestion" class="form-control" name="suggestion"  autofocus></textarea>
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
        <div class="col-md-1"></div>
    </div>
</section>
@endsection


@section('script')
<script type="text/javascript">
    $('#inventor-form').on("submit", function(e) {
        e.preventDefault();

        var form_data = $(this).serializeArray();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route("InventorsForm") }}",
            type: "POST",              
            data:  form_data,
            
            success: function(result){
                console.log(result);
                if(result == 1){
                    alert('File uploaded successfully..!');
                }else if( result == 0){
                    alert('File upload failed..!');
                }
            }

        });
    });
</script>
@endsection