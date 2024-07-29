<!DOCTYPE html>
<html lang="en">
    @include('admin.gerant.header')
<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- Sidebar START -->
	@include('../admin.sidebar');
	<!-- Sidebar END -->

	<!-- Page content START -->
	<div class="page-content">

		<!-- Top bar START -->
		@include('admin.gerant.top')
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Booking</h1>
						{{-- <div class="d-grid"><a href="{{ route('room.category') }}" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> Ajouter une nouvelle categorie de chambres</a></div> --}}
					</div>
				</div>
			</div>

			<!-- Counter START -->
			@include('admin.booking.counter')
			<!-- Counter END -->

			<!-- Tabs and search START -->
			<div class="row g-4 justify-content-between align-items-center">
				<div class="col-lg-5">
					<!-- Tabs -->
					<ul class="nav nav-pills-shadow nav-responsive">
						<li class="nav-item">
							<a class="nav-link mb-0 me-sm-2 active" data-bs-toggle="tab" href="#tab-1">All Status</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mb-0 me-sm-2" data-bs-toggle="tab" href="#tab-2">Available</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">Sold Out</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link mb-0"  href="{{ route('category.room') }}">Categories</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-6 col-xxl-5">
					<div class="d-sm-flex gap-4 justify-content-between justify-content-lg-end">
						<!-- Search -->
						<div class="col-md-8">
							<form class="rounded position-relative">
								<input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
								<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
									<i class="fas fa-search fs-6"></i>
								</button>
							</form>
						</div>
						<!-- Tabs -->
						<div class="d-flex justify-content-end mt-2 mt-sm-0">
							<ul class="nav nav-pills nav-pills-dark" id="room-pills-tab" role="tablist">
								<!-- Tab item -->
								<li class="nav-item">
									 <button class="nav-link rounded-start rounded-0 active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid-tab-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="true"><i class="bi fa-fw bi-grid-fill"></i></button>
								</li>
								<!-- Tab item -->
								<li class="nav-item">
									<button class="nav-link rounded-end rounded-0" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false"><i class="bi fa-fw bi-list-ul"></i></button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Tabs and search END -->

			<!-- Tab content START -->
			<div class="tab-content mt-5" id="myTabContent">
				<!-- Content item START -->
				<div class="tab-pane fade show active" id="grid-tab-pane">
					<!-- Rooms START -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-5 g-4">
						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/02.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction1">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Deluxe Pool View with Breakfast</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Ground Floor: G5
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Double Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$1500</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/03.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction2">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Premium Room With Balcony</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>First Floor: F3
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Single Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$750</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/04.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.2</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction3">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Deluxe Pool View</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Ground Floor: G3
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Family Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$895</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/05.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction4">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Superior Room</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>First Floor: F5
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>King Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$750</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/06.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction5" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction5">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Studio Suite King</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Fifth Floor: Ft3
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Double Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$1458</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/08.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.6</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction6" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction6">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Rock Family Suite</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Second Floor: S4
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Single Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$1020</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/09.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.6</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction7" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction7">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Luxury Room with Balcony</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Third Floor: T2
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Family Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$847</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/01.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>3.9</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction8" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction8">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Premium Room With Balcony</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Third Floor: T4
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Family Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$995</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/11.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.8</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction9" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction9">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Deluxe Room Twin Bed With Balcony</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Fifth Floor: Ft1
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>Double Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$1650</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>

						<!-- Room item -->
						<div class="col">
							<div class="card shadow h-100">
								<!-- Overlay item -->
								<div class="position-relative">
									<!-- Image -->
									<img src="assets/images/category/hotel/4by3/12.jpg" class="card-img-top" alt="Card image">
									<!-- Overlay -->
									<div class="card-img-overlay d-flex flex-column p-3">
										<!-- Card overlay top -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.6</div>
											<!-- Buttons -->
											<div class="list-inline-item dropdown">
												<!-- Dropdown button -->
												<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction10" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="bi bi-three-dots-vertical"></i>
												</a>
												<!-- dropdown items -->
												<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction10">
													<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
													<li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Card body START -->
								<div class="card-body px-3">
									<!-- Title -->
									<h5 class="card-title mb-1"><a href="admin-booking-detail.html">Rock Family Suite</a></h5>
									<ul class="list-group list-group-borderless small mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-building fa-fw me-2"></i>Second Floor: S4
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-bed fa-fw me-2"></i>King Bed
										</li>
									</ul>
								</div>
								<!-- Card body END -->

								<!-- Card footer START-->
								<div class="card-footer pt-0">
									<!-- Price -->
									<div class="hstack gap-2 mb-2">
										<h6 class="fw-normal mb-0">$1420</h6>
										<small>/per person</small>
									</div>
									<a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Rooms END -->

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
				<!-- Content item END -->

				<!-- Content item START -->
				<div class="tab-pane fade" id="list-tab-pane">
					<div class="card shadow">

						<!-- Card body START -->
						<div class="card-body">
							<!-- Table head -->
							<div class="bg-light rounded p-3 d-none d-xxl-block">
								<div class="row row-cols-6 g-4">
									<div class="col"><h6 class="mb-0">Room Name</h6></div>
									<div class="col"><h6 class="mb-0">Bed Type</h6></div>
									<div class="col"><h6 class="mb-0">Room Floor</h6></div>
									<div class="col"><h6 class="mb-0">Amount</h6></div>
									<div class="col"><h6 class="mb-0">Rating</h6></div>
									<div class="col"><h6 class="mb-0">Action</h6></div>
								</div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/01.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Deluxe Pool View with Breakfast</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">King Size</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">Ground Floor: G5</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$1025</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/02.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Premium Room With Balcony</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">Single Bed</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">First Floor: F3</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$750</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/03.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Deluxe Pool View</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">Family Bed</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">Ground Floor: G3</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$895</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/04.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Superior Room</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">King Bed</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">First Floor: F5</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$750</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/05.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Studio Suite King</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">Double Bed</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">Fifth Floor: Ft3</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$1458</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/06.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Luxury Room with Balcony</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">Family Bed</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">Third Floor: T2</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$847</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
							</div>

							<!-- Table data -->
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room name:</small>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-80px flex-shrink-0">
											<img src="assets/images/category/hotel/4by3/07.jpg" class="rounded" alt="">
										</div>
										<!-- Title -->
										<h6 class="mb-0 ms-2">Deluxe Room Twin Bed With Balcony</h6>
									</div>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Bed Type:</small>
									<h6 class="mb-0 fw-normal">Double Bed</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Room Floor:</small>
									<h6 class="mb-0 fw-normal">Fifth Floor: Ft1</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Amount:</small>
									<h6 class="text-success mb-0">$1650</h6>
								</div>

								<!-- Data item -->
								<div class="col">
									<small class="d-block d-xxl-none">Payment:</small>
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
									</ul>
								</div>

								<!-- Data item -->
								<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
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
				</div>
				<!-- Content item END -->
			</div>
			<!-- Tab content END -->
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->

	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('admin.gerant.script')
</body>
</html>
