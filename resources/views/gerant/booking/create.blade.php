<!DOCTYPE html>
<html lang="en">
@include('gerant.header')

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
                <h2>Nouvelle Chambre</h2>

                <!-- Contact form -->
                <form method="POST" action="{{ route('add.chambre') }}" class="mt-4">
                    @csrf
                    <!-- Name -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Nom de La chambre *</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <!-- Email ID -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Disponibilite *</label>
                        <select name="statut_id" id="" class="form-select">
                        @foreach ($statuts as $statut)
                            <option value="{{ $statut->id }}" class="form-control"  > {{ $statut->statut }}</option>
                        @endforeach
                    </select>
                    </div>
                    <!-- Email ID -->
                    <div class="mb-4 form-control-bg-light">
                        {{-- <label class="form-label">Disponibilite *</label>value="{{ $statut->statut_id }}" --}}
                        {{-- @foreach ($chambre as $chambres)value="{{ $statut->statut }}"
                        @foreach ($hotel as $hotels) --}}
                            {{-- @if ($chambres->hotel_id === $hotels->id) --}}
                        {{-- <input type="hidden" class="form-control" value="{{ $chambre->hotel()->name }}" name="hotel_id"> --}}
                        {{-- @endif
                        @endforeach

                        @endforeach --}}

                    </div>
                    <!-- Name PDG -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Hotel *</label>
                        <select  id="" name="user_id"  class="form-select">
                            @foreach ($gerant as $hotel)
                                <option value="{{ $hotel->user_id }}" class="form-option">{{ $hotel->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Quantite *</label>
                        <input class="form-control" name="quantite" type="text">
                    </div>


                    <!-- Email ID -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Prix *</label>
                        <input type="text" class="form-control" name="prix">
                    </div>


                    <!-- Email ID -->
                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Capacite *</label>
                        <input type="text" class="form-control" name="capacite">
                    </div>

                    <div class="mb-4 form-control-bg-light">
                        <label class="form-label">Categorie *</label>
                        <select  id="" name="room__category_id"  class="form-select">
                            @foreach ($room_category as $room)
                                <option value="{{ $room->id }}" class="form-option">{{ $room->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <!-- Button -->
                    <div><button class="btn btn-lg btn-primary mb-0" type="submit">Ajouter</button></div>
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
@include('gerant.script')
</body>
</html>

