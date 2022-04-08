<div class="header">
    <div class="toggle-nav">
        <i class="fas fa-bars toggle"></i>
    </div>
    <div class="nav-bar">
        <div class="logo">
            <img src="{{ asset('/images/hapolearn.png') }}" alt="HapoLearn-Logo">
        </div>
        <ul class="menu-content">
            <li><a href="#">home</a></li>
            <li class="menu-content-active"><a href="#" class="link-allcourse">allcourses</a></li>
            @if(Auth::check())
                <div class="dropdown">
                    <a class="btn btn-success dropdown-toggle text-white text-auth" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user icon-auth"></i>{{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">profile</a>
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault(); $('#logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal-form" class="nav-login">login/register</a>
                </li>
                <li><a href="#">profile</a></li>
            @endif
        </ul>
    </div>
</div>
