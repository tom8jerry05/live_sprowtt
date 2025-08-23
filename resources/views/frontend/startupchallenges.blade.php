@extends('layouts.frontend')
<style type="text/css">
    .tooltip-head{
        color: #fff;
        background: #000;
        padding: 10px 10px 5px;
        border-radius: 4px 4px 0 0;
        text-align: center;
        margin-bottom: -2px; /* Hide default tooltip rounded corner from top */
        width: 250px;
    }
    .tooltip-head .glyphicon{
        font-size: 22px;
        vertical-align: bottom;
    }
    .tooltip-head h3{
        margin: 0;
        font-size: 18px;
    }
    .tooltip-inner{
        min-width: 250px !important;
    }
</style>
@section('content')
<section class="col-md-12 sp-ch-banner-section">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Challenges </span>
            <h4>"The thing I'll remember most about the flight is that it was fun. In fact, I'm sure it was the most fun that I'll ever have in my lite."</h4>
            <p>Sally Ride Astronaut</p>
        </div>
    </div>
</section>
<section class="sp-ch-text-section">
    <div class="container">
        <div class="sp-ch-text-wrapper">
            <p>The Sprowtt Launch Pad Challenge takes federal lab-to-market efforts to the next level. By fostering entrpenuerail teams to compete against each other in a bi-annual competition that rewards those with  the best business skills and capabilities to run a multi-million dollar company. Twice each year, teams will have the opportunity to test their business acumen against competitors. You will be aligned with a team, or perhaps you have what it takes to lead the mission and act as Team Leader. Through the Launch Pad, you will gain global exposure, connect more quickly to opportunities, and maximize your innovation potentialthrough discovering new technology solutions. In addition, you will collaborate on a global scale to support the growth of startups. Whichever project you choose to participate in, the Launch Pad will support you with our collaborative tools. Our successful and ready-to-go parent company, Sprowtt Inc., helps you to accelerate local and global growth by securing the necessary capital for your project.</p>
            <!--<div class="sp-ch-text-link">
                <a href="{{ route('register') }}" class="btn btn-link white-outline pull-right">Join now</a>
            </div>-->
        </div>
    </div>
</section>
<section class="search-sec">
    <div class="container">
        <form action="{{ route('tombstone.search') }}" method="get" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <input type="text" name="projectName" class="form-control search-slt" placeholder="Project Keyword" value="{{$name}}" required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <select class="form-control search-slt" name="agency" id="exampleFormControlSelect1">
                                <option value="" disabled selected>Agency</option>
                                <option value="nasa" @if ($agency == "nasa") selected  @endif>NASA</option>
                                <option value="nih"  @if ($agency == "nih") selected  @endif>NIH</option>
                                <option value="dod"  @if ($agency == "dod") selected  @endif>DOD</option>
                                <option value="epa"  @if ($agency == "epa") selected  @endif>EPA</option>
                            </select>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            @if ( Request::segment(2) === "project")
                            <button type="submit" class="btn btn-danger wrn-btn" style="width:50%;float: left;">Search</button>
                            <a href="{{ route('StartupChallenges') }}" type="button" class="btn btn-primary wrn-btn" style="width: 50%;float: left;padding-top: 12px;">clear</a>
                            @else
                            <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section  style="float: left;width: 100%;padding: 0;height: auto;padding-top: 40px;">
    <div class="container">
        <div class="gridblck row">
            @if($results->isEmpty())
                <div class="col-md-12 error-blck">
                    <p>No Record Found </p>
                </div> 
            @endif




            @foreach($results as $key => $result)
            <div class="col-lg-4 col-md-6 blck-panel">
                <div class="text-center challengecol">
                    <div class="videoblck">
                        <img src="{{ $result->image_link }}" >
                    </div>
                    <div class="blck-header">
                        <h4> {{ $result->name }}</h4>
                    </div>
                    <div class="blck-body">
                        <p class="show-read-more" data-id='{{$result->id}}' data-status='{{$result->status}}'>{{ substr($result->description, 0, 150) }}  <a href="javascript:void(0);" class="read-more">read more...</a></p>
                    </div>
                    <div class="blck-like">
                    </div>
                    <div class="blck-footer">
                        <a class="btn btn-info btn-left appCheck" data-id='{{$result->id}}' data-status='{{$result->status}}' data-tag="applynow" >Apply Now</a>
                        <a href="{{ route('tombStonedetail',$result->id) }}" class="btn btn-info btn-right">Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <nav>
                <ul class="pagination justify-content-end">
                    {{$results->links('vendor.pagination.bootstrap-4')}}
                </ul>
            </nav>
        </div>
    </div>
</section>
<section class="sp-ch-text-section">
    <div class="container">
        <div class="sp-ch-text-wrapper">
            <p>Welcome to the pad! It's an exciting time to build a team, network with like-minded entrepreneurs , meet potential customers and investors, and develop partnerships. Or even expand your startup into new countries. We are entrepreneurs ourselves and know what it takes to build a company. We know how important correct capital formation is, and Sprowtt Inc. and its resources are standing ready to assist you and your startup team. The launch pad has industry experts ready to support your startup. We know how much a single connection or piece of advice can mean for the future of your company. Join the challenge and test your leadership skills, accelerate to the top of the competition, and observe how quickly you move into the sweet round.</p>
            <div class="sp-ch-text-link">
                <a href="{{ route('register') }}" class="btn btn-link white-outline pull-right">Join now</a>
            </div>
        </div>
    </div>
</section>

<section class="bc-section">
    <div class="container" >
        <div class="bc-inner">
            <div class="bc-header">
                <span class="bc-name"> Sprowtt Launch Pad Challenge</span>
            </div>
            <div class="bc-theader">
                <div class="row no-gutters">
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">First Round </span>
                        <p>Mar 21-22</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Second Round </span>
                        <p>Mar 23-24</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Sweet 16 </span>
                        <p>Mar 28-29</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Elite 8</span>
                        <p>Mar 30-31</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Championship</span>
                        <p>Apr 8</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Elite 8</span>
                        <p>Mar 30-31</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Sweet 16</span>
                        <p>Mar 28-29</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">Second Round </span>
                        <p>Mar 23-24</p>
                    </div>
                    <div class="bc-th-col col-md-1">
                        <span class="bc-th-record">First Round </span>
                        <p>Mar 21-22</p>
                    </div>
                </div>
            </div>
            <div class="bc-tbody">
                <!-- 1 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="1" data-project="@if(isset($appliersRecord['0']['applier_id'])){{ $appliersRecord['0']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['0']['applier_id'])){{ $appliersRecord['0']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['0']['project'])){{ $appliersRecord['0']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['0']['leader'])){{ $appliersRecord['0']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['0']['school'])){{ $appliersRecord['0']['school'] }}@endif">
                            <div id="project1">
                                @if(isset($appliersRecord['0']['project']))
                                {{ $appliersRecord['0']['project'] }}
                                @endif
                            </div>

                            <div id="teamName1">
                                @if(isset($appliersRecord['0']['team_name']))
                                {{ $appliersRecord['0']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($appliersRecord['0']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['0']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="9" data-project="@if(isset($appliersRecord['8']['applier_id'])){{ $appliersRecord['8']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['8']['applier_id'])){{ $appliersRecord['8']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['8']['project'])){{ $appliersRecord['8']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['8']['leader'])){{ $appliersRecord['8']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['8']['school'])){{ $appliersRecord['8']['school'] }}@endif">
                            <div id="project9">
                                @if(isset($appliersRecord['8']['project']))
                                {{ $appliersRecord['8']['project'] }}
                                @endif
                            </div>

                            <div id="teamName9">
                                @if(isset($appliersRecord['8']['team_name']))
                                {{ $appliersRecord['8']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($appliersRecord['8']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['8']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="2" data-project="@if(isset($appliersRecord['1']['applier_id'])){{ $appliersRecord['1']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['1']['applier_id'])){{ $appliersRecord['1']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['1']['project'])){{ $appliersRecord['1']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['1']['leader'])){{ $appliersRecord['1']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['1']['school'])){{ $appliersRecord['1']['school'] }}@endif">
                            <div id="project2">
                                @if(isset($appliersRecord['1']['project']))
                                {{ $appliersRecord['1']['project'] }}
                                @endif
                            </div>

                            <div id="teamName2">
                                @if(isset($appliersRecord['1']['team_name']))
                                {{ $appliersRecord['1']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['1']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['1']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-1" data-tag="1" data-project="@if(isset($secRoundRecord['0']['applier_id'])){{ $secRoundRecord['0']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['0']['applier_id'])){{ $secRoundRecord['0']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['0']['project'])){{ $secRoundRecord['0']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['0']['leader'])){{ $secRoundRecord['0']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['0']['school'])){{ $secRoundRecord['0']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['0']['project']))
                                {{ $secRoundRecord['0']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['0']['team_name']))
                                {{ $secRoundRecord['0']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['0']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['0']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="upwords"></span>
                        <span class="downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record champion-record" data-tag="1" data-project="@if(isset($championRecord['0']['applier_id'])){{ $championRecord['0']['project_id'] }}@endif" data-applier="@if(isset($championRecord['0']['applier_id'])){{ $championRecord['0']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($championRecord['0']['project'])){{ $championRecord['0']['project'] }}@endif <br><span>Leader : </span>@if(isset($championRecord['0']['leader'])){{ $championRecord['0']['leader'] }}@endif<br><span>School : </span>@if(isset($championRecord['0']['school'])){{ $championRecord['0']['school'] }}@endif">
                           <div id="project">
                                @if(isset($championRecord['0']['project']))
                                {{ $championRecord['0']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($championRecord['0']['team_name']))
                                {{ $elt8RoundRecord['0']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($championRecord['0']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($championRecord['0']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-5" data-tag="5" data-project="@if(isset($secRoundRecord['4']['applier_id'])){{ $secRoundRecord['4']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['4']['applier_id'])){{ $secRoundRecord['4']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['4']['project'])){{ $secRoundRecord['4']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['4']['leader'])){{ $secRoundRecord['4']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['4']['school'])){{ $secRoundRecord['4']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['4']['project']))
                                {{ $secRoundRecord['4']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['4']['team_name']))
                                {{ $secRoundRecord['4']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['4']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['4']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="rt-upwords"></span>
                        <span class="rt-downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="10" data-project="@if(isset($appliersRecord['9']['applier_id'])){{ $appliersRecord['9']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['9']['applier_id'])){{ $appliersRecord['9']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['9']['project'])){{ $appliersRecord['9']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['9']['leader'])){{ $appliersRecord['9']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['9']['school'])){{ $appliersRecord['9']['school'] }}@endif">
                            <div id="project10">
                                @if(isset($appliersRecord['9']['project']))
                                {{ $appliersRecord['9']['project'] }}
                                @endif
                            </div>

                            <div id="teamName10">
                                @if(isset($appliersRecord['9']['team_name']))
                                {{ $appliersRecord[9]['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['9']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['9']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="3" data-project="@if(isset($appliersRecord['2']['applier_id'])){{ $appliersRecord['2']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['2']['applier_id'])){{ $appliersRecord['2']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['2']['project'])){{ $appliersRecord['2']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['2']['leader'])){{ $appliersRecord['2']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['2']['school'])){{ $appliersRecord['2']['school'] }}@endif">
                            <div id="project3">
                                @if(isset($appliersRecord['2']['project']))
                                {{ $appliersRecord['2']['project'] }}
                                @endif
                            </div>
                            <div id="teamName3">
                                @if(isset($appliersRecord['2']['team_name']))
                                {{ $appliersRecord['2']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['2']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['2']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record thirdr-record" data-tag="1" data-project="@if(isset($swt16RoundRecord['0']['applier_id'])){{ $swt16RoundRecord['0']['project_id'] }}@endif" data-applier="@if(isset($swt16RoundRecord['0']['applier_id'])){{ $swt16RoundRecord['0']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($swt16RoundRecord['0']['project'])){{ $swt16RoundRecord['0']['project'] }}@endif <br><span>Leader : </span>@if(isset($swt16RoundRecord['0']['leader'])){{ $swt16RoundRecord['0']['leader'] }}@endif<br><span>School : </span>@if(isset($swt16RoundRecord['0']['school'])){{ $swt16RoundRecord['0']['school'] }}@endif">
                            <div id="project">
                                @if(isset($swt16RoundRecord['0']['project']))
                                {{ $swt16RoundRecord['0']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($swt16RoundRecord['0']['team_name']))
                                {{ $swt16RoundRecord['0']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($swt16RoundRecord['0']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($swt16RoundRecord['0']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="upwords"></span>
                        <span class="downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record thirdr-record" data-tag="3" data-project="@if(isset($swt16RoundRecord['2']['applier_id'])){{ $swt16RoundRecord['2']['project_id'] }}@endif" data-applier="@if(isset($swt16RoundRecord['2']['applier_id'])){{ $swt16RoundRecord['2']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($swt16RoundRecord['2']['project'])){{ $swt16RoundRecord['2']['project'] }}@endif <br><span>Leader : </span>@if(isset($swt16RoundRecord['2']['leader'])){{ $swt16RoundRecord['2']['leader'] }}@endif<br><span>School : </span>@if(isset($swt16RoundRecord['2']['school'])){{ $swt16RoundRecord['2']['school'] }}@endif">
                            <div id="project">
                                @if(isset($swt16RoundRecord['2']['project']))
                                {{ $swt16RoundRecord['2']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($swt16RoundRecord['2']['team_name']))
                                {{ $swt16RoundRecord['2']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($swt16RoundRecord['2']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($swt16RoundRecord['2']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="rt-upwords"></span>
                        <span class="rt-downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="11" data-project="@if(isset($appliersRecord['10']['applier_id'])){{ $appliersRecord['10']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['10']['applier_id'])){{ $appliersRecord['10']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['10']['project'])){{ $appliersRecord['10']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['10']['leader'])){{ $appliersRecord['10']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['10']['school'])){{ $appliersRecord['10']['school'] }}@endif">
                            <div id="project11">
                                @if(isset($appliersRecord['10']['project']))
                                {{ $appliersRecord['10']['project'] }}
                                @endif
                            </div>
                            <div id="teamName11">
                                @if(isset($appliersRecord['10']['team_name']))
                                {{ $appliersRecord['10']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['10']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['10']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="4"
                             data-project="@if(isset($appliersRecord['3']['applier_id'])){{ $appliersRecord['3']['project_id'] }}@endif"
                             data-applier="@if(isset($appliersRecord['3']['applier_id'])){{ $appliersRecord['3']['applier_id'] }}@endif"
                             title="<span>Project : </span> @if(isset($appliersRecord['3']['project'])){{ $appliersRecord['3']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['3']['leader'])){{ $appliersRecord['3']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['3']['school'])){{ $appliersRecord['3']['school'] }}@endif">
                            <div id="project4">
                                @if(isset($appliersRecord['3']['project']))
                                {{ $appliersRecord['3']['project'] }}
                                @endif
                            </div>
                            <div id="teamName4">
                                @if(isset($appliersRecord['3']['team_name']))
                                {{ $appliersRecord['3']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['3']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>

                            @if(isset($appliersRecord['3']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-2" data-tag="2" data-project="@if(isset($secRoundRecord['1']['applier_id'])){{ $secRoundRecord['1']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['1']['applier_id'])){{ $secRoundRecord['1']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['1']['project'])){{ $secRoundRecord['1']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['1']['leader'])){{ $secRoundRecord['1']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['1']['school'])){{ $secRoundRecord['1']['school'] }}@endif">
                           <div id="project">
                                @if(isset($secRoundRecord['1']['project']))
                                {{ $secRoundRecord['1']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['1']['team_name']))
                                {{ $secRoundRecord['1']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['1']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['1']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="upwords"></span>
                        <span class="downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-6" data-tag="6" data-project="@if(isset($secRoundRecord['5']['applier_id'])){{ $secRoundRecord['5']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['5']['applier_id'])){{ $secRoundRecord['5']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['5']['project'])){{ $secRoundRecord['5']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['5']['leader'])){{ $secRoundRecord['5']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['5']['school'])){{ $secRoundRecord['5']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['5']['project']))
                                {{ $secRoundRecord['5']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['5']['team_name']))
                                {{ $secRoundRecord['5']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['5']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['5']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="rt-upwords"></span>
                        <span class="rt-downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="12" data-project="@if(isset($appliersRecord['11']['applier_id'])){{ $appliersRecord['11']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['11']['applier_id'])){{ $appliersRecord['11']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['11']['project'])){{ $appliersRecord['11']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['11']['leader'])){{ $appliersRecord['11']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['11']['school'])){{ $appliersRecord['11']['school'] }}@endif">
                            <div id="project12">
                                @if(isset($appliersRecord['11']['project']))
                                {{ $appliersRecord['11']['project'] }}
                                @endif
                            </div>
                            <div id="leader12">
                                @if(isset($appliersRecord['11']['leader']))
                                {{ $appliersRecord['11']['leader'] }}
                                @endif
                            </div>
                            <div id="school12">
                                @if(isset($appliersRecord['11']['school']))
                                {{ $appliersRecord['11']['school'] }}
                                @endif
                            </div>
                            @if(isset($appliersRecord['11']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="5" data-project="@if(isset($appliersRecord['4']['applier_id'])){{ $appliersRecord['4']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['4']['applier_id'])){{ $appliersRecord['4']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['4']['project'])){{ $appliersRecord['4']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['4']['leader'])){{ $appliersRecord['4']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['4']['school'])){{ $appliersRecord['4']['school'] }}@endif">
                            <div id="project5">
                                @if(isset($appliersRecord['4']['project']))
                                {{ $appliersRecord['4']['project'] }}
                                @endif
                            </div>
                            <div id="teamName5">
                                @if(isset($appliersRecord['4']['team_name']))
                                {{ $appliersRecord['4']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['4']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>

                            @if(isset($appliersRecord['4']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record elite-record" data-tag="1" data-project="@if(isset($elt8RoundRecord['0']['applier_id'])){{ $elt8RoundRecord['0']['project_id'] }}@endif" data-applier="@if(isset($elt8RoundRecord['0']['applier_id'])){{ $elt8RoundRecord['0']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($elt8RoundRecord['0']['project'])){{ $elt8RoundRecord['0']['project'] }}@endif <br><span>Leader : </span>@if(isset($elt8RoundRecord['0']['leader'])){{ $elt8RoundRecord['0']['leader'] }}@endif<br><span>School : </span>@if(isset($elt8RoundRecord['0']['school'])){{ $elt8RoundRecord['0']['school'] }}@endif">
                            <div id="project">
                                @if(isset($elt8RoundRecord['0']['project']))
                                {{ $elt8RoundRecord['0']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($elt8RoundRecord['0']['team_name']))
                                {{ $elt8RoundRecord['0']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($elt8RoundRecord['0']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($elt8RoundRecord['0']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="cha-upwords semi"></span>
                        <span class="upwords semi"></span>
                        <span class="downwords semi"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record elite-record" data-tag="2" data-project="@if(isset($elt8RoundRecord['1']['applier_id'])){{ $elt8RoundRecord['1']['project_id'] }}@endif" data-applier="@if(isset($elt8RoundRecord['1']['applier_id'])){{ $elt8RoundRecord['1']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($elt8RoundRecord['1']['project'])){{ $elt8RoundRecord['1']['project'] }}@endif <br><span>Leader : </span>@if(isset($elt8RoundRecord['1']['leader'])){{ $elt8RoundRecord['1']['leader'] }}@endif<br><span>School : </span>@if(isset($elt8RoundRecord['1']['school'])){{ $elt8RoundRecord['1']['school'] }}@endif">
                            <div id="project">
                                @if(isset($elt8RoundRecord['1']['project']))
                                {{ $elt8RoundRecord['1']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($elt8RoundRecord['1']['team_name']))
                                {{ $elt8RoundRecord['1']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($elt8RoundRecord['1']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($elt8RoundRecord['1']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="cha-rt-upwords semi"></span>
                        <span class="rt-upwords semi"></span>
                        <span class="rt-downwords semi"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="13" data-project="@if(isset($appliersRecord['12']['applier_id'])){{ $appliersRecord['12']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['12']['applier_id'])){{ $appliersRecord['12']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['12']['project'])){{ $appliersRecord['12']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['12']['leader'])){{ $appliersRecord['12']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['12']['school'])){{ $appliersRecord['12']['school'] }}@endif">
                            <div id="project13">
                                @if(isset($appliersRecord['12']['project']))
                                {{ $appliersRecord['12']['project'] }}
                                @endif
                            </div>
                            <div id="teamName13">
                                @if(isset($appliersRecord['12']['team_name']))
                                {{ $appliersRecord['12']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['12']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['12']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="6" data-project="@if(isset($appliersRecord['5']['applier_id'])){{ $appliersRecord['5']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['5']['applier_id'])){{ $appliersRecord['5']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['5']['project'])){{ $appliersRecord['5']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['5']['leader'])){{ $appliersRecord['5']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['5']['school'])){{ $appliersRecord['5']['school'] }}@endif">
                            <div id="project6">
                                @if(isset($appliersRecord['5']['project']))
                                {{ $appliersRecord['5']['project'] }}
                                @endif
                            </div>
                            <div id="teamName6">
                                @if(isset($appliersRecord['5']['team_name']))
                                {{ $appliersRecord['5']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['5']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['5']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-3" data-tag="3" data-project="@if(isset($secRoundRecord['2']['applier_id'])){{ $secRoundRecord['2']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['2']['applier_id'])){{ $secRoundRecord['2']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['2']['project'])){{ $secRoundRecord['2']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['2']['leader'])){{ $secRoundRecord['2']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['2']['school'])){{ $secRoundRecord['2']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['2']['project']))
                                {{ $secRoundRecord['2']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['2']['team_name']))
                                {{ $secRoundRecord['2']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['2']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['2']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="upwords"></span>
                        <span class="downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-7" data-tag="7" data-project="@if(isset($secRoundRecord['6']['applier_id'])){{ $secRoundRecord['6']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['6']['applier_id'])){{ $secRoundRecord['6']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['6']['project'])){{ $secRoundRecord['6']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['6']['leader'])){{ $secRoundRecord['6']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['6']['school'])){{ $secRoundRecord['6']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['6']['project']))
                                {{ $secRoundRecord['6']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['6']['team_name']))
                                {{ $secRoundRecord['6']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['6']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['6']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="rt-upwords"></span>
                        <span class="rt-downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="14" data-project="@if(isset($appliersRecord['13']['applier_id'])){{ $appliersRecord['13']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['13']['applier_id'])){{ $appliersRecord['13']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['13']['project'])){{ $appliersRecord['13']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['13']['leader'])){{ $appliersRecord['13']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['13']['school'])){{ $appliersRecord['13']['school'] }}@endif">
                            <div id="project14">
                                @if(isset($appliersRecord['13']['project']))
                                {{ $appliersRecord['13']['project'] }}
                                @endif
                            </div>
                            <div id="leader14">
                                @if(isset($appliersRecord['13']['leader']))
                                {{ $appliersRecord['13']['leader'] }}
                                @endif
                            </div>
                            <div id="school14">
                                @if(isset($appliersRecord['13']['school']))
                                {{ $appliersRecord['13']['school'] }}
                                @endif
                            </div>
                            @if(isset($appliersRecord['13']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="7" data-project="@if(isset($appliersRecord['6']['applier_id'])){{ $appliersRecord['6']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['6']['applier_id'])){{ $appliersRecord['6']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['6']['project'])){{ $appliersRecord['6']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['6']['leader'])){{ $appliersRecord['6']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['6']['school'])){{ $appliersRecord['6']['school'] }}@endif">
                            <div id="project7">
                                @if(isset($appliersRecord['6']['project']))
                                {{ $appliersRecord['6']['project'] }}
                                @endif
                            </div>
                            <div id="teamName7">
                                @if(isset($appliersRecord['6']['team_name']))
                                {{ $appliersRecord['6']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['6']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                                
                            </div>
                            @if(isset($appliersRecord['6']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record thirdr-record" data-tag="2" data-project="@if(isset($swt16RoundRecord['1']['applier_id'])){{ $swt16RoundRecord['1']['project_id'] }}@endif" data-applier="@if(isset($swt16RoundRecord['1']['applier_id'])){{ $swt16RoundRecord['1']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($swt16RoundRecord['1']['project'])){{ $swt16RoundRecord['1']['project'] }}@endif <br><span>Leader : </span>@if(isset($swt16RoundRecord['1']['leader'])){{ $swt16RoundRecord['1']['leader'] }}@endif<br><span>School : </span>@if(isset($swt16RoundRecord['1']['school'])){{ $swt16RoundRecord['1']['school'] }}@endif">
                            <div id="project">
                                @if(isset($swt16RoundRecord['1']['project']))
                                {{ $swt16RoundRecord['1']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($swt16RoundRecord['1']['team_name']))
                                {{ $swt16RoundRecord['1']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($swt16RoundRecord['1']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($swt16RoundRecord['1']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="upwords"></span>
                        <span class="downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record thirdr-record" data-tag="4" data-project="@if(isset($swt16RoundRecord['3']['applier_id'])){{ $swt16RoundRecord['3']['project_id'] }}@endif" data-applier="@if(isset($swt16RoundRecord['3']['applier_id'])){{ $swt16RoundRecord['3']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($swt16RoundRecord['3']['project'])){{ $swt16RoundRecord['3']['project'] }}@endif <br><span>Leader : </span>@if(isset($swt16RoundRecord['3']['leader'])){{ $swt16RoundRecord['3']['leader'] }}@endif<br><span>School : </span>@if(isset($swt16RoundRecord['3']['school'])){{ $swt16RoundRecord['3']['school'] }}@endif">
                            <div id="project">
                                @if(isset($swt16RoundRecord['3']['project']))
                                {{ $swt16RoundRecord['3']['project'] }}
                                @endif
                            </div>
                            <div id="teamName">
                                @if(isset($swt16RoundRecord['3']['team_name']))
                                {{ $swt16RoundRecord['3']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($swt16RoundRecord['3']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($swt16RoundRecord['3']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="rt-upwords"></span>
                        <span class="rt-downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="15" data-project="@if(isset($appliersRecord['14']['applier_id'])){{ $appliersRecord['14']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['14']['applier_id'])){{ $appliersRecord['14']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['14']['project'])){{ $appliersRecord['14']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['14']['leader'])){{ $appliersRecord['14']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['14']['school'])){{ $appliersRecord['14']['school'] }}@endif">
                            <div id="project15">
                                @if(isset($appliersRecord['14']['project']))
                                {{ $appliersRecord['14']['project'] }}
                                @endif
                            </div>
                            <div id="teamName15">
                                @if(isset($appliersRecord['14']['team_name']))
                                {{ $appliersRecord['14']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['14']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['14']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="row no-gutters">
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="8" data-project="@if(isset($appliersRecord['7']['applier_id'])){{ $appliersRecord['7']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['7']['applier_id'])){{ $appliersRecord['7']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['7']['project'])){{ $appliersRecord['7']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['7']['leader'])){{ $appliersRecord['7']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['7']['school'])){{ $appliersRecord['7']['school'] }}@endif">
                            <div id="project8">
                                @if(isset($appliersRecord['7']['project']))
                                {{ $appliersRecord['7']['project'] }}
                                @endif
                            </div>
                            <div id="teamName8">
                                @if(isset($appliersRecord['7']['team_name']))
                                {{ $appliersRecord['7']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['7']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['7']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-4" data-tag="4" data-project="@if(isset($secRoundRecord['3']['applier_id'])){{ $secRoundRecord['3']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['3']['applier_id'])){{ $secRoundRecord['3']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['3']['project'])){{ $secRoundRecord['3']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['3']['leader'])){{ $secRoundRecord['3']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['3']['school'])){{ $secRoundRecord['3']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['3']['project']))
                                {{ $secRoundRecord['3']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['3']['team_name']))
                                {{ $secRoundRecord['3']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['3']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['3']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="upwords"></span>
                        <span class="downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1"></div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record secondr-record" id="sec-col-8" data-tag="8" data-project="@if(isset($secRoundRecord['7']['applier_id'])){{ $secRoundRecord['7']['project_id'] }}@endif" data-applier="@if(isset($secRoundRecord['7']['applier_id'])){{ $secRoundRecord['7']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($secRoundRecord['7']['project'])){{ $secRoundRecord['7']['project'] }}@endif <br><span>Leader : </span>@if(isset($secRoundRecord['7']['leader'])){{ $secRoundRecord['7']['leader'] }}@endif<br><span>School : </span>@if(isset($secRoundRecord['7']['school'])){{ $secRoundRecord['7']['school'] }}@endif">
                            <div id="project">
                                @if(isset($secRoundRecord['7']['project']))
                                {{ $secRoundRecord['7']['project'] }}
                                @endif
                            </div>

                            <div id="teamName">
                                @if(isset($secRoundRecord['7']['team_name']))
                                {{ $secRoundRecord['7']['team_name'] }}
                                @endif
                            </div>

                            <div id="inner-footer">
                                @if(isset($secRoundRecord['7']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($secRoundRecord['7']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                        <span class="rt-upwords"></span>
                        <span class="rt-downwords"></span>
                    </div>
                    <div class="bc-tr-col col-md-1">
                        <div class="bc-tr-record" data-tag="16" data-project="@if(isset($appliersRecord['15']['applier_id'])){{ $appliersRecord['15']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['15']['applier_id'])){{ $appliersRecord['15']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['15']['project'])){{ $appliersRecord['15']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['15']['leader'])){{ $appliersRecord['15']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['15']['school'])){{ $appliersRecord['15']['school'] }}@endif">
                            <div id="project16">
                                @if(isset($appliersRecord['15']['project']))
                                {{ $appliersRecord['15']['project'] }}
                                @endif
                            </div>
                            <div id="teamName16">
                                @if(isset($appliersRecord['15']['team_name']))
                                {{ $appliersRecord['15']['team_name'] }}
                                @endif
                            </div>
                            <div id="inner-footer">
                                @if(isset($appliersRecord['15']['team_name']))
                                <a href="{{ route('BracketChart') }}" class="btn btn-primary btn-sm inner-bc-scobor-btn" style="padding: 0px 5px 0px 5px;font-size: 12px;">View Score Board </a>
                                @endif
                            </div>
                            @if(isset($appliersRecord['15']['applier_id']))
                            <button type="button" id="view1" title="view" class="btn btn-primary btn-sm chart-view-btn"><i class="fa fa-eye" ></i></button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="bc-tfooter">
                <div class="row no-gutters">
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record">
                            <div id=""></div>
                            <div id=""></div>
                            <div id=""></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record bc-tf-input">
                            <div></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record">
                            <div id=""></div>
                            <div id=""></div>
                            <div id=""></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record bc-tf-input">
                            <div></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-4">
                        <div class="bc-tf-record tf-champion-record">
                            <div id=""></div>
                            <div id=""></div>
                            <div id=""></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record bc-tf-input">
                            <div></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record">
                            <div id=""></div>
                            <div id=""></div>
                            <div id=""></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record bc-tf-input">
                            <div></div>
                        </div>
                    </div>
                    <div class="bc-tf-col col-md-1">
                        <div class="bc-tf-record">
                            <div id=""></div>
                            <div id=""></div>
                            <div id=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="col-md-12 sp-ch-tabs-section">
    <div class="container">
        <div class="col-12 sp-ch-tabs">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#neruo_challenge">NASA Challenge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#cancer_challenge">DOD Challenge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#innovation_challenge">NIH Challenge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#neuro2_challenge">EPA Challenge</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="neruo_challenge" class="container tab-pane active">
                    <div class="col-md-12 ch-challenge-content">
                        <!-- <img src="{{ asset('frontend/images/neuro-startup-challenge.jpg') }}" alt="neuro-challenge"/> -->
                        <h2>NASA Challenge</h2>
                        <h4>NASA's Technology Transfer Program is focused on ensuring “NASA’s innovations developed for exploration and discovery are broadly available to the public, thereby maximizing their benefit to the nation. Whether you're looking to start a new company, enhance an existing product, or create a new product line, you can gain a competitive edge in the marketplace by putting NASA technology to work for you”.</h4>

                        <h4>And this is certainly true…so much so that the Sprowtt team selected the NASA patent portfolio as the federal government portfolio focus area for our first CETTC.  The Tech Transfer Gateway will be configured to allow competitors to quickly search NASA’s extensive patent portfolio with a whopping 1200 high-tech patented inventions. Our search tool will organize the large number of patented government inventions into categories and make them searchable so that you can easily identify technologies suited to your team’s interests and background. The Gateway will also highlight the most recent and emerging technologies patented by NASA with strong commercial potential; all so you can launch your business into the Sprowtt Challenge!</h4> 

                        <h4>While NASA drives to return to the Moon by 2024, Sprowtt will drive NASA patented technologies into the marketplace…</h4>
                       

                       <!--<a href="{{ route('MemberApply','0') }}" class="btn btn-link green-outline pull-right">Join The Team</a>-->
                    </div>
                </div>
                <div id="cancer_challenge" class="container tab-pane fade">
                    <div id="cancer_challenge" class="container tab-pane active">
                        <div class="col-md-12 ch-challenge-content">
                            <!-- <img src="{{ asset('frontend/images/cancer-startup-challenge.jpg') }}" alt="cancer-challenge"/> -->
                            <h2>DOD Challenge</h2>
                            <h4>Sprowtt Launch Pad supports the DOD Technology Transfer Program ensures that innovations developed for exploration and discovery are broadly available to the public, maximizing the benefit to the Nation. Whether you're looking to start a new company, enhance an existing product, or create a new product line, you can gain a competitive edge in the marketplace by putting DOD technology to work for you.</h4>
                            <h4>The Sprowtt launch pad simplifies the DOD Technology Transfer Portal hosts information on all the DOD-developed technologies available to your Startup or existing business.  DOD patent portfolio contains over a hundred different technologies. Sprowtt Launch pad selects the most recent and emerging technologies from DOD available for licensing.  Sprowtt Launch pad has organized into categories and made searchable so you can easily identify technologies suited for building your Team and launching your business into the Sprowtt Challenge.</h4>
                            <!--<a href="{{ route('MemberApply','0') }}" class="btn btn-link green-outline pull-right">Join The Team</a>-->
                        </div>
                    </div>
                </div>
                <div id="innovation_challenge" class="container tab-pane fade">
                    <div id="innovation_challenge" class="container tab-pane active">
                        <div class="col-md-12 ch-challenge-content">
                            <!-- <img src="{{ asset('frontend/images/cancer-startup-challenge.jpg') }}" alt="cancer-challenge"/> -->
                            <h2>NIH Challenge</h2>
                            <h4>Sprowtt Launch Pad supports the NIH Technology Transfer Program ensures that innovations developed for exploration and discovery are broadly available to the public, maximizing the benefit to the Nation. Whether you're looking to start a new company, enhance an existing product, or create a new product line, you can gain a competitive edge in the marketplace by putting NIH technology to work for you.</h4>
                            <h4>The Sprowtt launch pad simplifies the NIH Technology Transfer Portal hosts information on all the NIH-developed technologies available to your Startup or existing business.  NIH patent portfolio contains over a hundred different technologies. Sprowtt Launch pad selects the most recent and emerging technologies from NIH available for licensing.  Sprowtt Launch pad has organized into categories and made searchable so you can easily identify technologies suited for building your Team and launching your business into the Sprowtt Challenge.</h4>
                            <!--<a href="{{ route('MemberApply','0') }}" class="btn btn-link green-outline pull-right">Join The Team</a>-->
                        </div>
                    </div>
                </div>
                <div id="neuro2_challenge" class="container tab-pane fade">
                    <div id="innovation_challenge" class="container tab-pane active">
                        <div class="col-md-12 ch-challenge-content">
                            <!-- <img src="{{ asset('frontend/images/cancer-startup-challenge.jpg') }}" alt="cancer-challenge"/> -->
                            <h2>EPA Challenge</h2>
                            <h4>Sprowtt Launch Pad supports the EPA Technology Transfer Program ensures that innovations developed for exploration and discovery are broadly available to the public, maximizing the benefit to the Nation. Whether you're looking to start a new company, enhance an existing product, or create a new product line, you can gain a competitive edge in the marketplace by putting EPA technology to work for you.</h4>
                            <h4>The Sprowtt launch pad simplifies the EPA Technology Transfer Portal hosts information on all the EPA-developed technologies available to your Startup or existing business.  EPA patent portfolio contains over a hundred different technologies. Sprowtt Launch pad selects the most recent and emerging technologies from EPA available for licensing.  Sprowtt Launch pad has organized into categories and made searchable so you can easily identify technologies suited for building your Team and launching your business into the Sprowtt Challenge.</h4>
                           <!-- <a href="{{ route('MemberApply','0') }}" class="btn btn-link green-outline pull-right">Join The Team</a>-->
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--Modal: modalPush-->
<div class="modal fade" id="chartViewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document" style="min-width: 900px;">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Project Details</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img id="projImg" src="" width="420" height="300">
                    </div>
                    <div class="col-md-6">
                        <div class="modal-detail">
                            <div class="chart-modal-pro-panel">
                                <p id='projectName'></p>
                            </div>
                            <div class="chart-modal-des-panel">
                                <p id="projectDesc"><span>Description:</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 outter-details">
                        <div class="modal-detail" style="height: auto;">
                            <div class="modal-leader-heading">
                                <p>Team Leader's Details</p>
                            </div>
                            <div class="chart-modal-led-panel">
                                <p id="leaderName"><span>Leader's Name :</span></p>
                                <p id="leaderSch"><span>Leader's University/Organization :</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 outter-details">
                        <div class="modal-detail" style="height: auto;">
                            <div class="modal-leader-heading">
                                <p>Team Member's Details</p>
                            </div>
                            <div class="chart-modal-mem-panel">
                                <p><span>Member's Name :</span> </p>
                                <p><span>Member's University/Organization :</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal: modalPush-->
<div class="modal fade" id="proCloseModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Project Closed</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="comingsoon-heading text-center">
                    <h1><span>Project Closed</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal: modalPush-->
@endsection
@section('script')
<script id="withModal" type="text/template">
    <div class="row">
        <div class="col-md-6">
            <img id="projImg" src="" width="420" height="300">
        </div>
        <div class="col-md-6">
            <div class="modal-detail">
                <div class="chart-modal-pro-panel">
                    <p id='projectName'></p>
                </div>
                <div class="chart-modal-des-panel">
                    <p id="projectDesc"><span>Description:</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-12 outter-details">
            <div class="modal-detail" style="height: auto;">
                <div class="modal-leader-heading">
                    <p>Team Leader's Details</p>
                </div>
                <div class="chart-modal-led-panel">
                    <p id="leaderName"><span>Leader's Name :</span></p>
                    <p id="leaderSch"><span>Leader's University/Organization :</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-12 outter-details">
            <div class="modal-detail" style="height: auto;">
                <div class="modal-leader-heading">
                    <p>Team Member's Details</p>
                </div>
                <div class="chart-modal-mem-panel">
                    <p><span>Member's Name :</span> </p>
                    <p><span>Member's University/Organization :</span></p>
                </div>
            </div>    
        </div>
    </div>
</script>
<script type="text/javascript">
    $(document).ready(function(){
        
        $(".read-more").on('click',function(){
            var id = $(this).parents().attr('data-id');
            var url = '{{ route("tombStonedetail",":id") }}';
            url = url.replace(':id', id);
            window.location.href = url;
        })

        $(".appCheck").on('click',function(){
            var tag = $(this).attr('data-tag');
            var status = null;
            var id = $(this).attr('data-id');
            var url = '{{ route("ProjectApply",":id") }}';
            url = url.replace(':id', id);

            if(tag == "applynow"){
                status = $(this).attr('data-status');
            }else if(tag == 'readmore'){
                status = $(this).parents().attr('data-status');
            }

            if(status == 0){
                window.location.href = url;
            }else{
                $('#proCloseModal').modal('show');
            }
        });

        //Every time modal closing clearing appended records
        $("#chartViewModal").on("hidden.bs.modal", function(){
            var html = $('#withModal').html();
            $(".modal-body").html(' ');
            $(".modal-body").html(html);
        });

        $('.bc-tr-record').tooltip({
            placement : 'top',
            template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><i class="fa fa-info-circle"></span> Info</h3></div><div class="tooltip-inner" style="width:250px;!important"></div></div>',  
            html: true, 
        });

        //Appending project details into modal on eye clicking
        $('.bc-tr-record button').on('click',function(){
            var projectId = $(this).parent().attr('data-project');
            var applierId = $(this).parent().attr('data-applier');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('GetProjectData') }}',
                type: "POST",
                data:{
                    project_id:projectId,
                    applier_id:applierId
                },
                success: function(result){
                    var record = jQuery.parseJSON(result);
                    if(record.status == 1){
                        $('#chartViewModal').modal('show');
                        $('#projImg').attr('src',record.leader[0]['image_link']);
                        $('.chart-modal-pro-panel #projectName').text(record.leader[0]['name']);
                        $('.chart-modal-des-panel #projectDesc').text(' ');
                        $('.chart-modal-des-panel #projectDesc').append('<span>Description:</span>'+record.leader[0]['description']);

                        //leader details
                        $('.chart-modal-led-panel #leaderName').text(' ');
                        $('.chart-modal-led-panel #leaderName').append("<span>Leader's Name :</span>"+record.leader[0]['firstname']);
                          
                        $('.chart-modal-led-panel #leaderSch').text(' ');
                        $('.chart-modal-led-panel #leaderSch').append("<span>Leader's University/Organization :</span>"+record.leader[0]['currentUniversity']);


                        //member details
                        var no=0;
                        $(record.member).each(function (index, value) {
                        if(no == 0){
                            $('.chart-modal-mem-panel').empty();
                            $('.chart-modal-mem-panel').append("<p><span>Member's Name :</span>"+value.member +" </p>"+
                            "<p><span>Member's University/Organization :</span>"+value.school +"</p>");
                        }else{
                            $('.chart-modal-mem-panel').append("<p><span>Member "+no+"'s Name :</span>"+value.member +" </p>"+
                            "<p><span>Member "+no+"'s University/Organization :</span>"+value.school +"</p>");
                        }
                        no++;
                    });
                }
            }
        });
    });
});
</script>
@endsection