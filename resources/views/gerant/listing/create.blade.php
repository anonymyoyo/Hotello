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

        <div class="row g-4" style="margin-right: 240px; margin-left:240px">

            <div class="col-lg-12">
                <!-- Title -->
                <h2>Nouvel Hotel</h2>

                <!-- Contact form -->
                <form method="POST" action="{{ route('add.gerant') }}" class="mt-4">
                    @csrf
                    <!-- Name -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Nom de L'hotel *</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <!-- Email -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Email *</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <!-- Email ID -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Email ID*</label>
                        <input type="email" class="form-control" name="email2">
                    </div>
                    <!-- Name PDG -->
                    <div class="mb-4 form-control-bg-light">
                        {{-- <select  id="" name="user_id"  class="form-select">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" class="form-option">{{ $user->name }}</option>
                            @endforeach

                        </select> --}}
                        {{-- <label class="form-label">Nom du PDG *</label>
                        <input type="text" class="form-control" name="name_pdg"> --}}
                    </div>
                    <!-- Name -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Genre *</label>
                        <input type="text" class="form-control" name="genre">
                    </div>
                    <!-- Name -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Numero de telephone *</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <!-- Name -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Numero de License *</label>
                        <input type="text" class="form-control" name="license">
                    </div>
                    <!-- Name -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Numero de Taxe *</label>
                        <input type="text" class="form-control" name="tax_number">
                    </div>
                    <!-- localisation -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Localisation *</label>
                        <input type="text" class="form-control" name="localisation">
                    </div>
                    <!-- etoile -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Nombre d'etoile *</label>
                        <input type="text" class="form-control" name="etoiles">
                    </div>
                    <!-- Nombre de Chambre -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Nombre de Chambre *</label>
                        <input type="text" class="form-control" name="nbre_chambres">
                    </div>

                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Description *</label>
                        <textarea class="form-control" name="description" rows="4"></textarea>
                    </div>
                    <!-- Button -->
                    <div><button class="btn btn-lg btn-primary mb-0" type="submit">Creer</button></div>
                </form>
            </div>


            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

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

