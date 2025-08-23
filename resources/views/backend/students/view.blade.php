@extends('layouts.backend')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Students

</h1>
<ol class="breadcrumb">
    <li><a href="{{route('Home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Students</li>
</ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-lg-8 col-xs-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Students Details</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Name</strong>
                                                    <p class="m-b-xs">
                                                        {{ $studentdetails->firstname.' '.$studentdetails->lastname }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Primary Phone No</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->primaryphonenumber }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Alternate Phone No</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->alterphonenumber }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Email</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>DOB</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->dob }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Address Line1</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->address1 }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Address Line2</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->address2 }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>
                                                    Country</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->country }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>
                                                    State</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->state }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>
                                                    City</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->city }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>
                                                    Zipcode</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->zipcode }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Referral Source</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->referralSource }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Sponsor Code</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->sponsorCode }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Citizenship</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->citizenship }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Current University</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->currentUniversity }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Major</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->major }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Current GPA</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->currentGPA }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Expected Graduation Date</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->graduationDate }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>No of Colleges</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->noOfColleges }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Medical School Start</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->medicalSchStart }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>MCAT</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->MCAT }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong>Score</strong>
                                                    <p class="m-b-xs">{{ $studentdetails->score }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div class="chat-activity-list">
                                            <div class="chat-element ">
                                                <div class="media-body ">
                                                    <strong >Role</strong>
                                                    <p class="m-b-xs" id='role-data'>
                                                        @if($studentdetails->role=='0') Member 
                                                        @elseif($studentdetails->role=='1')
                                                        Team Leader
                                                        @elseif($studentdetails->role=='2')
                                                        Lead Researcher
                                                        @elseif($studentdetails->role=='3')
                                                        Mentor
                                                        @elseif($studentdetails->role=='4')
                                                        Vice President
                                                        @elseif($studentdetails->role=='5')
                                                        President
                                                        @elseif($studentdetails->role=='6')
                                                        Chairman
                                                        @endif
                                            
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-4">
            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Students Roles</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="newtech-form" action="" method="POST">
                                {{ csrf_field() }}

                                <p id="roleStatus" class="text-green hide" >Student role updated successfully..!</p>

                                <input type="radio" name="role" id="role" value="0" @if($studentdetails->role=='0') checked @endif >
                                <label for="role">Member</label><br>

                                <input type="radio" name="role" id="role" value="1" 
                                @if($studentdetails->role=='1') checked @endif>
                                <label for="role">Team Leader</label><br>
    
                                <input type="radio" name="role" id="role" value="2" @if($studentdetails->role=='2') checked @endif>
                                <label for="role">Lead Researcher</label><br>

                                <input type="radio" name="role" id="role" value="3" @if($studentdetails->role=='3') checked @endif>
                                <label for="role">Mentor</label><br>
                                
                                <input type="radio" name="role" id="role" value="4" @if($studentdetails->role=='4') checked @endif>
                                <label for="role">Vice President</label><br>

                                <input type="radio" name="role" id="role" value="5" @if($studentdetails->role=='5') checked @endif>
                                <label for="role">President</label><br>

                                <input type="radio" name="role" id="role" value="6" @if($studentdetails->role=='6') checked @endif>
                                <label for="role">Chairman</label><br>
                            </form>

                            
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
    $(document).ready(function() {

        $("input[name='role']").on('click',function(){
            var role_data = $("input[name='role']:checked").val();
            var id        = "{{ $studentdetails->id }}";
            
            $('#overlay').attr('hidden',false);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route("students.roleupdate") }}",
                type: "POST",              
                data: {
                    id  : id,
                    role: role_data,
                },
                success: function(result){

                    $('#overlay').attr('hidden',true);
                    var record = jQuery.parseJSON(result);
                    if(record['status'] == 1){
                        $('#roleStatus').removeClass('hide');
                        setInterval(blink_text, 1000);
                        $('#role-data').text(record['value']);
                    }else if( record['status'] == 0){
                        alert('Data updated failed..!');
                    }
                }
            });

        });     
    });

    function blink_text(){
        $('#roleStatus').fadeOut(500);
        $('#roleStatus').fadeIn(500);
    }

</script>
@endsection