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
					<div class="card-header border-bottom" style="display: flex;">
                            {{-- @if ($chambres->user_id === auth()->user()->id) --}}
						<h5 class="card-header-title">Bookings<span class="badge bg-primary bg-opacity-10 text-primary ms-2">{{ $chambreCount }} Rooms</span></h5>
                            {{-- @endif --}}
                        <a href="{{ route('create.chambres') }}" class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0 "><i class="bi bi-plus-lg fa-fw me-2"></i>Ajouter une Chambre</a>
					</div>
					<!-- Card header END -->
                        {{--  --}}
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


                                <tbody class="border-top-0">

                                    @foreach ($chambres as $chambre)
                                    {{-- @if ($chambre->user_id === auth()->user()->id) --}}
                                    {{-- @foreach ($room_category as $room_categories) --}}
                                    {{-- --}}
                                        <tr>
										<td> <h6 class="mb-0">{{ $chambre->id }}</h6> </td>
										<td> <h6 class="mb-0"><a href="#">{{ $chambre->name }}</a></h6> </td>
                                        {{-- @if ($chambre->room__category_id === $room_categories->id) --}}
                                            {{-- <td> {{ $chambre->room__category_id }} </td> --}}
                                        {{-- @endif --}}
                                        @foreach ($room_category as $room_categories)
                                            @if ($chambre->room__category_id === $room_categories->id)
                                                <td> {{ $room_categories->name }}
                                            @endif
                                        @endforeach
										<td> <h6 class="mb-0"><a href="#">{{ $chambre->created_at }}</a></h6></td>
                                        @foreach ($statuts as $statut)
                                        @if ($chambre->statut_id === $statut->id)
                                            <td> <div class="badge text-bg-warning">{{ $statut->statut }}</div> </td>
                                        @endif
                                        @endforeach

										<td> - </td>
										<td> <a href="#" class="btn btn-sm btn-light mb-0">View</a> </td>
									</tr>
                                    {{-- @endforeach --}}
                                    {{-- @endforeach --}}
                                    {{-- @endif --}}
                                    @endforeach
									<!-- Table item -->


								</tbody>

								<!-- Table body START -->

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
@include('gerant.script')
</body>
</html>

