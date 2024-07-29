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
						<div class="d-grid"><a href="{{ route('category.room') }}" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> Ajouter une nouvelle categorie de chambres</a></div>
					</div>
				</div>
			</div>

			<!-- Counter START -->
			@include('admin.booking.counter')
			<!-- Counter END -->
        </div>

    </div>
    <!-- Page content END -->

    </main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('admin.gerant.script')
</body>
</html>
