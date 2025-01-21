<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('home') }}">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15"
                    alt="MDB Logo" loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instrument.create') }}">Add Instrument</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instrument.index') }}">List of the Instruments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instrument.index') }}">List of the Instruments</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>

            
            <!-- Avatar -->
            <div class="dropdown ">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none "
                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://picsum.photos/50" alt="Profile" width="40" height="40"
                        class="rounded-circle">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    @auth
                        <li><a class="dropdown-item font-italic" href="{{ route('instrument.byUser', Auth::user()) }}">Hello, {{ Auth::user()->name }}</a></li>

                        <li><a class="dropdown-item" href="{{ route('home') }}">My Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item border rounded bg-danger text-white" type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li><a class="dropdown-item" href="{{ route('login') }}">Log In</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </div>
            {{-- fine avatar  --}}

            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
</nav>
<!-- Navbar -->
