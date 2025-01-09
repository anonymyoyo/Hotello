<!DOCTYPE html>
<html lang="en">
@include('user.user.head')

<body class="dashboard">

<!-- Header START -->
@include('user.user.header')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Content START -->
<section class="pt-3">
	<div class="container">
		<div class="row">

			<!-- Sidebar START -->
			@include('user.user.sidebar')
			<!-- Sidebar END -->
            <!-- Main content START -->
			<div class="col-lg-8 col-xl-9 ps-xl-5">

				<!-- Offcanvas menu button -->
				<div class="d-grid mb-0 d-lg-none w-100">
					<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i> Menu
					</button>
				</div>

				<div class="card border bg-transparent">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h4 class="card-header-title">My Bookings</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0">

						<!-- Tabs -->
						<ul class="nav nav-tabs nav-bottom-line nav-responsive nav-justified">
							<li class="nav-item">
								<a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1"><i class="bi bi-briefcase-fill fa-fw me-1"></i>Upcoming Booking</a>
							</li>
							<li class="nav-item">
								<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2"><i class="bi bi-x-octagon fa-fw me-1"></i>Canceled Booking</a>
								</li>
							<li class="nav-item">
								<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3"><i class="bi bi-patch-check fa-fw me-1"></i>Completed Booking</a>
							</li>
						</ul>

						<!-- Tabs content START -->
						<div class="tab-content p-2 p-sm-4" id="nav-tabContent">

							<!-- Tab content item START -->
							<div class="tab-pane fade show active" id="tab-1">
								<h6>Completed booking (2)</h6>
                <!-- Card item START -->
								<div class="card border mb-4">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-plane"></i></div>
											<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">France to New York</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: CGDSUAHA12548</li>
													<li class="nav-item">Business class</li>
												</ul>
											</div>
										</div>

										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="#" class="btn btn-primary-soft mb-0">Manage Booking</a>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Departure time</span>
												<h6 class="mb-0">Tue 05 Aug 12:00 AM</h6>
											</div>

											<div class="col-sm-6 col-md-4">
												<span>Arrival time</span>
												<h6 class="mb-0">Tue 06 Aug 4:00 PM</h6>
											</div>

											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Frances Guerrero</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->

								<!-- Card item START -->
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-car"></i></div>
											<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">Chicago to San Antonio</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: CGDSUAHA12548</li>
													<li class="nav-item">Camry, Accord</li>
												</ul>
											</div>
										</div>

										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="#" class="btn btn-primary-soft mb-0">Manage Booking</a>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Pickup address</span>
												<h6 class="mb-0">40764 Winchester Rd</h6>
											</div>

											<div class="col-sm-6 col-md-4">
												<span>Drop address</span>
												<h6 class="mb-0">11185 Mary Ball Rd</h6>
											</div>

											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Frances Guerrero</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>
							<!-- Tabs content item END -->

							<!-- Tab content item START -->
							<div class="tab-pane fade" id="tab-2">
								<h6>Cancelled booking (1)</h6>

								<!-- Card item START -->
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>
												<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">Courtyard by Marriott New York</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: CGDSUAHA12548</li>
													<li class="nav-item">AC</li>
												</ul>
											</div>
										</div>

										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="#" class="btn btn-primary-soft mb-0">Manage Booking</a>
											<p class="text-danger text-md-end mb-0">Booking cancelled</p>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Check in time</span>
												<h6 class="mb-0">Tue 05 Aug 12:00 AM</h6>
											</div>

											<div class="col-sm-6 col-md-4">
												<span>Check out time</span>
												<h6 class="mb-0">Tue 12 Aug 4:00 PM</h6>
											</div>

											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Frances Guerrero</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>
							<!-- Tabs content item END -->

							<!-- Tab content item START -->
							<div class="tab-pane fade" id="tab-3">
                <div class="bg-mode shadow p-4 rounded overflow-hidden">
									<div class="row g-4 align-items-center">
										<!-- Content -->
										<div class="col-md-9">
											<h6>Looks like you have never booked with BOOKING</h6>
											<h4 class="mb-2">When you book your trip will be shown here.</h4>
											<a href="hotel-list.html" class="btn btn-primary-soft mb-0">Start booking now</a>
										</div>
										<!-- Image -->
										<div class="col-md-3 text-end">
											<img src="assets/images/element/17.svg" class="mb-n5" alt="">
										</div>
									</div>
								</div>

							</div>
							<!-- Tabs content item END -->
						</div>

					</div>
					<!-- Card body END -->
				</div>

			</div>
			<!-- Main content END -->

		</div>
	</div>
</section>
<!-- =======================
Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('user.user.footer')
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>
@include('user.user.script')

</body>
</html>
