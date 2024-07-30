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
						{{-- <div class="d-grid"><a href="{{ route('category.room') }}" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> Ajouter une nouvelle categorie de chambres</a></div> --}}
					</div>
				</div>
			</div>

			<!-- Counter START -->
			@include('admin.booking.counter')
			<!-- Counter END -->

            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <!-- Vector image START -->
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('assets/images/element/contact.svg') }}" alt="">
                    </div>
                    <!-- Vector image END -->

                    <!-- Contact form START -->
                    <div class="col-lg-6">
                        <div class="card bg-light p-4">
                            <!-- Svg decoration -->
                            <figure class="position-absolute end-0 bottom-0 mb-n4 me-n2">
                                <svg class="fill-orange" width="104.2px" height="95.2px">
                                    <circle cx="2.6" cy="92.6" r="2.6"/>
                                    <circle cx="2.6" cy="77.6" r="2.6"/>
                                    <circle cx="2.6" cy="62.6" r="2.6"/>
                                    <circle cx="2.6" cy="47.6" r="2.6"/>
                                    <circle cx="2.6" cy="32.6" r="2.6"/>
                                    <circle cx="2.6" cy="17.6" r="2.6"/>
                                    <circle cx="2.6" cy="2.6" r="2.6"/>
                                    <circle cx="22.4" cy="92.6" r="2.6"/>
                                    <circle cx="22.4" cy="77.6" r="2.6"/>
                                    <circle cx="22.4" cy="62.6" r="2.6"/>
                                    <circle cx="22.4" cy="47.6" r="2.6"/>
                                    <circle cx="22.4" cy="32.6" r="2.6"/>
                                    <circle cx="22.4" cy="17.6" r="2.6"/>
                                    <circle cx="22.4" cy="2.6" r="2.6"/>
                                    <circle cx="42.2" cy="92.6" r="2.6"/>
                                    <circle cx="42.2" cy="77.6" r="2.6"/>
                                    <circle cx="42.2" cy="62.6" r="2.6"/>
                                    <circle cx="42.2" cy="47.6" r="2.6"/>
                                    <circle cx="42.2" cy="32.6" r="2.6"/>
                                    <circle cx="42.2" cy="17.6" r="2.6"/>
                                    <circle cx="42.2" cy="2.6" r="2.6"/>
                                    <circle cx="62" cy="92.6" r="2.6"/>
                                    <circle cx="62" cy="77.6" r="2.6"/>
                                    <circle cx="62" cy="62.6" r="2.6"/>
                                    <circle cx="62" cy="47.6" r="2.6"/>
                                    <circle cx="62" cy="32.6" r="2.6"/>
                                    <circle cx="62" cy="17.6" r="2.6"/>
                                    <circle cx="62" cy="2.6" r="2.6"/>
                                    <circle cx="81.8" cy="92.6" r="2.6"/>
                                    <circle cx="81.8" cy="77.6" r="2.6"/>
                                    <circle cx="81.8" cy="62.6" r="2.6"/>
                                    <circle cx="81.8" cy="47.6" r="2.6"/>
                                    <circle cx="81.8" cy="32.6" r="2.6"/>
                                    <circle cx="81.8" cy="17.6" r="2.6"/>
                                    <circle cx="81.8" cy="2.6" r="2.6"/>
                                    <circle cx="101.7" cy="92.6" r="2.6"/>
                                    <circle cx="101.7" cy="77.6" r="2.6"/>
                                    <circle cx="101.7" cy="62.6" r="2.6"/>
                                    <circle cx="101.7" cy="47.6" r="2.6"/>
                                    <circle cx="101.7" cy="32.6" r="2.6"/>
                                    <circle cx="101.7" cy="17.6" r="2.6"/>
                                    <circle cx="101.7" cy="2.6" r="2.6"/>
                                </svg>
                            </figure>

                            <!-- Card header -->
                            <div class="card-header bg-light p-0 pb-3">
                                <h3 class="mb-0">Categories de chambres</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <form action="{{ route('add_room_category') }}" method="POST" class="row g-4">
                                    @csrf
                                    <!-- Name -->
                                    <div class="col-md-12">
                                        <label class="form-label">Nom de la categorie *</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12">
                                        <button class="btn btn-dark mb-0" type="submit">Ajouter la categorie</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Contact form END -->
                </div>
            </div>




<br><br><br><br>
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

