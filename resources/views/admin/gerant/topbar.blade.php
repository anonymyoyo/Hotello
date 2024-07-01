<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <div class="d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-3 mb-sm-0">Liste de Gerants</h1>
            <div class="d-grid"><a href="{{ route('create') }}" class="btn btn-primary mb-0"><i class="bi bi-filetype-pdf me-2"></i>Noueau gerant</a>	</div>
        </div>
    </div>
</div>

<!-- Search and select START -->
<div class="row g-3 align-items-center justify-content-between mb-5">
    <!-- Search -->
    <div class="col-md-8">
        <form method="POST" class="rounded position-relative">
            @csrf
            <input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
            <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6"></i></button>
        </form>
    </div>

    <!-- Select option -->
    <div class="col-md-3">
        <!-- Short by filter -->
        <form>
            <select class="form-select js-choice" aria-label=".form-select-sm">
                <option value="">Sort by</option>
                <option>Free</option>
                <option>Newest</option>
                <option>Oldest</option>
            </select>
        </form>
    </div>
</div>
