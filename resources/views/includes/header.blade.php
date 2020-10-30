<div id="header" class="header navbar-inverse">

    <div class="navbar-header"><a href="#" class="navbar-brand"> <b>EcoMatin</b> Plateforme <small>collaborative</small></a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    </div>

    <ul class="navbar-nav navbar-right">
        <li class="navbar-form">

            <form action=" {{ url('search') }} " method="POST" >

                @csrf

                <div class="form-group">
                    <input type="text" id="words" class="form-control" name="q" placeholder="Recherche..." />
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </div>

            </form>

        </li>

        <li class="dropdown">

            <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                <i class="fa fa-bell"></i>
                <span class="label">5</span>
            </a>

            <div class="dropdown-menu media-list dropdown-menu-right">

                <div class="dropdown-header">NOTIFICATIONS (5)</div>

                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <img src="{{ asset('assets/img/logo/logo2.jfif') }}" class="media-object" alt="" />
                        <i class="fa fa-envelope media-object-icon"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">John Smith</h6>
                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                        <div class="text-muted f-s-10">25 minutes ago</div>
                    </div>
                </a>

            </div>
        </li>

        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('assets/img/logo/logo2.jfif') }}" alt="" />
                <span class="d-none d-md-inline">{{ Auth::user()->lastname }} {{ Auth::user()->name }}</span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="{{route('logout')}}" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>

    </div>




