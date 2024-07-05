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
				<h1 class="fs-4 mb-0"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</h1>
			</div>
		</div>
		<!-- Title END -->

		<!-- Counter START -->
		@include('gerant.counter')
		<!-- Counter END -->

		<!-- Graph START -->
		@include('gerant.graph')
		<!-- Graph END -->

		<!-- Booking table START -->
		@include('gerant.booking')
		<!-- Booking table END -->
	</div>
</section>
<!-- =======================
Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

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
