{{-- <x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">

@include('admin.header');

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- Sidebar START -->
	@include('admin.sidebar');
	<!-- Sidebar END -->

	<!-- Page content START -->
	<div class="page-content">

		<!-- Top bar START -->
		@include('admin.topbar');
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
			@include('admin.title');

			<!-- Counter boxes START -->
			@include('admin.counter_boxes');
			<!-- Counter boxes END -->

			<!-- Hotel grid START -->
			@include('admin.hotel_grid');
			<!-- Hotel grid END -->

			<!-- Widget START -->
			<div class="row g-4">
				<!-- Booking Chart START -->
				@include('admin.booking_chart');
				<!-- Booking Chart END -->

				<!-- Booking graph START -->
				@include('admin.booking_graph');
				<!-- Booking graph END -->

				<!-- Rooms START -->
				@include('admin.rooms');
				<!-- Rooms END -->

				<!-- Upcoming Arrival START -->
				@include('admin.upcoming');
				<!-- Upcoming Arrival END -->

				<!-- Reviews START -->
				@include('admin.review');
				<!-- Reviews END -->
			</div>
			<!-- Widget END -->

		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->

	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('admin.script');
</body>
</html>
{{-- </x-app-layout> --}}
