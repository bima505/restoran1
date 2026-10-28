<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('Home') }}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('Home') }}" class="nav-item nav-link {{ request()->routeIs('Home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('About') }}" class="nav-item nav-link {{ request()->routeIs('About') ? 'active' : '' }}">About</a>
                <a href="{{ route('Service') }}" class="nav-item nav-link {{ request()->routeIs('Service') ? 'active' : '' }}">Service</a>
                <a href="{{ route('Menu') }}" class="nav-item nav-link {{ request()->routeIs('Menu') ? 'active' : '' }}">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('Booking', 'Team') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('Booking') }}" class="dropdown-item {{ request()->routeIs('Booking') ? 'active' : '' }}">Booking</a>
                        <a href="{{ route('Team') }}" class="dropdown-item {{ request()->routeIs('Team') ? 'active' : '' }}">Our Team</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('Booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav>