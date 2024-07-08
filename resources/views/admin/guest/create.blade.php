<!DOCTYPE html>
<html lang="en">
@include('../admin.header')
<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>

	<!-- Sidebar START -->


		@include('../admin.sidebar')
	<!-- Sidebar END -->

	<!-- Page content START -->
	<div class="page-content">

		<!-- Top bar START -->
		@include('../admin.topbar')
		<!-- Top bar END -->


<div class="row g-4" style="margin-right: 240px; margin-left:240px">

    <div class="col-lg-12">
        <!-- Title -->
        <h2>Nouveau Gerant</h2>

        <!-- Contact form -->
        <form method="POST" action="{{ route('guest.add') }}" class="mt-4">
            @csrf
            <!-- Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nom du gerant *</label>
                <input type="text" class="form-control" name="name">
            </div>
            <!-- Email -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Email du gerant*</label>
                <input type="email" class="form-control" name="email">
            </div>
            <!-- Name PDG -->
            <div class="mb-4 form-control-bg-light">
                <input type="hidden" class="form-control" name="roles_id" value="3">
                {{-- <label class="form-label">Nom du PDG *</label>
                <input type="text" class="form-control" name="name_pdg"> --}}
            </div>
            <!-- Contact -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Numero de telephone *</label>
                <input type="text" class="form-control" name="contact">
            </div>
            <!-- localisation -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Quartier *</label>
                <input type="text" class="form-control" name="addresse">
            </div>
            <!-- etoile -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Pays *</label>
                <input type="text" class="form-control" name="pays">
            </div>
            <!-- Nombre de Chambre -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Ville *</label>
                <input type="text" class="form-control" name="ville">
            </div>

            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Mot de passe *</label>
                <input class="form-control" name="password" type="password">
            </div>
            <!-- Button -->
            <div><button class="btn btn-lg btn-primary mb-0" type="submit">Creer</button></div>
        </form>
    </div>


    <div class="col-lg-2"></div>
</div>

<!-- Bootstrap JS -->
@include('admin.gerant.script');
</body>
</html>
