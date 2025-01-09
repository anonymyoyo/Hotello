<!DOCTYPE html>
<html lang="en">
@include('admin.gerant.header')

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- Sidebar START -->
    @include('../admin.sidebar');
	{{-- <nav class="navbar sidebar navbar-expand-xl navbar-light">
		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
		</div>
		<!-- Navbar brand for xl END -->

		<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
			<div class="offcanvas-body sidebar-content d-flex flex-column pt-4">

				<!-- Sidebar menu START -->
				<ul class="navbar-nav flex-column" id="navbar-sidebar">

					<!-- Menu item -->
					<li class="nav-item"><a href="admin-dashboard.html" class="nav-link">Dashboard</a></li>

					<!-- Title -->
					<li class="nav-item ms-2 my-2">Pages</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
						Bookings
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-booking-list.html">Booking List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-booking-detail.html">Booking Detail</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button" aria-expanded="false" aria-controls="collapseguest">
						Guests
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-guest-list.html">Guest List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-guest-detail.html">Guest Detail</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="true" aria-controls="collapseagent">
						Agents
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column show" id="collapseagent" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link active" href="admin-agent-list.html">Agent List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-agent-detail.html">Agent Detail</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-reviews.html">Reviews</a></li>

					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-earnings.html">Earnings</a></li>

					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-settings.html">Admin Settings</a></li>

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
					<li class="nav-item"> <a class="nav-link" href="docs/changelog.html">Changelog</a></li>
				</ul>
				<!-- Sidebar menu end -->

				<!-- Sidebar footer START -->
				<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
					<a class="h6 fw-light mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
						<i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
					</a>
					<a class="h6 mb-0 text-body" href="admin-settings.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
						<i class="bi bi-gear-fill"></i>
					</a>
				</div>
				<!-- Sidebar footer END -->

			</div>
		</div>
	</nav> --}}
	<!-- Sidebar END -->

	<!-- Page content START -->
	<div class="page-content">

		<!-- Top bar START -->
		{{--  --}}
        @include('admin.gerant.top')
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
            {{-- @include('admin.gerant.topbar') --}}
			<!-- Search and select END -->

			<!-- agent list START -->
			<div class="row g-4">



                <section class="pt-0 pt-lg-5">
                    <div class="container">
                        <div class="row g-4 g-lg-5 align-items-center">
                            <!-- Vector image START -->
                            <div class="col-lg-6 text-center">
                                <img src="{{ asset('assets/images/element/contact.svg') }}" alt="">
                            </div>
                            <!-- Vector image END -->

                            <!-- Contact form START -->
                            <div class="col-lg-6">
                                <div class="card bg-light p-4">
                                    <!-- Svg decoration -->
                                    <figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
                                        <svg class="fill-orange" width="104.2px" height="95.2px">
                                            <circle cx="2.6" cy="92.6" r="2.6"/>
                                            <circle cx="2.6" cy="77.6" r="2.6"/>
                                            <circle cx="2.6" cy="62.6" r="2.6"/>
                                            <circle cx="2.6" cy="47.6" r="2.6"/>
                                            <circle cx="2.6" cy="32.6" r="2.6"/>
                                            <circle cx="2.6" cy="17.6" r="2.6"/>
                                            <circle cx="2.6" cy="2.6" r="2.6"/>
                                            <circle cx="22.4" cy="92.6" r="2.6"/>
                                            <circle cx="22.4" cy="77.6" r="2.6"/>
                                            <circle cx="22.4" cy="62.6" r="2.6"/>
                                            <circle cx="22.4" cy="47.6" r="2.6"/>
                                            <circle cx="22.4" cy="32.6" r="2.6"/>
                                            <circle cx="22.4" cy="17.6" r="2.6"/>
                                            <circle cx="22.4" cy="2.6" r="2.6"/>
                                            <circle cx="42.2" cy="92.6" r="2.6"/>
                                            <circle cx="42.2" cy="77.6" r="2.6"/>
                                            <circle cx="42.2" cy="62.6" r="2.6"/>
                                            <circle cx="42.2" cy="47.6" r="2.6"/>
                                            <circle cx="42.2" cy="32.6" r="2.6"/>
                                            <circle cx="42.2" cy="17.6" r="2.6"/>
                                            <circle cx="42.2" cy="2.6" r="2.6"/>
                                            <circle cx="62" cy="92.6" r="2.6"/>
                                            <circle cx="62" cy="77.6" r="2.6"/>
                                            <circle cx="62" cy="62.6" r="2.6"/>
                                            <circle cx="62" cy="47.6" r="2.6"/>
                                            <circle cx="62" cy="32.6" r="2.6"/>
                                            <circle cx="62" cy="17.6" r="2.6"/>
                                            <circle cx="62" cy="2.6" r="2.6"/>
                                            <circle cx="81.8" cy="92.6" r="2.6"/>
                                            <circle cx="81.8" cy="77.6" r="2.6"/>
                                            <circle cx="81.8" cy="62.6" r="2.6"/>
                                            <circle cx="81.8" cy="47.6" r="2.6"/>
                                            <circle cx="81.8" cy="32.6" r="2.6"/>
                                            <circle cx="81.8" cy="17.6" r="2.6"/>
                                            <circle cx="81.8" cy="2.6" r="2.6"/>
                                            <circle cx="101.7" cy="92.6" r="2.6"/>
                                            <circle cx="101.7" cy="77.6" r="2.6"/>
                                            <circle cx="101.7" cy="62.6" r="2.6"/>
                                            <circle cx="101.7" cy="47.6" r="2.6"/>
                                            <circle cx="101.7" cy="32.6" r="2.6"/>
                                            <circle cx="101.7" cy="17.6" r="2.6"/>
                                            <circle cx="101.7" cy="2.6" r="2.6"/>
                                        </svg>
                                    </figure>

                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 pb-3">
                                        <h3 class="mb-0">Contactez {{ $hotels->name }}</h3>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body p-0">
                                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.message') }}" class="row g-4">
                                            @csrf
                                            <!-- Name -->
                                            <div class="col-md-6">
                                                <label class="form-label">Votre nom *</label>
                                                <input type="text" name="name" required value="{{ auth()->user()->name }}" class="form-control">
                                            </div>
                                            <!-- Email -->
                                            <div class="col-md-6">
                                                <label class="form-label">Addresse mail *</label>
                                                <input type="email" name='email' required value="{{ auth()->user()->email }}" class="form-control">
                                            </div>
                                            <!-- Mobile number -->
                                            <div class="col-12">
                                                <label class="form-label">Objet *</label>
                                                <input type="text" name="objet" class="form-control">
                                            </div>
                                            <!-- Message -->
                                            <div class="col-12">
                                                <label class="form-label">Message *</label>
                                                <textarea name="message" placeholder="Votre message ici!" required class="form-control" rows="3"></textarea>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Piece Jointe *</label>
                                                <input type="file" name="piece_jointe" class="form-control">
                                            </div>
                                            <!-- Checkbox -->
                                            {{-- <div class="col-12 form-check ms-2">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    By submitting this form you agree to our terms and conditions.
                                                </label>
                                            </div> --}}
                                            <!-- Button -->
                                            <div class="col-12">
                                                <button class="btn btn-dark mb-0" type="submit">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                            </div>
                            <!-- Contact form END -->
                        </div>
                    </div>
                </section>


</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('admin.gerant.script');
</body>
</html>
