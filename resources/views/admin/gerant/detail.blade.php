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
            @foreach ($hotels as $hotel )


			<!-- Counter START -->
			<div class="row g-4 mb-4">
				<!-- Counter item -->
				<div class="col-lg-4">
					<div class="card card-body border border-primary bg-primary bg-opacity-10 border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h3 class="mb-0 fw-bold">04</h3>
								<span class="mb-0 h6 fw-light">Total Hotels</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-primary text-white mb-0"><i class="fa-solid fa-hotel fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-lg-4">
					<div class="card card-body border border-warning bg-warning bg-opacity-10 border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h3 class="mb-0 fw-bold">56</h3>
								<span class="mb-0 h6 fw-light">Booking this month</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-warning text-white mb-0"><i class="fa-regular fa-calendar-days fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-lg-4">
					<div class="card card-body border border-success bg-success bg-opacity-10 border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h3 class="mb-0 fw-bold">$2486.95</h3>
								<span class="mb-0 h6 fw-light">Earning this month</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle flex-shrink-0 bg-success text-white mb-0"><i class="fa-solid fa-money-bill-trend-up fa-fw"></i></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter END -->

			<div class="row g-4 mb-5">

                @foreach ($hotels as $hote )
				<!-- Agent info START -->
                    <div class="col-md-4 col-xxl-3">
                        <div class="card bg-light">
                            <!-- Dropdown button -->
                            <div class="dropdown position-absolute top-0 end-0 m-3">
                                <a href="#" class="btn btn-sm btn-white btn-round lh-lg mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots fa-fw"></i>
                                </a>
                                <!-- dropdown button -->
                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                                </ul>
                            </div>
                            <!-- Card body -->
                            <div class="card-body text-center">
                                <!-- Avatar Image -->
                                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                                </div>
                                <!-- Title -->
                                <h5 class="mb-2">{{ $hote->name }}</h5>
                                <ul class="list-inline small mb-0">
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
                                </ul>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer bg-light border-top">
                                <h6 class="mb-3">Contact Details</h6>
                                <!-- Email id -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-md bg-mode h6 mb-0 rounded-circle flex-shrink-0"><i class="bi bi-envelope-fill"></i></div>
                                    <div class="ms-2">
                                        <small>Email id</small>
                                        <h6 class="fw-normal small mb-0"><a href="#">{{ $hote->email }}</a></h6>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-md bg-mode h6 mb-0 rounded-circle flex-shrink-0"><i class="bi bi-telephone-fill"></i></div>
                                    <div class="ms-2">
                                        <small>Phone</small>
                                        <h6 class="fw-normal small mb-0"><a href="#">+1(404) 586-854</a></h6>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-md bg-mode h6 mb-0 rounded-circle flex-shrink-0"><i class="bi bi-geo-alt-fill"></i></div>
                                    <div class="ms-2">
                                        <small>Address</small>
                                        <h6 class="fw-normal small mb-0">{{ $hote->localisation }}</h6>
                                    </div>
                                </div>

                                <!-- Skype -->
                                <div class="d-flex align-items-center">
                                    <div class="icon-md bg-mode h6 mb-0 rounded-circle flex-shrink-0"><i class="bi bi-skype"></i></div>
                                    <div class="ms-2">
                                        <small>Skype</small>
                                        <h6 class="fw-normal small mb-0">@Jacqueline56</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
				<!-- Agent info END -->

				<div class="col-md-8 col-xxl-9">
					<!-- Personal info START -->
					<div class="card shadow">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="mb-0">Personal Information</h5>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row">
								<!-- Information item -->
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item mb-3">
											<span>Full Name:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $hote->name }}</span>
										</li>


										<li class="list-group-item mb-3">
											<span>Mobile Number:</span>
											<span class="h6 fw-normal ms-1 mb-0">+1(404) 586-854</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Agent License:</span>
											<span class="h6 fw-normal ms-1 mb-0">258ED458962</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Tax Number:</span>
											<span class="h6 fw-normal ms-1 mb-0">ACG1548GG78952</span>
										</li>
									</ul>
								</div>

								<!-- Information item -->
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item mb-3">
											<span>Email ID:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $hote->email }}</span>
										</li>



										<li class="list-group-item mb-3">
											<span>Location:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $hote->localisation }}</span>
										</li>

										<li class="list-group-item mb-3">
											<span>Joining Date:</span>
											<span class="h6 fw-normal ms-1 mb-0">{{ $hote->created_at }}</span>
										</li>
									</ul>
								</div>

								<!-- Information item -->
								<div class="col-12">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span>Description: </span>
											<p class="h6 fw-normal mb-0">As it so contrasted oh estimating instrument. Size-like body someone had. Are conduct viewing boy minutes warrant the expense Tolerably behavior may admit daughters offending her ask own? Praise effect wishes to change way and any wanted. Lively use looked latter regard had. Does he it part last in</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Personal info END -->
				</div>
			</div> <!-- Row END -->

			<!-- Hotel list START -->
			<div class="row g-4">
				<!-- Title -->
				<div class="col-12">
					<h4 class="mb-0">Hotel list</h4>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-sm-3">
								<img src="assets/images/category/hotel/4by3/10.jpg" class="rounded-2" alt="Card image">
							</div>
                            {{-- @foreach ($hotels as $hotel )
                            @if(id) --}}
							<!-- Card body -->
                                <div class="col-sm-9">
                                    <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                        <!-- Buttons -->
                                        <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                            <!-- Share button -->
                                            <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <!-- dropdown button -->
                                            <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownAction1">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-1"></i>Report</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                            </ul>
                                        </div>

                                        <!-- Title -->
                                        <h5 class="card-title mb-0 me-5"><a href="{{ route('detail') }}">Pride moon Village Resort & Spa</a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>{{ $hotel->localisation }}</small>

                                        <!-- Price and Button -->
                                        <div class="d-flex justify-content-between align-items-center mt-3 mt-md-auto">
                                            <!-- Price -->
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold mb-0 me-1">$1586</h5>
                                                <span class="mb-0 me-2">/day</span>
                                            </div>
                                            <!-- Button -->
                                            <a href="#" class="btn btn-sm btn-primary px-2 mb-0"><i class="bi bi-eye fa-fw me-1"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif
                            @endforeach --}}
						</div>
					</div>
				</div>

			</div>
			<!-- Hotel list END -->
            @endforeach
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
