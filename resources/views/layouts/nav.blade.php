
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="/staticimg/sienslogo2.png/" alt="logo" height="70px" width="190px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navlinks" href="{{ url('home') }}">
                    <li class="navopts"> 
                        HOME
                    </li>
                </a>
                <a class="navlinks" href="{{ url('prodpage') }}">
                <li class="navopts"> 
                    PRODUCTS
                </li>
                </a>
                <a class="navlinks" href="{{ url('/shipping') }}">
                <li class="navopts">
                    SHIPPING                   
                </li>
                </a> 
                <a class="navlinks" href="{{ url('/contacts') }}">
                <li class="navopts"> 
                    CONTACT US
                </li>
                </a> 
                <a class="navlinks" href="{{ url('/aboutus') }}">
                <li class="navopts"> 
                    ABOUT US
                </li>
                </a> 
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</header>

