<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('backend/dist/img/avatar04.png') }}  " class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">

                <p>{{ ucfirst(Auth::user()->name) }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : null }}">
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            @if(Auth::user()->roleid==App\Role::$SUPER_ADMIN)

            <li class="{{ Request::segment(2) === 'tombstone' ? 'active' : null }}">
                <a href="{{ route('BETombstone') }}"><i class="fa fa-bandcamp"></i><span>Project's</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'tombstonequestions' ? 'active' : null }}">
                <a href="{{ route('BETombstoneQues') }}"><i
                            class="fa fa-question-circle"></i><span>Project Question's</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'tombstonevoters' ? 'active' : null }}">
                <a href="{{ route('BETombstoneVoter') }}"><i class="fa fa-list"></i><span>Voter List</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'newsletter' ? 'active' : null }}">
                <a href="{{ route('BENewsLetter') }}"><i class="fa fa-envelope"></i><span>Newsletters</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'contactus' ? 'active' : null }}">
                <a href="{{ route('BEContactUs') }}"><i class="fa fa-comments"></i><span>Contact Us</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}">
                <a href="{{ route('BEusers') }}"><i class="fa fa-users"></i><span>Users</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'members' ? 'active' : null }}">
                <a href="{{ route('BEmembers') }}"><i class="fa fa-users"></i><span>Members</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'judge' ? 'active' : null }}">
                <a href="{{ route('BEJudges') }}"><i class="fa fa-cube"></i><span>Judges</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'chart' ? 'active' : null }}">
                <a href="{{ route('BEchart') }}"><i class="fa fa-line-chart"></i><span>Bracket Chart</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'new-tech' ? 'active' : null }}">
                <a href="{{ route('BETech') }}"><i class="fa fa-eercast"></i><span>New Technology</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'internship' ? 'active' : null }}">
                <a href="{{ route('BEInternship') }}"><i class="fa fa-id-card-o"></i><span>Internship</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'Ambassador' ? 'active' : null }}">
                <a href="{{ route('BEAmbassador') }}"><i class="fa fa-graduation-cap"></i><span>Ambassador</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'event-applier' ? 'active' : null }}">
                <a href="{{ route('BEEventApplier') }}"><i class="fa fa-grav"></i><span>Event Appliers</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'sponsor-ship' ? 'active' : null }}">
                <a href="{{ route('BESponsorship') }}"><i class="fa fa-money"></i><span>Sponsorships</span></a>
            </li>

            @elseif(Auth::user()->roleid==App\Role::$SUB_ADMIN)
            <li class="{{ Request::segment(2) === 'tombstone' ? 'active' : null }}">
                <a href="{{ route('BETombstone') }}"><i class="fa fa-bandcamp"></i><span>Project's</span></a>
            </li>

            <li class="{{ Request::segment(2) === 'newsletter' ? 'active' : null }}">
                <a href="{{ route('BENewsLetter') }}"><i class="fa fa-envelope"></i><span>Newsletters</span></a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>