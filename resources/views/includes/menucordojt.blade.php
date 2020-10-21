<div id="sidebar" class="sidebar">

    <div data-scrollbar="true" data-height="100%">

        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{ asset('assets/img/logo/logo-ecomatin.jfif') }}" alt="" />
                    </div>
                    <div class="info">
                        <b class="">{{ Auth::user()->lastname }}</b>
                        <b class="">{{ Auth::user()->name }}</b>
                        <small>{{ Auth::user()->role }}</small>
                    </div>
                </a>
            </li>
        </ul>


        <ul class="nav">
            <li class="nav-header">Navigation</li>

            <li>
                <a href="{{ url('homecordojt') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('mesarticles') }}">
                    <i class="fa fa-file-alt"></i>
                    <span>Mes articles</span>
                </a>
            </li>

        </ul>


    </div>

</div>
<div class="sidebar-bg"></div>
