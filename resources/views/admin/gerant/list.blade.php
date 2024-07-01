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
            @include('admin.gerant.topbar')
			<!-- Search and select END -->

			<!-- agent list START -->
			<div class="row g-4">
				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>

                        @foreach ($hotels as $hotel )
                            <div class="card-body text-center pb-0">
                                <!-- Avatar Image -->
                                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                                </div>
                                <!-- Title -->
                                <h5 class="mb-1">{{ $hotel->name }}</h5>
                                <small><i class="bi bi-geo-alt me-1"></i>Los Angeles, USA</small>
                                <!-- Info and rating -->
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 04</h6>
                                    <h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex gap-3 align-items-center">
                                <a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
                            </div>
                        @endforeach
						<!-- Card body -->

					</div>
				</div>

				{{-- <!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Carolyn Ortiz</h5>
							<small><i class="bi bi-geo-alt me-1"></i>New York, USA</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 02</h6>
								<h6 class="mb-0 small">4.3<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<div class="avatar-img rounded-circle bg-primary bg-opacity-10"><span class="text-primary position-absolute top-50 start-50 translate-middle fw-bold">HB</span></div>
							</div>
							<!-- Title -->
							<h5 class="mb-1">Helios Beach Resort</h5>
							<small><i class="bi bi-geo-alt me-1"></i>California, USA</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Hotel number:</span> 03</h6>
								<h6 class="mb-0 small">3.9<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare4" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare4">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Dennis Barrett</h5>
							<small><i class="bi bi-geo-alt me-1"></i>London, England</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 05</h6>
								<h6 class="mb-0 small">4.2<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare5" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare5">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<div class="avatar-img rounded-circle bg-danger bg-opacity-10"><span class="text-danger position-absolute top-50 start-50 translate-middle fw-bold">PPL</span></div>
							</div>
							<!-- Title -->
							<h5 class="mb-1">Park Plaza Lodge Hotel</h5>
							<small><i class="bi bi-geo-alt me-1"></i>Berlin, Germany</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Hotel number:</span> 01</h6>
								<h6 class="mb-0 small">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare6" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare6">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Jacqueline Miller</h5>
							<small><i class="bi bi-geo-alt me-1"></i>Hanover, Germany</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 02</h6>
								<h6 class="mb-0 small">4.1<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare7" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare7">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Amanda Reed</h5>
							<small><i class="bi bi-geo-alt me-1"></i>Tokyo, Japan</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 04</h6>
								<h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare8" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare8">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Louis Ferguson</h5>
							<small><i class="bi bi-geo-alt me-1"></i>Yokohama, Japan</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 03</h6>
								<h6 class="mb-0 small">4.0<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare9" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare9">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Joan Wallace</h5>
							<small><i class="bi bi-geo-alt me-1"></i>Mumbai, India</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 02</h6>
								<h6 class="mb-0 small">5.0<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div>

				<!-- Card item -->
				<div class="col-md-6 col-lg-4 col-xxl-3">
					<div class="card border h-100">
						<!-- Dropdown button -->
						<div class="dropdown position-absolute top-0 end-0 m-3">
							<a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare10" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare10">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
						<!-- Card body -->
						<div class="card-body text-center pb-0">
							<!-- Avatar Image -->
							<div class="avatar avatar-xl flex-shrink-0 mb-3">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
							</div>
							<!-- Title -->
							<h5 class="mb-1">Dennis Stevens</h5>
							<small><i class="bi bi-geo-alt me-1"></i>Los Angeles, USA</small>
							<!-- Info and rating -->
							<div class="d-flex justify-content-between mt-3">
								<h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 04</h6>
								<h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
							</div>
						</div>
						<!-- card footer -->
						<div class="card-footer d-flex gap-3 align-items-center">
							<a href="admin-agent-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
							<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i class="bi bi-envelope"></i></a>
						</div>
					</div>
				</div> --}}
			</div>
			<!-- agent list END -->

			<!-- Pagination START -->
			<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4">
				<!-- Content -->
				<p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
				<!-- Pagination -->
				<nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
					<ul class="pagination pagination-sm pagination-primary-soft mb-0">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Prev</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item disabled"><a class="page-link" href="#">..</a></li>
						<li class="page-item"><a class="page-link" href="#">15</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
			<!-- Pagination END -->

		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->

	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('admin.gerant.script');
</body>
</html>
