<nav class="navbar sidebar navbar-expand-xl navbar-light">
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
            <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.svg') }}" alt="logo">
            <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.svg') }}" alt="logo">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">
                <!-- Menu item -->
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link active">Dashboard</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Pages</li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
                    Reservations
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('booking.list') }}">Booking List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin-booking-detail.html">Booking Detail</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button" aria-expanded="false" aria-controls="collapseguest">
                    Utilisateurs
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
                        {{--  --}}
                        <li class="nav-item"> <a class="nav-link" href="{{ route('guest.list_client') }}">Clients</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('guest.list_gerant') }}">Gerants</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="false" aria-controls="collapseagent">
                    Hotels
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
                        {{--  --}}
                        <li class="nav-item"> <a class="nav-link" href="{{ route('list') }}">Listes</a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin-agent-detail.html">Agent Detail</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#">Reviews</a></li>
                {{-- {{ route('reviews') }} --}}

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#">Earnings</a></li>
                {{-- {{ route('earning') }} --}}

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="#">Admin Settings</a></li>
                {{-- {{ route('settings') }} --}}

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
                        Authentication
                    </a>
                    <!-- Submenu -->


                    <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="sign-up.html">Sign Up</a></li>
                        <li class="nav-item"> <a class="nav-link" href="sign-in.html">Sign In</a></li>
                        <li class="nav-item"> <a class="nav-link" href="forgot-password.html">Forgot Password</a></li>
                        <li class="nav-item"> <a class="nav-link" href="error.html">Error 404</a></li>
                    </ul>
                </li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Documentation</li>

                <!-- Menu item -->
                <li class="nav-item"> <a class="nav-link" href="docs/index.html">Documentation</a></li>

                <!-- Menu item -->
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">

                <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
                </form>

                <a class="h6 fw-light mb-0 text-body" onclick="event.preventDefault();
                document.getElementById('logout').submit();" >
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                </a>

            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>
