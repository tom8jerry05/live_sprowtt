@extends('layouts.backend')

@section('content')

<style type="text/css">
    .tooltip-head {
        color: #fff;
        background: #000;
        padding: 10px 10px 5px;
        border-radius: 4px 4px 0 0;
        text-align: center;
        margin-bottom: -2px; /* Hide default tooltip rounded corner from top */
        width: 450px;
    }

    .tooltip-head .glyphicon {
        font-size: 22px;
        vertical-align: bottom;

    }

    .tooltip-head h3 {
        margin: 0;
        font-size: 18px;
    }

    .tooltip-inner {
        min-width: 450px !important;
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
<section class="content" style="min-height: 950px;">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Create Tombstone</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif

                    </div>


                    <form class="TombstoneForm" method="POST" action="{{route('tombstone.store')}}"
                          enctype="multipart/form-data" id="Tombstone-form">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                       required value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Team Name</label>
                                <p id="teamNameStatus" class="text-red hide">Max char length are 12..!</p>
                                <input type="text" class="form-control" id="team_name" name="team_name"
                                       placeholder="Enter Team Name" required maxlength="12"
                                       value="{{ old('team_name') }}">

                                @if ($errors->has('team_name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('team_name')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label>Technology Video Option</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="video_option" class="optionsRadios" value="none"
                                               checked="">
                                        None
                                    </label>

                                    <label>
                                        <input type="radio" name="video_option" class="optionsRadios" value="upload">
                                        Upload
                                    </label>

                                    <label>
                                        <input type="radio" name="video_option" class="optionsRadios" value="link">
                                        Link
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" id="videoLink" style="display: none;">
                            <div class="form-group">
                                <label>Technology Video Link</label>
                                <input type="url" class="form-control" id="video_link" name="video_link"
                                       placeholder="Enter Technology Video Link">
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6" id="videoFile" style="display: none;">
                            <div class="form-group">
                                <label>Technology Video Upload</label>

                                <input type="file" class="form-control" id="video_link" name="video_link"
                                       accept="video/mp4,video/x-m4v,video/*" size="5MB">
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
                                        <input type="radio" name="pres_video_option" class="presOptionsRadios"
                                               value="none" checked="">
                                        None
                                    </label>
                                    <label>
                                        <input type="radio" name="pres_video_option" class="presOptionsRadios"
                                               value="upload">
                                        Upload
                                    </label>

                                    <label>
                                        <input type="radio" name="pres_video_option" class="presOptionsRadios"
                                               value="link">
                                        Link
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" id="presVideoLink" style="display: none;">
                            <div class="form-group">
                                <label>Presentation Video Link</label>
                                <input type="url" class="form-control" id="pres_video_link" name="pres_video_link"
                                       placeholder="Enter Presentation Video Link">
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6" id="presVideoFile" style="display: none;">
                            <div class="form-group">
                                <label>Presentation Video Upload</label>

                                <input type="file" class="form-control" id="pres_video_link" name="pres_video_link"
                                       accept="video/mp4,video/x-m4v,video/*" size="5MB">
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
                                <input type="text" class="form-control" id="inven_number" name="inven_number"
                                       placeholder="Enter Case number" required value="{{ old('inven_number') }}" >
                                @if ($errors->has('inven_number'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('inven_number')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Agency</label>
                                <select class="form-control search-slt" name="agency" id="agency" required value="{{ old('agency') }}">
                                    <option value="" disabled selected>Select Agency</option>
                                    <option value="nasa">NASA</option>
                                    <option value="nih">NIH</option>
                                    <option value="dod">DOD</option>
                                    <option value="epa">EPA</option>
                                </select>

                                @if ($errors->has('agency'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('agency')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Image Upload</label>

                                <input type="file" class="form-control" id="image_link" name="image_link"
                                       accept="image/*" required value="{{ old('image_link') }}">
                                @if ($errors->has('image_link'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('image_link')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position" class="control-label">Chart Position</label><br>
                                <select id="position" name="position" class="form-control select2"
                                        data-placeholder="Select a position" style="width: 100%;" required
                                        value="{{ old('position') }}">
                                    <option></option>
                                    @foreach ($position as $key => $value)
                                    @if (old('position') == $key)
                                    <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                    <option value="{{ $key }}">{{ $value }}</option>
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

                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="button" id="positionToolTip" class="btn btn-info btn-xs cha-info-btn"
                                        title="<img src='{{ asset('backend/dist/img/CHART.jpg') }}' width='400' height='300'>">
                                    Position Info
                                </button>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="project_status" class="control-label">Project Status</label><br>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="project_status_option" class="proStatusRadio"
                                               value="0" checked="">
                                        Opened
                                    </label>
                                    <label>
                                        <input type="radio" name="project_status_option" class="proStatusRadio"
                                               value="1">
                                        Closed
                                    </label>
                                </div>
                            </div>
                        </div>


                        <!--placePosition-->


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <p id="descStatus" class="text-red hide">Maximum characters are 500..!</p>
                                <textarea rows="5" class="form-control" id="description" name="description"
                                          placeholder="Enter description of Project" required>{{ old('description') }}</textarea>
                                <div id="descharNum"></div>
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Summaries</label>
                                <p id="roleStatus" class="text-red hide">Maximum characters are 2000..!</p>
                                <textarea rows="10" class="form-control" id="summary" name="summary"
                                          placeholder="Enter Summary of Project" required>{{ old('summary') }}</textarea>
                                <div id="charNum"></div>
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Summary PDF</label>

                                <input type="file" class="form-control" id="pdf_link" name="pdf_link"
                                       accept="application/pdf" required value="{{ old('pdf_link') }}">
                                @if ($errors->has('name'))
                                <span class="help-block alert-danger">
									<strong>{{ $errors->first('name')}}</strong>
								</span>
                                @endif
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

    $(document).ready(function () {
        $("#position").select2();

        $("#place_position").select2();

        $("#positionToolTip").tooltip({
            placement: 'top',
            template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><i class="fa fa-info-circle"></span> Position Info</h3></div><div class="tooltip-inner" style="width:1250px;!important"></div></div>',
            html: true,
        });


        /*$("#place_position").on('change', function () {
            var place_position = $(this).val();
            var url = '{{ route("tombstone.pagepositcheck") }}';
            if (place_position != '0') {
                $('#overlay').attr('hidden', false);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        place_position: place_position
                    },
                    success: function (result) {
                        $('#overlay').attr('hidden', true);
                        var record = jQuery.parseJSON(result);
                        if (record['status'] == '1') {
                            $('#place_position').val('');
                            $('#place_position').select2();
                            //$('#place_position').trigger('change');
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: record['data'],
                            });
                        }
                    }
                });
            }
        });*/
        /*$('[name=video_option]').on('change',function(){
            var optVal = $(this).val()
            if(optVal == 'upload'){
                $('#videoFile #video_link').prop('required',true);
                $('#videoLink #video_link').prop('required',false);
            }else if(optVal == 'link'){
                $('#videoLink #video_link').prop('required',true);
                $('#videoFile #video_link').prop('required',false);
            }
        });*/
        /*$('[name=pres_video_option]').on('change',function(){
            var optVal = $(this).val()
            if(optVal == 'upload'){
                $('#presVideoFile #pres_video_link').prop('required',true);
                $('#presVideoLink #pres_video_link').prop('required',false);
            }else if(optVal == 'link'){
                $('#presVideoLink #pres_video_link').prop('required',true);
                $('#presVideoFile #pres_video_link').prop('required',false);
            }
        });*/

        $('.optionsRadios').on('click', function () {
            optVal = $(this).val();
            if (optVal == 'none') {
                $('#videoLink').hide();
                $('#videoFile').hide();
            } else if (optVal == 'upload') {
                $('#videoFile').show();
                $('#videoLink').hide();
            } else if (optVal == 'link') {
                $('#videoLink').show();
                $('#videoFile').hide();
            }
        })


        $('.presOptionsRadios').on('click', function () {
            optVal = $(this).val();
            if (optVal == 'none') {
                $('#presVideoLink').hide();
                $('#presVideoFile').hide();
            } else if (optVal == 'upload') {
                $('#presVideoFile').show();
                $('#presVideoLink').hide();
            } else if (optVal == 'link') {
                $('#presVideoLink').show();
                $('#presVideoFile').hide();
            }
        });


        $('#team_name').on('keyup', function () {
            var val = $(this).val();
            var len = val.length;
            if (len >= 12) {
                $('#teamNameStatus').removeClass('hide');
                setInterval(blink_text, 1000);
            } else {
                $('#tncharNum').text('Character :' + (len));
            }

            if (len < 12) {
                $('#teamNameStatus').addClass('hide');
            }
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
        });*/
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

    /*function blink_text_desc(){
        $('#descStatus').fadeOut(500);
        $('#descStatus').fadeIn(500);
    }*/

    function blink_text() {
        $('#roleStatus').fadeOut(500);
        $('#roleStatus').fadeIn(500);
    }

</script>
@endsection