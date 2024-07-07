<!DOCTYPE html>
<html lang="en">
@include('user.head')

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
@include('user.featuredhotel')
<!-- =======================
Featured Hotels END -->

<!-- =======================
Client START -->
@include('user.client')
<!-- =======================
Client END -->

<!-- =======================
Testimonials START -->
@include('user.testimonials')
<!-- =======================
Testimonials END -->

<!-- =======================
Near by START -->
@include('user.nearby')
<!-- =======================
Near by END -->

<!-- =======================
Download app START -->
@include('user.downloadapp')
<!-- =======================
Download app END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('user.footer')
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
@include('user.script')
</body>
</html>
