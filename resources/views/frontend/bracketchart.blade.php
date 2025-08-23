@extends('layouts.frontend')

@section('content')
<section class="col-md-12 sp-bracket-chart-section">
    <div class="container-fluid">
    	<div class="col-12 sp-bc-bg-image">
        	<img src="{{ asset('frontend/images/bracket_chart.png') }}" alt="Score-Board"/>
    	</div>
    	<div class="sp-bc-content">
    		<div class="sp-bc-time-row">
    			<p>45.00</p>
    		</div>
            <!-- First Round Record -->

    		<div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[0]))
                                @if($frBcDetails[0]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[0]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[0]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[0]))
                                {{  $frBcDetails[0]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[0]))
                                @if($frBcDetails[0]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[0]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[0]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[0]))
                                {{  $frBcDetails[0]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[0]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[0]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[0]))
                            <p title="{{ $frBcDetails[0]['lpName'] }}">
                                @if($frBcDetails[0]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[0]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[0]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[0]))
                            <p title="{{ $frBcDetails[0]['rpName'] }}">
                                @if($frBcDetails[0]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[0]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[0]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[0]))
                                {{ $frBcDetails[0]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[1]))
                                @if($frBcDetails[1]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[1]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[1]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[1]))
                                {{  $frBcDetails[1]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[1]))
                                @if($frBcDetails[1]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[1]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[1]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[1]))
                                {{  $frBcDetails[1]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[1]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[1]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[1]))
                            <p title="{{ $frBcDetails[1]['lpName'] }}">
                                @if($frBcDetails[1]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[1]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[1]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[1]))
                            <p title="{{ $frBcDetails[1]['rpName'] }}">
                                @if($frBcDetails[1]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[1]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[1]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[1]))
                                {{ $frBcDetails[1]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[2]))
                                @if($frBcDetails[2]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[2]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[2]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[2]))
                                {{  $frBcDetails[2]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[2]))
                                @if($frBcDetails[2]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[2]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[2]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[2]))
                                {{  $frBcDetails[2]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[2]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[2]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[2]))
                            <p title="{{ $frBcDetails[2]['lpName'] }}">
                                @if($frBcDetails[2]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[2]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[2]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[2]))
                            <p title="{{ $frBcDetails[2]['rpName'] }}">
                                @if($frBcDetails[2]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[2]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[2]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[2]))
                                {{ $frBcDetails[2]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[3]))
                                @if($frBcDetails[3]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[3]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[3]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[3]))
                                {{  $frBcDetails[3]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[3]))
                                @if($frBcDetails[3]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[3]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[3]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[3]))
                                {{  $frBcDetails[3]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[3]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[3]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[3]))
                            <p title="{{ $frBcDetails[3]['lpName'] }}">
                                @if($frBcDetails[3]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[3]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[3]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[3]))
                            <p title="{{ $frBcDetails[3]['rpName'] }}">
                                @if($frBcDetails[3]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[3]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[3]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[3]))
                                {{ $frBcDetails[3]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[4]))
                                @if($frBcDetails[4]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[4]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[4]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[4]))
                                {{  $frBcDetails[4]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[4]))
                                @if($frBcDetails[4]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[4]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[4]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[4]))
                                {{  $frBcDetails[4]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[4]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[4]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[4]))
                            <p title="{{ $frBcDetails[4]['lpName'] }}">
                                @if($frBcDetails[4]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[4]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[4]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[4]))
                            <p title="{{ $frBcDetails[4]['rpName'] }}">
                                @if($frBcDetails[4]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[4]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[4]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[4]))
                                {{ $frBcDetails[4]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[5]))
                                @if($frBcDetails[5]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[5]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[5]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[5]))
                                {{  $frBcDetails[5]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[5]))
                                @if($frBcDetails[5]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[5]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[5]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[5]))
                                {{  $frBcDetails[5]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[5]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[5]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[5]))
                            <p title="{{ $frBcDetails[5]['lpName'] }}">
                                @if($frBcDetails[5]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[5]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[5]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[5]))
                            <p title="{{ $frBcDetails[5]['rpName'] }}">
                                @if($frBcDetails[5]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[5]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[5]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[5]))
                                {{ $frBcDetails[5]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[6]))
                                @if($frBcDetails[6]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[6]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[6]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[6]))
                                {{  $frBcDetails[6]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[6]))
                                @if($frBcDetails[6]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[6]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[6]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[6]))
                                {{  $frBcDetails[6]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[6]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[6]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[6]))
                            <p title="{{ $frBcDetails[6]['lpName'] }}">
                                @if($frBcDetails[6]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[6]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[6]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[6]))
                            <p title="{{ $frBcDetails[6]['rpName'] }}">
                                @if($frBcDetails[6]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[6]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[6]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[6]))
                                {{ $frBcDetails[6]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($frBcDetails[7]))
                                @if($frBcDetails[7]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[7]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($frBcDetails[7]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($frBcDetails[7]))
                                {{  $frBcDetails[7]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($frBcDetails[7]))
                                @if($frBcDetails[7]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[7]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[7]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($frBcDetails[7]))
                                {{  $frBcDetails[7]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($frBcDetails[7]))
                            <a href="{{ route('ScoreBoard',$frBcDetails[7]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($frBcDetails[7]))
                            <p title="{{ $frBcDetails[7]['lpName'] }}">
                                @if($frBcDetails[7]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[7]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[7]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($frBcDetails[7]))
                            <p title="{{ $frBcDetails[7]['rpName'] }}">
                                @if($frBcDetails[7]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($frBcDetails[7]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($frBcDetails[7]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($frBcDetails[7]))
                                {{ $frBcDetails[7]['round_name'] }}
                            @else
                                First Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Second Round Record -->

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($srBcDetails[0]))
                                @if($srBcDetails[0]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[0]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($srBcDetails[0]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($srBcDetails[0]))
                                {{  $srBcDetails[0]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($srBcDetails[0]))
                                @if($srBcDetails[0]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[0]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[0]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($srBcDetails[0]))
                                {{  $srBcDetails[0]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($srBcDetails[0]))
                            <a href="{{ route('ScoreBoard',$srBcDetails[0]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($srBcDetails[0]))
                            <p title="{{ $srBcDetails[0]['lpName'] }}">
                                @if($srBcDetails[0]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[0]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[0]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($srBcDetails[0]))
                            <p title="{{ $srBcDetails[0]['rpName'] }}">
                                @if($srBcDetails[0]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[0]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[0]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($srBcDetails[0]))
                                {{ $srBcDetails[0]['round_name'] }}
                            @else
                                Second Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($srBcDetails[1]))
                                @if($srBcDetails[1]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[1]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($srBcDetails[1]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($srBcDetails[1]))
                                {{  $srBcDetails[1]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($srBcDetails[1]))
                                @if($srBcDetails[1]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[1]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[1]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($srBcDetails[1]))
                                {{  $srBcDetails[1]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($srBcDetails[1]))
                            <a href="{{ route('ScoreBoard',$srBcDetails[1]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($srBcDetails[1]))
                            <p title="{{ $srBcDetails[1]['lpName'] }}">
                                @if($srBcDetails[1]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[1]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[1]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($srBcDetails[1]))
                            <p title="{{ $srBcDetails[1]['rpName'] }}">
                                @if($srBcDetails[1]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[1]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[1]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($srBcDetails[1]))
                                {{ $srBcDetails[1]['round_name'] }}
                            @else
                                Second Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($srBcDetails[2]))
                                @if($srBcDetails[2]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[2]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($srBcDetails[2]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($srBcDetails[2]))
                                {{  $srBcDetails[2]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($srBcDetails[2]))
                                @if($srBcDetails[2]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[2]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[2]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($srBcDetails[2]))
                                {{  $srBcDetails[2]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($srBcDetails[2]))
                            <a href="{{ route('ScoreBoard',$srBcDetails[2]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($srBcDetails[2]))
                            <p title="{{ $srBcDetails[2]['lpName'] }}">
                                @if($srBcDetails[2]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[2]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[2]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($srBcDetails[2]))
                            <p title="{{ $srBcDetails[2]['rpName'] }}">
                                @if($srBcDetails[2]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[2]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[2]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($srBcDetails[2]))
                                {{ $srBcDetails[2]['round_name'] }}
                            @else
                                Second Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($srBcDetails[3]))
                                @if($srBcDetails[3]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[3]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($srBcDetails[3]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($srBcDetails[3]))
                                {{  $srBcDetails[3]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($srBcDetails[3]))
                                @if($srBcDetails[3]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[3]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[3]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($srBcDetails[3]))
                                {{  $srBcDetails[3]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($srBcDetails[3]))
                            <a href="{{ route('ScoreBoard',$srBcDetails[3]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($srBcDetails[3]))
                            <p title="{{ $srBcDetails[3]['lpName'] }}">
                                @if($srBcDetails[3]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[3]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[3]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($srBcDetails[3]))
                            <p title="{{ $srBcDetails[3]['rpName'] }}">
                                @if($srBcDetails[3]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($srBcDetails[3]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($srBcDetails[3]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($srBcDetails[3]))
                                {{ $srBcDetails[3]['round_name'] }}
                            @else
                                Second Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sweet 16 Round Record -->

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($sw16BcDetails[0]))
                                @if($sw16BcDetails[0]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[0]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($sw16BcDetails[0]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($sw16BcDetails[0]))
                                {{  $sw16BcDetails[0]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($sw16BcDetails[0]))
                                @if($sw16BcDetails[0]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[0]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($sw16BcDetails[0]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($sw16BcDetails[0]))
                                {{  $sw16BcDetails[0]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($sw16BcDetails[0]))
                            <a href="{{ route('ScoreBoard',$sw16BcDetails[0]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($sw16BcDetails[0]))
                            <p title="{{ $sw16BcDetails[0]['lpName'] }}">
                                @if($sw16BcDetails[0]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[0]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($sw16BcDetails[0]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($sw16BcDetails[0]))
                            <p title="{{ $sw16BcDetails[0]['rpName'] }}">
                                @if($sw16BcDetails[0]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[0]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($sw16BcDetails[0]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($sw16BcDetails[0]))
                                {{ $sw16BcDetails[0]['round_name'] }}
                            @else
                                Sweet16 Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($sw16BcDetails[1]))
                                @if($sw16BcDetails[1]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[1]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($sw16BcDetails[1]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($sw16BcDetails[1]))
                                {{  $sw16BcDetails[1]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($sw16BcDetails[1]))
                                @if($sw16BcDetails[1]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[1]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($sw16BcDetails[1]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($sw16BcDetails[1]))
                                {{  $sw16BcDetails[1]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($sw16BcDetails[1]))
                            <a href="{{ route('ScoreBoard',$sw16BcDetails[1]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($sw16BcDetails[1]))
                            <p title="{{ $sw16BcDetails[1]['lpName'] }}">
                                @if($sw16BcDetails[1]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[1]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($sw16BcDetails[1]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($sw16BcDetails[1]))
                            <p title="{{ $sw16BcDetails[1]['rpName'] }}">
                                @if($sw16BcDetails[1]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($sw16BcDetails[1]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($sw16BcDetails[1]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($sw16BcDetails[1]))
                                {{ $sw16BcDetails[1]['round_name'] }}
                            @else
                                Sweet16 Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>


            <!-- Elite 8 Round Record -->

            <div class="sp-bc-score-row">
                <div class="score-bg-label">
                    <img src="{{ asset('frontend/images/score_bg.png') }}">
                </div>
                <div class="sr-team-record">
                    <div class="sr-left-team">
                        <p class="sr-lt-name">

                            @if(isset($elt8BcDetails[0]))
                                @if($elt8BcDetails[0]['ltName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($elt8BcDetails[0]['ltName'],0,30) }}..  </span>
                                @else
                                    {{  substr($elt8BcDetails[0]['ltName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-lt-score">
                            @if(isset($elt8BcDetails[0]))
                                {{  $elt8BcDetails[0]['ltCount']  }}
                            @else
                                00000
                            @endif
                        </span>
                    </div>
                    <div class="sr-right-team">
                        <p class="sr-rt-name">
                            @if(isset($elt8BcDetails[0]))
                                @if($elt8BcDetails[0]['rtName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($elt8BcDetails[0]['rtName'],0,30) }}..  </span>
                                @else
                                    {{ substr($elt8BcDetails[0]['rtName'],0,12) }}..
                                @endif
                            @else
                                <span style="color: #e6f503">NOT SELECTED..</span>
                            @endif
                        </p>
                        <span class="sr-rt-score">
                            @if(isset($elt8BcDetails[0]))
                                {{  $elt8BcDetails[0]['rtCount']  }}
                            @else
                                00000
                            @endif

                        </span>
                    </div>
                    <div class="sr-common-view">
                        @if(isset($elt8BcDetails[0]))
                            <a href="{{ route('ScoreBoard',$elt8BcDetails[0]['viewid']) }}" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @else
                            <a href="#" class="btn btn-link blue-btn sr-view-btn">view</a>
                        @endif
                    </div>

                </div>
                <div class="sr-team-record-name">
                    <div class="sr-left-team-name">
                        @if(isset($elt8BcDetails[0]))
                            <p title="{{ $elt8BcDetails[0]['lpName'] }}">
                                @if($elt8BcDetails[0]['lpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($elt8BcDetails[0]['lpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($elt8BcDetails[0]['lpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                    <div class="sr-right-team-name">
                        @if(isset($elt8BcDetails[0]))
                            <p title="{{ $elt8BcDetails[0]['rpName'] }}">
                                @if($elt8BcDetails[0]['rpName'] == 'NOT SELECTED')
                                    <span style="color: #e6f503">{{ substr($elt8BcDetails[0]['rpName'],0,30) }}..  </span>
                                @else
                                    {{ substr($elt8BcDetails[0]['rpName'],0,30) }}..
                                @endif
                            </p>
                        @else
                            <p><span style="color: #e6f503">NOT SELECTED..</span></p>
                        @endif
                    </div>
                </div>
                <div class="sr-team-round">
                    <div class="inner-team-round">
                        <p>
                            @if(isset($elt8BcDetails[0]))
                                {{ $elt8BcDetails[0]['round_name'] }}
                            @else
                                Elite8 Round
                            @endif
                        </p>
                    </div>
                </div>
            </div>

    	</div>
    </div>
</section>
@endsection