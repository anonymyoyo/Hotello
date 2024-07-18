<!DOCTYPE html>
<html lang="en">
@include('gerant.header');

<body>



<!-- Header START -->
<header class="navbar-light header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.svg') }}" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.svg') }}" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<!-- Main navbar END -->

			<!-- Profile and Notification START -->
			@include('gerant.profil_notification')
			<!-- Profile and Notification START -->

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Menu item START -->
@include('gerant.menu')
<!-- =======================
Menu item END -->

<section class="pt-0">
	<div class="container vstack gap-4">
		<!-- Title START -->
		<div class="row">
			<div class="col-12">
				<h1 class="fs-4 mb-0"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</h1>
			</div>
		</div>
		<!-- Title END -->

		<!-- Booking table START -->
		<div class="row">
			<div class="col-12">
				<div class="card border">
					<!-- Card header START -->
					<div class="card-header border-bottom">
						<h5 class="card-header-title">Bookings<span class="badge bg-primary bg-opacity-10 text-primary ms-2">20 Rooms</span></h5>
					</div>
					<!-- Card header END -->
                        {{-- {{ route('create.chambres') }} --}}
					<!-- Card body START -->
					<div class="card-body">
						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-3">
							<!-- Search -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
									<button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
								</form>
							</div>

							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select js-choice" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option>Free</option>
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Hotel room list START -->
						<div class="table-responsive border-0">
							<table class="table align-middle p-4 mb-0 table-hover table-shrink">
								<!-- Table head -->
								<thead class="table-light">
									<tr>
										<th scope="col" class="border-0 rounded-start">#</th>
										<th scope="col" class="border-0">Name</th>
										<th scope="col" class="border-0">Type</th>
										<th scope="col" class="border-0">Date</th>
										<th scope="col" class="border-0">Status</th>
										<th scope="col" class="border-0">Payment</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody class="border-top-0">
									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">01</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Deluxe Pool View</a></h6> </td>
										<td> With Breakfast </td>
										<td> <h6 class="mb-0 fw-light">Nov 22 - 25</h6> </td>
										<td> <div class="badge text-bg-success">Booked</div> </td>
										<td> <div class="badge bg-success bg-opacity-10 text-success">Full payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">02</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Deluxe Pool View with Breakfast</a></h6> </td>
										<td> Free Cancellation | Breakfast only </td>
										<td> <h6 class="mb-0 fw-light">Nov 24 - 28</h6> </td>
										<td> <div class="badge text-bg-success">Booked</div> </td>
										<td> <div class="badge bg-orange bg-opacity-10 text-orange">On Property</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">03</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Luxury Room with Balcony</a></h6> </td>
										<td> Free Cancellation | Breakfast + Lunch/Dinner </td>
										<td> <h6 class="mb-0 fw-light">Nov 24 - 28</h6> </td>
										<td> <div class="badge text-bg-info">Reserved</div> </td>
										<td> <div class="badge bg-info bg-opacity-10 text-info">Half Payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">04</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Deluxe Room Twin Bed With Balcony</a></h6> </td>
										<td> Free Cancellation </td>
										<td> <h6 class="mb-0 fw-light">Nov 28 - 30</h6> </td>
										<td> <div class="badge text-bg-success">Booked</div> </td>
										<td> <div class="badge bg-success bg-opacity-10 text-success">Full Payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">05</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Deluxe Room Twin Bed With Balcony</a></h6> </td>
										<td> Free Cancellation | Breakfast only </td>
										<td> - </td>
										<td> <div class="badge text-bg-warning">Available</div> </td>
										<td> - </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">06</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Premium Room With Balcony</a></h6> </td>
										<td> Free Cancellation | Breakfast only </td>
										<td> <h6 class="mb-0 fw-light">Nov 14 - 18</h6> </td>
										<td> <div class="badge text-bg-danger">Cancel</div> </td>
										<td> - </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">07</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Deluxe Room King Bed with Balcony</a></h6> </td>
										<td> Free Cancellation </td>
										<td> <h6 class="mb-0 fw-light">Nov 28 - 30</h6> </td>
										<td> <div class="badge text-bg-info">Reserved</div> </td>
										<td> <div class="badge bg-success bg-opacity-10 text-success">Full Payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">08</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Superior Room</a></h6> </td>
										<td> With Breakfast </td>
										<td> <h6 class="mb-0 fw-light">Nov 22 - 25</h6> </td>
										<td> <div class="badge text-bg-success">Booked</div> </td>
										<td> <div class="badge bg-success bg-opacity-10 text-success">Full payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">09</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Studio Suite King</a></h6> </td>
										<td> Free Cancellation | Breakfast only </td>
										<td> <h6 class="mb-0 fw-light">Nov 21 - 24</h6> </td>
										<td> <div class="badge text-bg-info">Reserved</div> </td>
										<td> <div class="badge bg-info bg-opacity-10 text-info">Half payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>

									<!-- Table item -->
									<tr>
										<td> <h6 class="mb-0">10</h6> </td>
										<td> <h6 class="mb-0"><a href="#">Rock Family Suite</a></h6> </td>
										<td> Free Cancellation | Breakfast + Lunch/Dinner </td>
										<td> <h6 class="mb-0 fw-light">Dec 02 - 06</h6> </td>
										<td> <div class="badge text-bg-success">Booked</div> </td>
										<td> <div class="badge bg-success bg-opacity-10 text-success">Full payment</div> </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Hotel room list END -->
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
		 </div>
		<!-- Booking table END -->
	</div>
</section>

    <!-- =======================
    Content END -->

</main>



<!-- =======================
Footer START -->
@include('gerant.footer')
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
@include('gerant.script');
</body>
</html>

