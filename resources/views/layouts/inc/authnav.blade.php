<header>
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
            <a class="navbar-brand" href="{{url('attendee')}}">
            <img src="/staticimg/sienslogo2.png/" alt="logo" height="70px" width="190px">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Middle Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <a class=" navlinks" href="{{url('landing')}}">
                <li class="nav-item navopts">
                    {{ __('Home') }}
                </li>
                </a>
                <a class=" navlinks" href="{{url('login')}}">
                <li class="nav-item navopts">
                    {{ __('Login') }}
                </li>
                </a>
                <a class=" navlinks" href="{{url('register')}}">
                <li class="nav-item navopts">
                    {{ __('Register') }}
                </li>
                </a>
            </ul>
        </div>
    </div>
</nav>
</header>