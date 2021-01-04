<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="{{ url('/home') }}">CamCharity</a>

    <div class="collapse navbar-collapse " id="navbarText">
        <ul class="nav navbar-nav ml-auto">
            @if(Session::has('user'))
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            @else
                <li class="nav-item float-right pl-2 pr-2 ">
                    <a class="nav-link {{ Request::is('loginForm')? 'active' : ''}}"
                       href="{{url('/loginForm')}}">Login</a>
                </li>
                <li class="nav-item float-right pl-2 pr-2 ">
                    <a class="nav-link {{ Request::is('register')? 'active' : ''}}"
                       href="{{url('/register')}}">Register</a>
                </li>
            @endif
            <li class="nav-item float-right pl-2 pr-2 ">
                <a class="nav-link {{ Request::is('home')? 'active' : ''}}" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item float-right pl-2 pr-2 ">
                <a class="nav-link {{ Request::is('donation')? 'active' : ''}}"
                   href="{{url('/donation')}}">Donation</a>
            </li>
            <li class="nav-item float-right pl-2 pr-2 ">
                <a class="nav-link {{ Request::is('event')? 'active' : ''}}"
                   href="{{url('/event')}}">Event</a>
            </li>
        </ul>
    </div>
</nav>
