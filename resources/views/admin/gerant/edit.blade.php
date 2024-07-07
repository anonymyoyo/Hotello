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
        <form method="POST" action="{{ route('edit.gerant') }}" class="mt-4">
            @csrf
            <!-- Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nom de L'hotel *</label>
                <input type="text" class="form-control" name="name" value="{{ $edit->name }}">
            </div>
            <!-- Email -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Email *</label>
                <input type="email" class="form-control" name="email" value="{{ $edit->email }}">
            </div>
            <!-- Email ID -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Email ID*</label>
                <input type="email" class="form-control" name="email2" value="{{ $edit->email2 }}">
            </div>
            <!-- Name PDG -->
            <div class="mb-4 form-control-bg-light">
                <select  id="" name="user_id"  class="form-select">
                    @foreach ($datas as $data)
                        <option value="{{ $data->id }}" class="form-option">{{ $data->name }}</option>
                    @endforeach

                </select>
                {{-- <label class="form-label">Nom du PDG *</label>
                <input type="text" class="form-control" name="name_pdg"> --}}
            </div>
            <!-- Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Genre *</label>
                <input type="text" class="form-control" name="genre" value="{{ $edit->genre }}">
            </div>
            <!-- Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Numero de telephone *</label>
                <input type="text" class="form-control" name="phone" value="{{ $edit->phone }}">
            </div>
            <!-- Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Numero de License *</label>
                <input type="text" class="form-control" value="{{ $edit->license }}" name="license">
            </div>
            <!--  Name -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Numero de Taxe *</label>
                <input type="text" class="form-control" value="{{ $edit->tax_number }}" name="tax_number">
            </div>
            <!-- localisation -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Localisation *</label>
                <input type="text" class="form-control" value="{{ $edit->localisation }}" name="localisation">
            </div>
            <!-- etoile -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nombre d'etoile *</label>
                <input type="text" class="form-control" value="{{ $edit->etoiles }}" name="etoiles">
            </div>
            <!-- Nombre de Chambre -->
            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Nombre de Chambre *</label>
                <input type="text" class="form-control" value="{{ $edit->nbre_chambres }}" name="nbre_chambres">
            </div>

            <div class="mb-4 form-control-bg-light">
                <label class="form-label">Description *</label>
                <textarea class="form-control" value="" name="description" rows="4">{{ $edit->description }}</textarea>
            </div>
            <!-- Button -->
            <div><button class="btn btn-lg btn-primary mb-0" type="submit">Modifier</button></div>
        </form>
    </div>


    <div class="col-lg-2"></div>
</div>


<!-- Bootstrap JS -->
@include('admin.gerant.script');
</body>
</html>
