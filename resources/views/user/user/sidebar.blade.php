<div class="col-lg-4 col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar" >
        <!-- Offcanvas header -->
        <div class="offcanvas-header justify-content-end pb-2">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
        </div>

        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-lg-0">
            <div class="card bg-light w-100">

                <!-- Edit profile button -->
                <div class="position-absolute top-0 end-0 p-3">
                    <a href="#" class="text-primary-hover" data-bs-toggle="tooltip" data-bs-title="Edit profile">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </div>

                <!-- Card body START -->
                <div class="card-body p-3">
                    <!-- Avatar and content -->
                    <div class="text-center mb-3">
                        <!-- Avatar -->
                        <div class="avatar avatar-xl mb-2">
                            <img class="avatar-img rounded-circle border border-2 border-white" src="assets/images/avatar/01.jpg" alt="">
                        </div>
                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                        <a href="#" class="text-reset text-primary-hover small">{{ auth()->user()->email }}</a>
                        <hr>
                    </div>

                    <!-- Sidebar menu item START -->
                    <ul class="nav nav-pills-primary-soft flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('profile') }}"><i class="bi bi-person fa-fw me-2"></i>Mon Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.reservations') }}"><i class="bi bi-ticket-perforated fa-fw me-2"></i>Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.voyages') }}"><i class="bi bi-people fa-fw me-2"></i>Voyages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.transactions') }}"><i class="bi bi-wallet fa-fw me-2"></i>Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.favoris') }}"><i class="bi bi-heart fa-fw me-2"></i>Favoris</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.reglages') }}"><i class="bi bi-gear fa-fw me-2"></i>Reglages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account-delete.html"><i class="bi bi-trash fa-fw me-2"></i>Supprimer profile</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" id="logout">
                                @csrf

                            </form><a class="nav-link text-danger bg-danger-soft-hover" onclick="event.preventDefault();
                                document.getElementById('logout').submit();"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a>
                            {{-- <a class="nav-link text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a> --}}
                        </li>
                    </ul>
                    <!-- Sidebar menu item END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
    </div>
    <!-- Responsive offcanvas body END -->
</div>
