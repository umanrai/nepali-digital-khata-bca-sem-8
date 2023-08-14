<header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="/"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#features">App Features</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#faq">F.A.Q</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li>
                    <a class="getstarted scrollto" title="Login" href="{{ route('login') }}">
                        {{ auth()->check() ? 'Home' : 'Login' }} <i class="bx bx-log-in" style="font-size: 18px;"></i>
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
