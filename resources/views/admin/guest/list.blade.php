<!DOCTYPE html>
<html lang="en">
@include('../admin.header')
<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- Sidebar START -->


		@include('../admin.sidebar')
	<!-- Sidebar END -->

	<!-- Page content START -->
	<div class="page-content">

		<!-- Top bar START -->
		@include('../admin.topbar')
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-3 mb-sm-0">Liste des utiliateurs</h1>
						<div class="d-grid"><a href="{{ route('guest.create') }}" class="btn btn-primary mb-0"><i class="bi bi-filetype-pdf me-2"></i>Nouveau gerant</a>	</div>
					</div>
				</div>
			</div>

			<!-- Filters START -->
			<div class="row g-4 align-items-center">
				<!-- Tabs -->
				<div class="col-lg-6">
					<ul class="nav nav-pills-shadow nav-responsive">
						<li class="nav-item">
							<a class="nav-link mb-0 active"  href="#tab-1">Clients</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mb-0"  href="#tab-2">Reserve</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mb-0"  href="#tab-3">Annule</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mb-0"  href="#tab-4">En attente</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link mb-0" href="#tab-5">Gerant</a>
						</li>
					</ul>
				</div>

				<!-- Search -->
				<div class="col-md-6 col-lg-3">
					<form class="rounded position-relative">
						<input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
						<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
							<i class="fas fa-search fs-6"></i>
						</button>
					</form>
				</div>

				<!-- Select -->
				<div class="col-md-6 col-lg-3">
					<form>
						<select class="form-select js-choice" aria-label=".form-select-sm">
							<option value="">Sort by hotels</option>
							<option>Pride moon Village Resort & Spa</option>
							<option>Courtyard by Marriott New York</option>
							<option>Park Plaza Lodge Hotel</option>
							<option>Royal Beach Resort</option>
						</select>
					</form>
				</div>
			</div>
			<!-- Filters END -->

			<!-- Guest list START -->
			{{-- <div class="card shadow mt-5" id="tab-1">
				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Guest</h6></div>
							<div class="col"><h6 class="mb-0">Booking Date</h6></div>
							<div class="col"><h6 class="mb-0">Check-In</h6></div>
							<div class="col"><h6 class="mb-0">Check-Out</h6></div>
							<div class="col"><h6 class="mb-0">Room No</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Lori Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">16 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G103</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Billy Vasquez</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">29 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">10 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">14 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Samuel Bishop</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Amanda Reed</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">10 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">05 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Jacqueline Miller</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">27 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Joan Wallace</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">23 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">26 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">F105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Dennis Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Louis Ferguson</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer pt-0">
					<!-- Pagination and content -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
				</div>
				<!-- Card footer END -->
			</div>
			<!-- Guest list END -->

            <!-- Guest list START -->
			<div class="card shadow mt-5" id="tab-2">
				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Guest</h6></div>
							<div class="col"><h6 class="mb-0">Booking Date</h6></div>
							<div class="col"><h6 class="mb-0">Check-In</h6></div>
							<div class="col"><h6 class="mb-0">Check-Out</h6></div>
							<div class="col"><h6 class="mb-0">Room No</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Lori Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">16 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G103</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Billy Vasquez</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">29 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">10 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">14 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Samuel Bishop</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Amanda Reed</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">10 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">05 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Jacqueline Miller</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">27 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Joan Wallace</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">23 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">26 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">F105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Dennis Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Louis Ferguson</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer pt-0">
					<!-- Pagination and content -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
				</div>
				<!-- Card footer END -->
			</div>
			<!-- Guest list END -->

            <!-- Guest list START -->
			<div class="card shadow mt-5" id="tab-3">
				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Guest</h6></div>
							<div class="col"><h6 class="mb-0">Booking Date</h6></div>
							<div class="col"><h6 class="mb-0">Check-In</h6></div>
							<div class="col"><h6 class="mb-0">Check-Out</h6></div>
							<div class="col"><h6 class="mb-0">Room No</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Lori Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">16 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G103</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Billy Vasquez</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">29 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">10 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">14 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Samuel Bishop</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Amanda Reed</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">10 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">05 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Jacqueline Miller</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">27 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Joan Wallace</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">23 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">26 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">F105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Dennis Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Louis Ferguson</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer pt-0">
					<!-- Pagination and content -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
				</div>
				<!-- Card footer END -->
			</div>
			<!-- Guest list END -->

            <!-- Guest list START -->
			<div class="card shadow mt-5" id="tab-4">
				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">Guest</h6></div>
							<div class="col"><h6 class="mb-0">Booking Date</h6></div>
							<div class="col"><h6 class="mb-0">Check-In</h6></div>
							<div class="col"><h6 class="mb-0">Check-Out</h6></div>
							<div class="col"><h6 class="mb-0">Room No</h6></div>
							<div class="col"><h6 class="mb-0">Status</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Lori Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">16 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G103</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Billy Vasquez</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">29 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">10 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">14 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Samuel Bishop</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Amanda Reed</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">10 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">05 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Jacqueline Miller</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">27 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">01 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Joan Wallace</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">05 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">23 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">26 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">F105</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Dennis Stevens</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">07 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">09 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booked by:</small>
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar avatar-xs flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-2">
									<h6 class="mb-0 fw-light">Louis Ferguson</h6>
								</div>
							</div>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Booking date:</small>
							<h6 class="mb-0 fw-normal">02 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-in:</small>
							<h6 class="mb-0 fw-normal">18 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Check-out:</small>
							<h6 class="mb-0 fw-normal">22 Dec 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room no:</small>
							<h6 class="mb-0 fw-normal">G102</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Payment:</small>
							<div class="badge bg-success bg-opacity-10 text-success">Booked</div>
						</div>

						<!-- Data item -->
						<div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer pt-0">
					<!-- Pagination and content -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
				</div>
				<!-- Card footer END -->
			</div> --}}
			<!-- Guest list END -->

            <!-- Guest list START -->
			<div class="card shadow mt-5" id="tab-5">
                <h6 class="h3 mb-3 mb-sm-0">Liste des Gerants</h1>

				<!-- Card body START -->
				<div class="card-body">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-11 g-4">
                            <div class="col"><h6 class="mb-0">Id</h6></div>
							<div class="col"><h6 class="mb-0">Nom</h6></div>
							<div class="col"><h6 class="mb-0">Email</h6></div>
							<div class="col"><h6 class="mb-0">Contact</h6></div>
							<div class="col"><h6 class="mb-0">Addresse</h6></div>
							<div class="col"><h6 class="mb-0">Ville</h6></div>
							<div class="col"><h6 class="mb-0">Pays</h6></div>
							{{-- <div class="col"><h6 class="mb-0">Roles</h6></div> --}}
                            <div class="col"><h6 class="mb-0">Date d'adhesion</h6></div>
                            <div class="col"><h6 class="mb-0">Statut</h6></div>
                            <div class="col"><h6 class="mb-0">Detail</h6></div>
						</div>
					</div>

					<!-- Table data -->
                    @foreach ($user as $users)
                        @if ($users->roles_id === 3)
                            <div class="row row-cols-xl-10 align-items-lg-center border-bottom g-4 px-2 py-4">
                                <!-- Data item -->
                                <div class="col">
                                    <h6 class="mb-0 fw-normal">{{ $users->id }}</h6>
                                </div>

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Booked by:</small>
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">{{ $users->name }}</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Booking date:</small>
                                    <h6 class="mb-0 fw-normal">{{ $users->email }}</h6>
                                </div>

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Check-in:</small>
                                    <h6 class="mb-0 fw-normal">{{ $users->contact }}</h6>
                                </div>

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Check-out:</small>
                                    <h6 class="mb-0 fw-normal">{{ $users->addresse }}</h6>
                                </div>


                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Check-out:</small>
                                    <h6 class="mb-0 fw-normal">{{ $users->ville }}</h6>
                                </div>

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Room no:</small>
                                    <h6 class="mb-0 fw-normal">{{ $users->pays }}</h6>
                                </div>

                                <!-- Data item -->
                                {{-- @if (auth()->$users->user_id === $roles->id) --}}

                                {{-- <div class="col">
                                    <small class="d-block d-lg-none">Room no:</small>
                                    <h6 class="mb-0 fw-normal">{{ $users->user_id }}</h6>
                                </div> --}}
                        {{-- @endif --}}

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Payment:</small>
                                    <div class="badge bg-success bg-opacity-10 text-success">{{ $users->created_at }}</div>
                                </div>

                                <!-- Data item -->
                                <div class="col">
                                    <small class="d-block d-lg-none">Payment:</small>
                                    <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                                </div>
                                <!-- Data item -->
                                <div class="col"><a href="{{ route('guest.detail', $users->id) }}" class="btn btn-sm btn-light mb-0">View</a></div>

                            </div>
                        @endif

                    @endforeach

				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer pt-0">
					<!-- Pagination and content -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
				</div>
				<!-- Card footer END -->
			</div>
			<!-- Guest list END -->
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->

	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('../admin.script')

</body>
</html>
