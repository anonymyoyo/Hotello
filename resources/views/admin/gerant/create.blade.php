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
		{{--  --}}
        @include('admin.gerant.top')
		<!-- Top bar END -->

<div class="row g-4" style="margin-right: 240px; margin-left:240px">

    <div class="col-lg-12">
        <!-- Title -->
        <h2>Nouveau Gerant</h2>

        <!-- Contact form -->
        <form method="POST" action="{{ route('create.gerant') }}" class="mt-4">
            @csrf
            <!-- Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nom de L'hotel *</label>
                <input type="text" class="form-control">
            </div>
            <!-- Email -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Email *</label>
                <input type="email" class="form-control">
            </div>
            <!-- localisation -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Localisation *</label>
                <input type="text" class="form-control">
            </div>
            <!-- etoile -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nombre d'etoile *</label>
                <input type="text" class="form-control">
            </div>
            <!-- Nombre de Chambre -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nombre de Chambre *</label>
                <input type="text" class="form-control">
            </div>
            <!-- Button -->
            <div><button class="btn btn-lg btn-primary mb-0" type="submit">Send Message</button></div>
        </form>
    </div>


    <div class="col-lg-2"></div>
</div>


<!-- Bootstrap JS -->
@include('admin.gerant.script');
</body>
</html>
