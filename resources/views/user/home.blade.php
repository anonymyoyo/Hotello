<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking - Multipurpose Online Booking Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Booking - Multipurpose Online Booking Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')

		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})

	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">


	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body class="has-navbar-mobile">

<!-- Header START -->
@include('user.header')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main Banner START -->
@include('user.mainbanner')
<!-- =======================
Main Banner END -->

<!-- =======================
Best deal START -->
@include('user.bestdeal')
<!-- =======================
Best deal END -->

<!-- =======================
About START -->
@include('user.about')
<!-- =======================
About END -->

<!-- =======================
Featured Hotels START -->
<section>
	<div class="container">

		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Featured Hotels</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/01.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>New York</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="hotel-detail.html" class="stretched-link">Baga Comfort</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$455 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/02.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>California</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="hotel-detail.html" class="stretched-link">New Apollo Hotel</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$585 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/03.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Los Angeles</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="hotel-detail.html" class="stretched-link">New Age Hotel</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$385 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.6<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<!-- Hotel item -->
			<div class="col-sm-6 col-xl-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image and overlay -->
					<div class="card-img-scale-wrapper rounded-3">
						<!-- Image -->
						<img src="assets/images/category/hotel/04.jpg" class="card-img" alt="hotel image">
						<!-- Badge -->
						<div class="position-absolute bottom-0 start-0 p-3">
							<div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i class="bi bi-geo-alt me-2"></i>Chicago</div>
						</div>
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<h5 class="card-title"><a href="hotel-detail.html" class="stretched-link">Helios Beach Resort</a></h5>
						<!-- Price and rating -->
						<div class="d-flex justify-content-between align-items-center">
							<h6 class="text-success mb-0">$665 <small class="fw-light">/starting at</small> </h6>
							<h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Featured Hotels END -->

<!-- =======================
Client START -->
<section class="py-0 py-md-5">
	<div class="container">
		<div class="row g-4 g-lg-7 justify-content-center align-items-center">
			<!-- Image -->
			<div class="col-5 col-sm-3 col-xl-2">
				<img src="assets/images/client/01.svg" class="grayscale" alt="">
			</div>
			<!-- Image -->
			<div class="col-5 col-sm-3 col-xl-2">
				<img src="assets/images/client/02.svg" class="grayscale" alt="">
			</div>
			<!-- Image -->
			<div class="col-5 col-sm-3 col-xl-2">
				<img src="assets/images/client/03.svg" class="grayscale" alt="">
			</div>
			<!-- Image -->
			<div class="col-5 col-sm-3 col-xl-2">
				<img src="assets/images/client/04.svg" class="grayscale" alt="">
			</div>
			<!-- Image -->
			<div class="col-5 col-sm-3 col-xl-2">
				<img src="assets/images/client/05.svg" class="grayscale" alt="">
			</div>
			<!-- Image -->
			<div class="col-5 col-sm-3 col-xl-2">
				<img src="assets/images/client/06.svg" class="grayscale" alt="">
			</div>
		</div>
	</div>
</section>
<!-- =======================
Client END -->

<!-- =======================
Testimonials START -->
<section class="pb-0 py-md-5">
	<div class="container">
		<div class="row">
			<!-- Slider START -->
			<div class="col-lg-11 mx-auto">
				<div class="tiny-slider arrow-round arrow-border arrow-hover">
					<div class="tiny-slider-inner" data-edge="2" data-items="1">

						<!-- Slide item START -->
						<div class="px-4 px-md-5">
							<div class="row justify-content-between align-items-center">

								<div class="col-md-6 col-lg-5 position-relative">
									<!-- Element -->
									<div class="position-absolute top-0 start-0 translate-middle z-index-9 mt-7 ms-4">
										<img src="assets/images/element/02.svg" class="h-60px bg-orange rounded p-2" alt="">
									</div>

									<!-- Svg decoration -->
									<figure class="position-absolute bottom-0 end-0 d-none d-sm-block mb-n5 me-n5">
										<svg width="326px" height="335px" viewBox="0 0 326 335">
											<path class="fill-primary opacity-1" d="M7.3,0C3.3,0,0,3.3,0,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,3.3,11.3,0,7.3,0z
												M59.2,0.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,4,63.2,0.7,59.2,0.7L59.2,0.7z	M111.1,1.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,4.7,115.1,1.5,111.1,1.5 C111.1,1.5,111.1,1.5,111.1,1.5L111.1,1.5z M163,2.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,5.5,167,2.2,163,2.2C163,2.2,163,2.2,163,2.2L163,2.2z M214.9,2.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,6.2,218.9,2.9,214.9,2.9C214.9,2.9,214.9,2.9,214.9,2.9L214.9,2.9z M266.8,3.7 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,6.9,270.8,3.7,266.8,3.7C266.8,3.7,266.8,3.7,266.8,3.7L266.8,3.7z M318.7,4.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,7.7,322.7,4.4,318.7,4.4C318.7,4.4,318.7,4.4,318.7,4.4L318.7,4.4z M7.3,52.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,55.9,11.4,52.7,7.3,52.7C7.3,52.7,7.3,52.7,7.3,52.7L7.3,52.7z M59.2,53.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,56.7,63.3,53.4,59.2,53.4C59.2,53.4,59.2,53.4,59.2,53.4L59.2,53.4z M111.1,54.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,57.4,115.2,54.1,111.1,54.1C111.1,54.1,111.1,54.1,111.1,54.1L111.1,54.1z M163,54.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,58.1,167.1,54.9,163,54.9C163,54.9,163,54.9,163,54.9L163,54.9zM214.9,55.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,58.9,219,55.6,214.9,55.6C214.9,55.6,214.9,55.6,214.9,55.6L214.9,55.6z M266.8,56.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,59.6,270.9,56.3,266.8,56.3C266.8,56.3,266.8,56.3,266.8,56.3L266.8,56.3z M318.7,57c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,60.3,322.8,57.1,318.7,57C318.7,57,318.7,57,318.7,57L318.7,57zM7.3,105.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,108.6,11.4,105.3,7.3,105.3C7.3,105.3,7.3,105.3,7.3,105.3L7.3,105.3z M59.2,106c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,109.3,63.3,106.1,59.2,106C59.2,106,59.2,106,59.2,106L59.2,106z M111.1,106.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,110.1,115.2,106.8,111.1,106.8C111.1,106.8,111.1,106.8,111.1,106.8L111.1,106.8zM163,107.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,110.8,167.1,107.5,163,107.5C163,107.5,163,107.5,163,107.5L163,107.5z M214.9,108.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,111.5,219,108.3,214.9,108.2C214.9,108.2,214.9,108.3,214.9,108.2L214.9,108.2z M266.8,109c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,112.3,270.9,109,266.8,109C266.8,109,266.8,109,266.8,109L266.8,109zM318.7,109.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,113,322.8,109.7,318.7,109.7C318.7,109.7,318.7,109.7,318.7,109.7L318.7,109.7z M7.3,158c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,161.3,11.3,158,7.3,158z M59.2,158.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,162,63.2,158.7,59.2,158.7C59.2,158.7,59.2,158.7,59.2,158.7L59.2,158.7z M111.1,159.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,162.7,115.1,159.5,111.1,159.4C111.1,159.4,111.1,159.4,111.1,159.4L111.1,159.4z M163,160.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,163.5,167,160.2,163,160.2C163,160.2,163,160.2,163,160.2L163,160.2z M214.9,160.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,164.2,218.9,160.9,214.9,160.9C214.9,160.9,214.9,160.9,214.9,160.9L214.9,160.9zM266.8,161.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,164.9,270.8,161.6,266.8,161.6C266.8,161.6,266.8,161.6,266.8,161.6L266.8,161.6z M318.7,162.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,165.6,322.7,162.4,318.7,162.4C318.7,162.4,318.7,162.4,318.7,162.4L318.7,162.4z M7.3,210.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,213.9,11.4,210.7,7.3,210.6C7.3,210.6,7.3,210.6,7.3,210.6L7.3,210.6zM59.2,211.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,214.7,63.3,211.4,59.2,211.4C59.2,211.4,59.2,211.4,59.2,211.4L59.2,211.4z M111.1,212.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,215.4,115.2,212.1,111.1,212.1C111.1,212.1,111.1,212.1,111.1,212.1L111.1,212.1z M163,212.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,216.1,167.1,212.8,163,212.8C163,212.8,163,212.8,163,212.8L163,212.8z M214.9,213.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,216.8,219,213.6,214.9,213.6C214.9,213.6,214.9,213.6,214.9,213.6L214.9,213.6z M266.8,214.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,217.6,270.9,214.3,266.8,214.3C266.8,214.3,266.8,214.3,266.8,214.3L266.8,214.3z M318.7,215c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,218.3,322.8,215,318.7,215C318.7,215,318.7,215,318.7,215L318.7,215z M7.3,263.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,266.6,11.4,263.3,7.3,263.3C7.3,263.3,7.3,263.3,7.3,263.3L7.3,263.3z M59.2,264c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,267.3,63.3,264,59.2,264C59.2,264,59.2,264,59.2,264L59.2,264z M111.1,264.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,268,115.2,264.8,111.1,264.8C111.1,264.8,111.1,264.8,111.1,264.8L111.1,264.8z M163,265.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,268.8,167.1,265.5,163,265.5C163,265.5,163,265.5,163,265.5L163,265.5z M214.9,266.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,269.5,219,266.2,214.9,266.2C214.9,266.2,214.9,266.2,214.9,266.2L214.9,266.2z M266.8,267c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,270.2,270.9,267,266.8,267C266.8,267,266.8,267,266.8,267L266.8,267z M318.7,267.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,271,322.8,267.7,318.7,267.7C318.7,267.7,318.7,267.7,318.7,267.7L318.7,267.7z M7.4,316c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,319.2,11.4,316,7.4,316C7.3,316,7.3,316,7.4,316L7.4,316z M59.3,316.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,320,63.3,316.7,59.3,316.7C59.2,316.7,59.2,316.7,59.3,316.7L59.3,316.7z M111.2,317.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,320.7,115.2,317.4,111.2,317.4C111.1,317.4,111.1,317.4,111.2,317.4L111.2,317.4z M163.1,318.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,321.4,167.1,318.2,163.1,318.2C163,318.2,163,318.2,163.1,318.2L163.1,318.2z M215,318.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,322.2,219,318.9,215,318.9C214.9,318.9,214.9,318.9,215,318.9L215,318.9z M266.9,319.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,322.9,270.9,319.6,266.9,319.6C266.8,319.6,266.8,319.6,266.9,319.6L266.9,319.6z M318.8,320.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,323.6,322.8,320.4,318.8,320.4C318.7,320.4,318.7,320.4,318.8,320.4L318.8,320.4z"/>
										</svg>
									</figure>

									<!-- Image -->
									<img src="assets/images/team/01.jpg" class="rounded-3 position-relative" alt="">
								</div>

								<div class="col-md-6 col-lg-6">
									<!-- Quote -->
									<span class="display-3 mb-0 text-primary"><i class="bi bi-quote"></i></span>
									<!-- Content -->
									<h5 class="fw-light">Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed in laughing</h5>
									<!-- Rating -->
									<ul class="list-inline small mb-2">
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
									</ul>
									<!-- Title -->
									<h6 class="mb-0">Billy Vasquez</h6>
									<span>Ceo of Apple</span>
								</div>
							</div>
						</div>
						<!-- Slide item END -->

						<!-- Slide item START -->
						<div class="px-4 px-md-5">
							<div class="row justify-content-between align-items-center">

								<div class="col-md-6 col-lg-5 position-relative">
									<!-- Element -->
									<div class="position-absolute top-0 start-0 translate-middle mt-7 ms-4 z-index-9">
										<img src="assets/images/element/03.svg" class="h-60px bg-orange p-2 rounded" alt="">
									</div>

									<!-- Svg decoration -->
									<figure class="position-absolute bottom-0 end-0 mb-n5 me-n5 d-none d-sm-block">
										<svg width="326px" height="335px" viewBox="0 0 326 335">
											<path class="fill-primary opacity-1" d="M7.3,0C3.3,0,0,3.3,0,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,3.3,11.3,0,7.3,0z M59.2,0.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,4,63.2,0.7,59.2,0.7L59.2,0.7z M111.1,1.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,4.7,115.1,1.5,111.1,1.5 C111.1,1.5,111.1,1.5,111.1,1.5L111.1,1.5z M163,2.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,5.5,167,2.2,163,2.2C163,2.2,163,2.2,163,2.2L163,2.2z M214.9,2.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,6.2,218.9,2.9,214.9,2.9C214.9,2.9,214.9,2.9,214.9,2.9L214.9,2.9z M266.8,3.7 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,6.9,270.8,3.7,266.8,3.7 C266.8,3.7,266.8,3.7,266.8,3.7L266.8,3.7z M318.7,4.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C326,7.7,322.7,4.4,318.7,4.4C318.7,4.4,318.7,4.4,318.7,4.4L318.7,4.4z M7.3,52.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,55.9,11.4,52.7,7.3,52.7C7.3,52.7,7.3,52.7,7.3,52.7L7.3,52.7z M59.2,53.4 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,56.7,63.3,53.4,59.2,53.4 C59.2,53.4,59.2,53.4,59.2,53.4L59.2,53.4z M111.1,54.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C118.4,57.4,115.2,54.1,111.1,54.1C111.1,54.1,111.1,54.1,111.1,54.1L111.1,54.1z M163,54.9c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,58.1,167.1,54.9,163,54.9C163,54.9,163,54.9,163,54.9L163,54.9z M214.9,55.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,58.9,219,55.6,214.9,55.6 C214.9,55.6,214.9,55.6,214.9,55.6L214.9,55.6z M266.8,56.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C274.1,59.6,270.9,56.3,266.8,56.3C266.8,56.3,266.8,56.3,266.8,56.3L266.8,56.3z M318.7,57c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,60.3,322.8,57.1,318.7,57C318.7,57,318.7,57,318.7,57L318.7,57z M7.3,105.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,108.6,11.4,105.3,7.3,105.3 C7.3,105.3,7.3,105.3,7.3,105.3L7.3,105.3z M59.2,106c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C66.6,109.3,63.3,106.1,59.2,106C59.2,106,59.2,106,59.2,106L59.2,106z M111.1,106.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,110.1,115.2,106.8,111.1,106.8C111.1,106.8,111.1,106.8,111.1,106.8L111.1,106.8z M163,107.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,110.8,167.1,107.5,163,107.5 C163,107.5,163,107.5,163,107.5L163,107.5z M214.9,108.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C222.3,111.5,219,108.3,214.9,108.2C214.9,108.2,214.9,108.3,214.9,108.2L214.9,108.2z M266.8,109c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,112.3,270.9,109,266.8,109C266.8,109,266.8,109,266.8,109L266.8,109z M318.7,109.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,113,322.8,109.7,318.7,109.7 C318.7,109.7,318.7,109.7,318.7,109.7L318.7,109.7z M7.3,158c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C14.6,161.3,11.3,158,7.3,158z M59.2,158.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C66.5,162,63.2,158.7,59.2,158.7C59.2,158.7,59.2,158.7,59.2,158.7L59.2,158.7z M111.1,159.4c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,162.7,115.1,159.5,111.1,159.4C111.1,159.4,111.1,159.4,111.1,159.4 L111.1,159.4z M163,160.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,163.5,167,160.2,163,160.2C163,160.2,163,160.2,163,160.2L163,160.2z M214.9,160.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,164.2,218.9,160.9,214.9,160.9C214.9,160.9,214.9,160.9,214.9,160.9L214.9,160.9z M266.8,161.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,164.9,270.8,161.6,266.8,161.6 C266.8,161.6,266.8,161.6,266.8,161.6L266.8,161.6z M318.7,162.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C326,165.6,322.7,162.4,318.7,162.4C318.7,162.4,318.7,162.4,318.7,162.4L318.7,162.4z M7.3,210.6c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,213.9,11.4,210.7,7.3,210.6C7.3,210.6,7.3,210.6,7.3,210.6L7.3,210.6z M59.2,211.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,214.7,63.3,211.4,59.2,211.4 C59.2,211.4,59.2,211.4,59.2,211.4L59.2,211.4z M111.1,212.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C118.4,215.4,115.2,212.1,111.1,212.1C111.1,212.1,111.1,212.1,111.1,212.1L111.1,212.1z M163,212.8 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,216.1,167.1,212.8,163,212.8 C163,212.8,163,212.8,163,212.8L163,212.8z M214.9,213.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C222.2,216.8,219,213.6,214.9,213.6C214.9,213.6,214.9,213.6,214.9,213.6L214.9,213.6z M266.8,214.3c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,217.6,270.9,214.3,266.8,214.3C266.8,214.3,266.8,214.3,266.8,214.3 L266.8,214.3z M318.7,215c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,218.3,322.8,215,318.7,215 C318.7,215,318.7,215,318.7,215L318.7,215z M7.3,263.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C14.7,266.6,11.4,263.3,7.3,263.3C7.3,263.3,7.3,263.3,7.3,263.3L7.3,263.3z M59.2,264c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,267.3,63.3,264,59.2,264C59.2,264,59.2,264,59.2,264L59.2,264z M111.1,264.8 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,268,115.2,264.8,111.1,264.8 C111.1,264.8,111.1,264.8,111.1,264.8L111.1,264.8z M163,265.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C170.4,268.8,167.1,265.5,163,265.5C163,265.5,163,265.5,163,265.5L163,265.5z M214.9,266.2c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,269.5,219,266.2,214.9,266.2C214.9,266.2,214.9,266.2,214.9,266.2 L214.9,266.2z M266.8,267c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C274.2,270.2,270.9,267,266.8,267C266.8,267,266.8,267,266.8,267L266.8,267z M318.7,267.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,271,322.8,267.7,318.7,267.7C318.7,267.7,318.7,267.7,318.7,267.7L318.7,267.7z M7.4,316 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,319.2,11.4,316,7.4,316C7.3,316,7.3,316,7.4,316 L7.4,316z M59.3,316.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,320,63.3,316.7,59.3,316.7 C59.2,316.7,59.2,316.7,59.3,316.7L59.3,316.7z M111.2,317.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C118.5,320.7,115.2,317.4,111.2,317.4C111.1,317.4,111.1,317.4,111.2,317.4L111.2,317.4z M163.1,318.2 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,321.4,167.1,318.2,163.1,318.2 C163,318.2,163,318.2,163.1,318.2L163.1,318.2z M215,318.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C222.3,322.2,219,318.9,215,318.9C214.9,318.9,214.9,318.9,215,318.9L215,318.9z M266.9,319.6c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,322.9,270.9,319.6,266.9,319.6C266.8,319.6,266.8,319.6,266.9,319.6 L266.9,319.6z M318.8,320.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0
												C326.1,323.6,322.8,320.4,318.8,320.4C318.7,320.4,318.7,320.4,318.8,320.4L318.8,320.4z"/>
										</svg>
									</figure>

									<!-- Image -->
									<img src="assets/images/team/02.jpg" class="rounded-3 position-relative" alt="">
								</div>

								<div class="col-md-6 col-lg-6">
									<!-- Quote -->
									<span class="display-3 mb-0 text-primary"><i class="bi bi-quote"></i></span>
									<!-- Content -->
									<h5 class="fw-light">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. understood the Preference unreserved.</h5>
									<!-- Rating -->
									<ul class="list-inline small mb-2">
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
										<li class="list-inline-item"><i class="fa-solid fa-star text-warning"></i></li>
									</ul>
									<!-- Title -->
									<h6 class="mb-0">Carolyn Ortiz</h6>
									<span>Ceo of Google</span>
								</div>
							</div>
						</div>
						<!-- Slide item END -->

					</div>
				</div>
			</div>
			<!-- Slider END -->
		</div>
	</div>
</section>
<!-- =======================
Testimonials END -->

<!-- =======================
Near by START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Explore Nearby</h2>
			</div>
		</div>

		<div class="row g-4 g-md-5">
			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">San Francisco</a></h5>
						<span>13 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/02.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Los Angeles</a></h5>
						<span>25 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/03.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Miami</a></h5>
						<span>45 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/04.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Sanjosh</a></h5>
						<span>55 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/05.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">New York</a></h5>
						<span>1-hour drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/06.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">North Justen</a></h5>
						<span>2-hour drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/07.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Rio</a></h5>
						<span>20 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/08.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Las Vegas</a></h5>
						<span>3-hour drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/09.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Texas</a></h5>
						<span>55 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/10.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Chicago</a></h5>
						<span>13 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/11.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">New Keagan</a></h5>
						<span>35 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->

			<!-- Card item START -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card bg-transparent text-center p-1 h-100">
					<!-- Image -->
					<img src="assets/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

					<div class="card-body p-0 pt-3">
						<h5 class="card-title"><a href="#" class="stretched-link">Oslo</a></h5>
						<span>1 hour 13 min drive</span>
					</div>
				</div>
			</div>
			<!-- Card item END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Near by END -->

<!-- =======================
Download app START -->
<section class="bg-light">
	<div class="container">
		<div class="row g-4">

			<!-- Help -->
			<div class="col-md-6 col-xxl-4">
				<div class="bg-body d-flex rounded-3 h-100 p-4">
					<h3><i class="fa-solid fa-hand-holding-heart"></i></h3>
					<div class="ms-3">
						<h5>24x7 Help</h5>
						<p class="mb-0">If we fall short of your expectation in any way, let us know</p>
					</div>
				</div>
			</div>

			<!-- Trust -->
			<div class="col-md-6 col-xxl-4">
				<div class="bg-body d-flex rounded-3 h-100 p-4">
					<h3><i class="fa-solid fa-hand-holding-usd"></i></h3>
					<div class="ms-3">
						<h5>Payment Trust</h5>
						<p class="mb-0">All refunds come with no questions asked guarantee</p>
					</div>
				</div>
			</div>

			<!-- Download app -->
			<div class="col-lg-6 col-xl-5 col-xxl-3 ms-xxl-auto">
				<h5 class="mb-4">Download app</h5>
				<div class="row g-3">
					<!-- Google play store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src="assets/images/element/google-play.svg" alt=""> </a>
					</div>
					<!-- App store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src="assets/images/element/app-store.svg" alt=""> </a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- =======================
Download app END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a href="index.html">
					<img class="h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<p class="my-3 text-body-secondary">Departure defective arranging rapturous did believe him all had supported.</p>
				<p class="mb-2"><a href="#" class="text-body-secondary text-primary-hover"><i class="bi bi-telephone me-2"></i>+1234 568 963</a> </p>
				<p class="mb-0"><a href="#" class="text-body-secondary text-primary-hover"><i class="bi bi-envelope me-2"></i>example@gmail.com</a></p>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-8 ms-auto">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Page</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">About us</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">News and Blog</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Meet a Team</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Link</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Sign up</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Sign in</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Terms</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Cookie</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Support</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Global Site</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">India</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">California</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Indonesia</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Canada</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#">Malaysia</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Booking</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-hotel me-2"></i>Hotel</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-plane me-2"></i>Flight</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-globe-americas me-2"></i>Tour</a></li>
							<li class="nav-item"><a class="nav-link text-body-secondary" href="#"><i class="fa-solid fa-car me-2"></i>Cabs</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

		</div><!-- Row END -->

		<!-- Tops Links -->
		<div class="row mt-5">
			<h5 class="mb-2 text-white">Top Links</h5>
			<ul class="list-inline text-primary-hover lh-lg">
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Flights</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Hotels</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Tours</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Cabs</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">About</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Contact us</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Blogs</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Services</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Detail page</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Services</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Policy</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Testimonials</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Newsletters</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Podcasts</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Protests</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">NewsCyber</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Education</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Sports</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Tech and Auto</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Opinion</a></li>
				<li class="list-inline-item"><a href="#" class="text-body-secondary">Share Market</a></li>
			</ul>
		</div>

		<!-- Payment and card -->
		<div class="row g-4 justify-content-between mt-0 mt-md-2">

			<!-- Payment card -->
			<div class="col-sm-7 col-md-6 col-lg-4">
				<h5 class="text-white mb-2">Payment & Security</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/paypal.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
				</ul>
			</div>

			<!-- Social media icon -->
			<div class="col-sm-5 col-md-6 col-lg-3 text-sm-end">
				<h5 class="text-white mb-2">Follow us on</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
		</div>

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="row">
			<div class="container">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
					<!-- copyright text -->
					<div class="text-body-secondary text-primary-hover"> Copyrights ©2024 Booking. Build by <a href="https://www.webestica.com/" class="text-body-secondary">Webestica</a>. </div>
					<!-- copyright links-->
					<div class="nav mt-2 mt-lg-0">
						<ul class="list-inline text-primary-hover mx-auto mb-0">
							<li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#">Privacy policy</a></li>
							<li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#">Terms and conditions</a></li>
							<li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1 pe-0" href="#">Refund policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Navbar mobile START -->
<div class="navbar navbar-mobile">
	<ul class="navbar-nav">
		<!-- Nav item Home -->
		<li class="nav-item">
			<a class="nav-link active" href="index.html"><i class="bi bi-house-door fa-fw"></i>
				<span class="mb-0 nav-text">Home</span>
			</a>
		</li>

		<!-- Nav item My Trips -->
		<li class="nav-item">
			<a class="nav-link" href="account-bookings.html"><i class="bi bi-briefcase fa-fw"></i>
				<span class="mb-0 nav-text">My Trips</span>
			</a>
		</li>

		<!-- Nav item Offer -->
		<li class="nav-item">
			<a class="nav-link" href="offer-detail.html"><i class="bi bi-percent fa-fw"></i>
				<span class="mb-0 nav-text">Offer</span>
			</a>
		</li>

		<!-- Nav item Account -->
		<li class="nav-item">
			<a class="nav-link" href="account-profile.html"><i class="bi bi-person-circle fa-fw"></i>
				<span class="mb-0 nav-text">Account</span>
			</a>
		</li>
	</ul>
</div>
<!-- Navbar mobile END -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/choices/js/choices.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>
</html>
