<div class="header">
    <div class="toggle-nav">
        <i class="fas fa-bars toggle"></i>
    </div>
    <div class="nav-bar">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Unitop-logo"></a>
        </div>
        <ul class="menu-content">
            <li @if(url()->current() == route('home')) class="menu-content-active" @endif><a href="{{route('home')}}">home</a>
            </li>
            <li @if(url()->current() == route('courses.index')) class="menu-content-active" @endif><a
                        href="{{ route('courses.index') }}">allcourses</a></li>
            @if(Auth::check())
                <div class="dropdown">
                    <a class="btn btn-success dropdown-toggle text-white text-auth" href="#" role="button"
                       id="dropdownMenuLink"
                       data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user icon-auth"></i>{{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <form action="{{ route('user-profile.edit', Auth::id())}}">
                            <button class="dropdown-item">
                                PROFILE
                            </button>
                        </form>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item">
                                LOGOUT
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal-form" class="nav-login">login/register</a>
                </li>
            @endif
        </ul>
    </div>
</div>
@include('layouts.modal')
