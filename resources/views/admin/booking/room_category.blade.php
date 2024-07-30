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
		@include('admin.gerant.top')
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">

			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Booking</h1>
						<div class="d-grid"><a href="{{ route('room.category') }}" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> Ajouter une nouvelle categorie de chambres</a></div>
					</div>
				</div>
			</div>

			<!-- Counter START -->
			@include('admin.booking.counter')
			<!-- Counter END -->

            <div class="card shadow mt-5" >
				<!-- Card body START -->
				<div class="card-body" id="tab-4">
					<!-- Table head -->
					<div class="bg-light rounded p-3 d-none d-lg-block" id="qq">
						<div class="row row-cols-7 g-4">
							<div class="col"><h6 class="mb-0">ID</h6></div>
							<div class="col"><h6 class="mb-0">Nom de la categorie</h6></div>
                            <div class="col"><h6 class="mb-0">Action</h6></div>
						</div>
					</div>

                    @foreach ($categories as $category)
                        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4" id="a">
						<!-- Data item -->
                            <div class="col-2">
                                <small class="d-block d-lg-none">Booked by:</small>
                                <h6 class="mb-0 fw-normal">{{ $category->id }}</h6>
                            </div>

                            <!-- Data item -->
                            <div class="col-8">
                                <small class="d-block d-lg-none">Booking date:</small>
                                <h6 class="mb-0 fw-normal">{{ $category->name }}</h6>
                            </div>

						    <!-- Data item -->
                            <div class="col">
                                <small class="d-block d-lg-none">Payment:</small>
                                <div class="badge bg-danger bg-opacity-10 text-danger">
                                    <form method="POST" action="{{ route('delete_room_category', $category->id) }}" id="delete_room_category">
                                        @csrf
                                        @method('delete')
                                    </form>

                                        <a class="h6 fw-light mb-0 text-body" onclick="event.preventDefault();
                                        document.getElementById('delete_room_category').submit();" >Supprimer</a>
                                </div>
                            </div>
					    </div>
                    @endforeach
            <!-- Table data -->

                </div>
            </div>
        </div>

    </div>
    <!-- Page content END -->

    </main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
@include('admin.gerant.script')
</body>
</html>
