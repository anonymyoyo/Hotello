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
            <!-- Active log table -->
					<div class="card shadow mt-4">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Active Logs</h5>
						</div>

						<!-- Card body START -->
						<div class="card-body">
							<!-- Table START -->
							<div class="table-responsive border-0">
								<table class="table align-middle p-4 mb-0 table-hover">

									<!-- Table head -->
									<thead class="table-dark">
										<tr>
											<th scope="col" class="border-0 rounded-start">Browser</th>
											<th scope="col" class="border-0">IP</th>
											<th scope="col" class="border-0">Time</th>
											<th scope="col" class="border-0 rounded-end">Action</th>
										</tr>
									</thead>

									<!-- Table body START -->
									<tbody>

										<!-- Table row -->
										<tr>
											<!-- Table data -->
											<td>Chrome On Window</td>

											<!-- Table data -->
											<td>173.238.198.108</td>

											<!-- Table data -->
											<td>12 Nov 2021</td>

											<!-- Table data -->
											<td>
												<button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
											</td>
										</tr>

										<!-- Table row -->
										<tr>
											<!-- Table data -->
											<td>Mozilla On Window</td>

											<!-- Table data -->
											<td>107.222.146.90</td>

											<!-- Table data -->
											<td>08 Nov 2021</td>

											<!-- Table data -->
											<td>
												<button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
											</td>
										</tr>

										<!-- Table row -->
										<tr>
											<!-- Table data -->
											<td>Chrome On iMac</td>

											<!-- Table data -->
											<td>231.213.125.55</td>

											<!-- Table data -->
											<td>06 Nov 2021</td>

											<!-- Table data -->
											<td>
												<button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
											</td>
										</tr>

										<!-- Table row -->
										<tr>
											<!-- Table data -->
											<td>Mozilla On Window</td>

											<!-- Table data -->
											<td>37.242.105.138</td>

											<!-- Table data -->
											<td>02 Nov 2021</td>

											<!-- Table data -->
											<td>
												<button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
											</td>
										</tr>


									</tbody>
									<!-- Table body END -->
								</table>
							</div>
							<!-- Table END -->
						</div>
						<!-- Card body END -->
					</div>
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
