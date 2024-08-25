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
			<div class="col-lg-8 col-xl-9">

				<!-- Offcanvas menu button -->
				<div class="d-grid mb-0 d-lg-none w-100">
					<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i> Menu
					</button>
				</div>

				<div class="vstack gap-4">
					<!-- Verified message -->
					@include('user.user.profile.verified')

					<!-- Personal info START -->
					@include('user.user.profile.personnal')
					<!-- Personal info END -->

					<!-- Update email START -->
					@include('user.user.profile.updates')
					<!-- Update Password END -->
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
