@extends('layouts.frontend')

@section('content')

<section class="col-md-12 sp-ch-banner-section" style="margin-bottom: 35px;">
    <div class="col-12 sp-banner-image">
        <img src="{{ asset('frontend/images/challanges-banner.jpg') }}" alt="Challenges-Banner"/>
    </div>
    <div class="container">
        <div class="col-12 sp-banner-caption">
            <span class="display-2"> Teams </span>  
            <h4>"Coming together is a beginning staying together is progress,and working together is success."</h4>
            <p>Henry Ford</p>          
        </div>
    </div>
</section>

<br>
<br>


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
                            <div id="leader1">
                                @if(isset($appliersRecord['0']['leader']))
                                {{ $appliersRecord['0']['leader'] }}
                                @endif
                            </div>
                            <div id="school1">
                                @if(isset($appliersRecord['0']['school']))
                                {{ $appliersRecord['0']['school'] }}
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
                            <div id="leader9">
                                @if(isset($appliersRecord['8']['leader']))
                                {{ $appliersRecord['8']['leader'] }}
                                @endif
                            </div>
                            <div id="school9">
                                @if(isset($appliersRecord['8']['school']))
                                {{ $appliersRecord['8']['school'] }}
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
                            <div id="leader2">
                                @if(isset($appliersRecord['1']['leader']))
                                {{ $appliersRecord['1']['leader'] }}
                                @endif
                            </div>
                            <div id="school2">
                                @if(isset($appliersRecord['1']['school']))
                                {{ $appliersRecord['1']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['0']['leader']))
                                {{ $secRoundRecord['0']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['0']['school']))
                                {{ $secRoundRecord['0']['school'] }}
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
                            <div id="leader">
                                @if(isset($championRecord['0']['leader']))
                                {{ $championRecord['0']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($championRecord['0']['school']))
                                {{ $championRecord['0']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['4']['leader']))
                                {{ $secRoundRecord['4']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['4']['school']))
                                {{ $secRoundRecord['4']['school'] }}
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
                            <div id="leader10">
                                @if(isset($appliersRecord['9']['leader']))
                                {{ $appliersRecord['9']['leader'] }}
                                @endif
                            </div>
                            <div id="school10">
                                @if(isset($appliersRecord['9']['school']))
                                {{ $appliersRecord['9']['school'] }}
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
                            <div id="leader3">
                                @if(isset($appliersRecord['2']['leader']))
                                {{ $appliersRecord['2']['leader'] }}
                                @endif
                            </div>
                            <div id="school3">
                                @if(isset($appliersRecord['2']['school']))
                                {{ $appliersRecord['2']['school'] }}
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
                            <div id="leader">
                                @if(isset($swt16RoundRecord['0']['leader']))
                                {{ $swt16RoundRecord['0']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($swt16RoundRecord['0']['school']))
                                {{ $swt16RoundRecord['0']['school'] }}
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
                            <div id="leader">
                                @if(isset($swt16RoundRecord['2']['leader']))
                                {{ $swt16RoundRecord['2']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($swt16RoundRecord['2']['school']))
                                {{ $swt16RoundRecord['2']['school'] }}
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
                            <div id="project19">
                                @if(isset($appliersRecord['10']['project']))
                                {{ $appliersRecord['10']['project'] }}
                                @endif
                            </div>
                            <div id="leader19">
                                @if(isset($appliersRecord['10']['leader']))
                                {{ $appliersRecord['10']['leader'] }}
                                @endif
                            </div>
                            <div id="school19">
                                @if(isset($appliersRecord['10']['school']))
                                {{ $appliersRecord['10']['school'] }}
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
                        <div class="bc-tr-record" data-tag="4" data-project="@if(isset($appliersRecord['3']['applier_id'])){{ $appliersRecord['3']['project_id'] }}@endif" data-applier="@if(isset($appliersRecord['3']['applier_id'])){{ $appliersRecord['3']['applier_id'] }}@endif" title="<span>Project : </span> @if(isset($appliersRecord['3']['project'])){{ $appliersRecord['3']['project'] }}@endif <br><span>Leader : </span>@if(isset($appliersRecord['3']['leader'])){{ $appliersRecord['3']['leader'] }}@endif<br><span>School : </span>@if(isset($appliersRecord['3']['school'])){{ $appliersRecord['1']['school'] }}@endif">
                            <div id="project4">
                                @if(isset($appliersRecord['3']['project']))
                                {{ $appliersRecord['3']['project'] }}
                                @endif
                            </div>
                            <div id="leader4">
                                @if(isset($appliersRecord['3']['leader']))
                                {{ $appliersRecord['3']['leader'] }}
                                @endif
                            </div>
                            <div id="school4">
                                @if(isset($appliersRecord['3']['school']))
                                {{ $appliersRecord['3']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['1']['leader']))
                                {{ $secRoundRecord['1']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['1']['school']))
                                {{ $secRoundRecord['1']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['5']['leader']))
                                {{ $secRoundRecord['5']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['5']['school']))
                                {{ $secRoundRecord['5']['school'] }}
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
                            <div id="leader5">
                                @if(isset($appliersRecord['4']['leader']))
                                {{ $appliersRecord['4']['leader'] }}
                                @endif
                            </div>
                            <div id="school5">
                                @if(isset($appliersRecord['4']['school']))
                                {{ $appliersRecord['4']['school'] }}
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
                            <div id="leader">
                                @if(isset($elt8RoundRecord['0']['leader']))
                                {{ $elt8RoundRecord['0']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($elt8RoundRecord['0']['school']))
                                {{ $elt8RoundRecord['0']['school'] }}
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
                            <div id="leader">
                                @if(isset($elt8RoundRecord['1']['leader']))
                                {{ $elt8RoundRecord['1']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($elt8RoundRecord['1']['school']))
                                {{ $elt8RoundRecord['1']['school'] }}
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
                            <div id="leader13">
                                @if(isset($appliersRecord['12']['leader']))
                                {{ $appliersRecord['12']['leader'] }}
                                @endif
                            </div>
                            <div id="school13">
                                @if(isset($appliersRecord['12']['school']))
                                {{ $appliersRecord['12']['school'] }}
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
                            <div id="projec6">
                                @if(isset($appliersRecord['5']['project']))
                                {{ $appliersRecord['5']['project'] }}
                                @endif
                            </div>
                            <div id="leader6">
                                @if(isset($appliersRecord['5']['leader']))
                                {{ $appliersRecord['5']['leader'] }}
                                @endif
                            </div>
                            <div id="school6">
                                @if(isset($appliersRecord['5']['school']))
                                {{ $appliersRecord['5']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['2']['leader']))
                                {{ $secRoundRecord['2']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['2']['school']))
                                {{ $secRoundRecord['2']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['6']['leader']))
                                {{ $secRoundRecord['6']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['6']['school']))
                                {{ $secRoundRecord['6']['school'] }}
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
                            <div id="projec7">
                                @if(isset($appliersRecord['6']['project']))
                                {{ $appliersRecord['6']['project'] }}
                                @endif
                            </div>
                            <div id="leader7">
                                @if(isset($appliersRecord['6']['leader']))
                                {{ $appliersRecord['6']['leader'] }}
                                @endif
                            </div>
                            <div id="school7">
                                @if(isset($appliersRecord['6']['school']))
                                {{ $appliersRecord['6']['school'] }}
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
                            <div id="leader">
                                @if(isset($swt16RoundRecord['1']['leader']))
                                {{ $swt16RoundRecord['1']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($swt16RoundRecord['1']['school']))
                                {{ $swt16RoundRecord['1']['school'] }}
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
                            <div id="leader">
                                @if(isset($swt16RoundRecord['3']['leader']))
                                {{ $secRoundRecord['3']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($swt16RoundRecord['3']['school']))
                                {{ $secRoundRecord['3']['school'] }}
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
                            <div id="leader15">
                                @if(isset($appliersRecord['14']['leader']))
                                {{ $appliersRecord['14']['leader'] }}
                                @endif
                            </div>
                            <div id="school15">
                                @if(isset($appliersRecord['14']['school']))
                                {{ $appliersRecord['14']['school'] }}
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
                            <div id="projec8">
                                @if(isset($appliersRecord['7']['project']))
                                {{ $appliersRecord['7']['project'] }}
                                @endif
                            </div>
                            <div id="leader8">
                                @if(isset($appliersRecord['7']['leader']))
                                {{ $appliersRecord['7']['leader'] }}
                                @endif
                            </div>
                            <div id="school8">
                                @if(isset($appliersRecord['7']['school']))
                                {{ $appliersRecord['7']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['3']['leader']))
                                {{ $secRoundRecord['3']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['3']['school']))
                                {{ $secRoundRecord['3']['school'] }}
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
                            <div id="leader">
                                @if(isset($secRoundRecord['7']['leader']))
                                {{ $secRoundRecord['7']['leader'] }}
                                @endif
                            </div>
                            <div id="school">
                                @if(isset($secRoundRecord['7']['school']))
                                {{ $secRoundRecord['7']['school'] }}
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
                            <div id="leader16">
                                @if(isset($appliersRecord['15']['leader']))
                                {{ $appliersRecord['15']['leader'] }}
                                @endif
                            </div>
                            <div id="school16">
                                @if(isset($appliersRecord['15']['school']))
                                {{ $appliersRecord['15']['school'] }}
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