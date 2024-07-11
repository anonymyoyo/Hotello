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

    <!-- =======================
    Content START -->
    <section class="pt-0">
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0"><i class="bi bi-journals fa-fw me-1"></i>Listings</h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Counter START -->
            <div class="row g-4">

                <!-- Earning item -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body border p-4 h-100">
                        <h6>Earning
                            <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="After US royalty withholding tax" data-bs-original-title="" title="">
                                <i class="bi bi-info-circle-fill small"></i>
                            </a>
                        </h6>
                        <h2 class="text-success">$25,869</h2>
                        <p class="mb-2"><span class="text-primary me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last month</p>
                        <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">View statement</a></div>
                    </div>
                </div>

                <!-- Booked Rooms item -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body border p-4 h-100">
                        <h6>Booked Rooms</h6>
                        <h2 class="text-info">58</h2>
                        <p class="mb-2"><span class="text-danger me-1">102</span>Total Rooms</p>
                        <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">View Bookings</a></div>
                    </div>
                </div>

                <!-- Available Rooms item -->
                <div class="col-md-6 col-xl-4">
                    <div class="card card-body border p-4 h-100">
                        <h6>Available Rooms</h6>
                        <h2 class="text-warning">42</h2>
                        <p class="mb-2"><span class="text-danger me-1">102</span>Total Rooms</p>
                        <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">View Rooms</a></div>
                    </div>
                </div>

            </div>
            <!-- Counter END -->

            <!-- Listing table START -->
            <div class="row">
                <div class="col-12">

                    <div class="card border">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <h5 class="card-header-title">My Listings <span class="badge bg-primary bg-opacity-10 text-primary ms-2">5 Items</span></h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body vstack gap-3">
                            <!-- Listing item START -->
                            <div class="card border p-2">
                                <div class="row g-4">
                                    <!-- Card img -->
                                    <div class="col-md-3 col-lg-2">
                                        <img src="assets/images/category/hotel/4by3/10.jpg" class="card-img rounded-2" alt="Card image">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-9 col-lg-10">
                                        <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                            <!-- Buttons -->
                                            <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction2">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                                </ul>
                                            </div>

                                            <!-- Title -->
                                            <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village Resort & Spa</a></h5>
                                            <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

                                            <!-- Price and Button -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                <!-- Button -->
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-bold mb-0 me-1">$1586</h5>
                                                    <span class="mb-0 me-2">/day</span>
                                                </div>
                                                <!-- Price -->
                                                <div class="hstack gap-2 mt-3 mt-sm-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-0"><i class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger mb-0"><i class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing item END -->

                            <!-- Listing item START -->
                            <div class="card border p-2">
                                <div class="row g-4">
                                    <!-- Card img -->
                                    <div class="col-md-3 col-lg-2">
                                        <img src="assets/images/category/hotel/4by3/05.jpg" class="card-img rounded-2" alt="Card image">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-9 col-lg-10">
                                        <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                            <!-- Buttons -->
                                            <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction3">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                                </ul>
                                            </div>

                                            <!-- Title -->
                                            <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Royal Beach Resort</a></h5>
                                            <small><i class="bi bi-geo-alt me-2"></i>Manhattan street, London - 24578</small>

                                            <!-- Price and Button -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                <!-- Button -->
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-bold mb-0 me-1">$856</h5>
                                                    <span class="mb-0 me-2">/day</span>
                                                </div>
                                                <!-- Price -->
                                                <div class="hstack gap-2 mt-3 mt-sm-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-0"><i class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger mb-0"><i class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing item END -->

                            <!-- Listing item START -->
                            <div class="card border p-2">
                                <div class="row g-4">
                                    <!-- Card img -->
                                    <div class="col-md-3 col-lg-2">
                                        <img src="assets/images/category/hotel/4by3/04.jpg" class="card-img rounded-2" alt="Card image">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-9 col-lg-10">
                                        <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                            <!-- Buttons -->
                                            <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction4">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                                </ul>
                                            </div>

                                            <!-- Title -->
                                            <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Carina Beach Resort</a></h5>
                                            <small><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los Angeles - 90045</small>

                                            <!-- Price and Button -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                <!-- Button -->
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-bold mb-0 me-1">$1025</h5>
                                                    <span class="mb-0 me-2">/day</span>
                                                </div>
                                                <!-- Price -->
                                                <div class="hstack gap-2 mt-3 mt-sm-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-0"><i class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger mb-0"><i class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing item END -->

                            <!-- Listing item START -->
                            <div class="card border p-2">
                                <div class="row g-4">
                                    <!-- Card img -->
                                    <div class="col-md-3 col-lg-2">
                                        <img src="assets/images/category/hotel/4by3/06.jpg" class="card-img rounded-2" alt="Card image">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-9 col-lg-10">
                                        <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                            <!-- Buttons -->
                                            <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction5" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction5">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                                </ul>
                                            </div>

                                            <!-- Title -->
                                            <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Courtyard by Marriott New York</a></h5>
                                            <small><i class="bi bi-geo-alt me-2"></i>Manhattan street, London - 24578</small>

                                            <!-- Price and Button -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                <!-- Button -->
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-bold mb-0 me-1">$1125</h5>
                                                    <span class="mb-0 me-2">/day</span>
                                                </div>
                                                <!-- Price -->
                                                <div class="hstack gap-2 mt-3 mt-sm-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-0"><i class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger mb-0"><i class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing item END -->

                            <!-- Listing item START -->
                            <div class="card border p-2">
                                <div class="row g-4">
                                    <!-- Card img -->
                                    <div class="col-md-3 col-lg-2">
                                        <img src="assets/images/category/hotel/4by3/08.jpg" class="card-img rounded-2" alt="Card image">
                                    </div>

                                    <!-- Card body -->
                                    <div class="col-md-9 col-lg-10">
                                        <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                            <!-- Buttons -->
                                            <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                                <!-- Share button -->
                                                <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction6" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction6">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                                </ul>
                                            </div>

                                            <!-- Title -->
                                            <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Beverly Hills Marriott</a></h5>
                                            <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

                                            <!-- Price and Button -->
                                            <div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                <!-- Button -->
                                                <div class="d-flex align-items-center">
                                                    <h5 class="fw-bold mb-0 me-1">$1005</h5>
                                                    <span class="mb-0 me-2">/day</span>
                                                </div>
                                                <!-- Price -->
                                                <div class="hstack gap-2 mt-3 mt-sm-0">
                                                    <a href="#" class="btn btn-sm btn-primary mb-0"><i class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger mb-0"><i class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing item END -->
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
            </div>
            <!-- Listing table END -->
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
