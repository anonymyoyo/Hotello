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

			<div class="card shadow">
				<!-- Card header -->
				<div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
					<!-- Avatar and content -->
					<div class="d-flex align-items-center flex-shrink-0">
						<!-- Avatar -->
						<div class="avatar avatar-lg">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
						</div>
						<!-- Info -->
						<div class="ms-3">
							<h5 class="mb-0">{{ $user->name }}</h5>
						</div>
					</div>

					<div class="d-block d-lg-flex gap-lg-5 flex-wrap mt-3 mt-lg-0">
						<!-- Email address -->
						<h6 class="mb-2 mb-lg-0"><i class="bi bi-envelope-fill fa-fw me-1"></i>Email id:<a href="#" class="fw-normal"> {{ $user->email }}</a></h6>
						<!-- Email address -->
						<h6 class="mb-0"><i class="bi bi-headset fa-fw me-1"></i>Contact no:<a href="#" class="fw-normal"> {{ $user->contact }}</a></h6>
					</div>
				</div>

				<!-- Card body -->
				<div class="card-body">

					<!-- Title -->
					<h5 class="mb-3">Booking History</h5>

					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block">
						<div class="row row-cols-6 justify-content-between g-4">
							<div class="col"><h6 class="mb-0">Room Name</h6></div>
							<div class="col"><h6 class="mb-0">Bed type</h6></div>
							<div class="col"><h6 class="mb-0">Room Floor</h6></div>
							<div class="col"><h6 class="mb-0">Book Date</h6></div>
							<div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-sm-4 align-items-md-center justify-content-between border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room name:</small>
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
							<small class="d-block d-lg-none">Bed type:</small>
							<h6 class="mb-0 fw-normal">King size</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room Floor:</small>
							<h6 class="mb-0 fw-normal">Ground floor: G5</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Book date:</small>
							<h6 class="text-success mb-0">22 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-sm-4 align-items-md-center justify-content-between border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room name:</small>
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
							<small class="d-block d-lg-none">Bed type:</small>
							<h6 class="mb-0 fw-normal">Single Bed</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room Floor:</small>
							<h6 class="mb-0 fw-normal">First Floor: F3</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Book date:</small>
							<h6 class="text-success mb-0">20 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-sm-4 align-items-md-center justify-content-between border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room name:</small>
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
							<small class="d-block d-lg-none">Bed type:</small>
							<h6 class="mb-0 fw-normal">Family Bed</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room Floor:</small>
							<h6 class="mb-0 fw-normal">Ground Floor: G3</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Book date:</small>
							<h6 class="text-success mb-0">16 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>

					<!-- Table data -->
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-sm-4 align-items-md-center justify-content-between border-bottom px-2 py-4">
						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room name:</small>
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
							<small class="d-block d-lg-none">Bed type:</small>
							<h6 class="mb-0 fw-normal">King Bed</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Room Floor:</small>
							<h6 class="mb-0 fw-normal">First Floor: F5</h6>
						</div>

						<!-- Data item -->
						<div class="col">
							<small class="d-block d-lg-none">Book date:</small>
							<h6 class="text-success mb-0">14 Nov 2022</h6>
						</div>

						<!-- Data item -->
						<div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
					</div>
				</div>
			</div>
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
