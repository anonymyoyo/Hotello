<div class="card border">
    <!-- Card header -->
    <div class="card-header border-bottom">
        <h4 class="card-header-title">Personal Information</h4>
    </div>

    <!-- Card body START -->
    <div class="card-body">
        <!-- Form START -->
        <form class="row g-3">
            <!-- Profile photo -->
            <div class="col-12">
                <label class="form-label">Upload your profile photo<span class="text-danger">*</span></label>
                <div class="d-flex align-items-center">
                    <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                        <!-- Avatar place holder -->
                        <span class="avatar avatar-xl">
                            <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                        </span>
                    </label>
                    <!-- Upload button -->
                    <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                    <input id="uploadfile-1" class="form-control d-none" type="file">
                </div>
            </div>

            <!-- Name -->
            <div class="col-md-6">
                <label class="form-label">Full Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="{{ auth()->user()->name }}" placeholder="Enter your full name">
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <label class="form-label">Email address<span class="text-danger">*</span></label>
                <input type="email" class="form-control" value="{{ auth()->user()->email }}" placeholder="Enter your email id">
            </div>

            <!-- Mobile -->
            <div class="col-md-6">
                <label class="form-label">Mobile number<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="{{ auth()->user()->contact }}" placeholder="Enter your mobile number">
            </div>

            <!-- Nationality -->
            <div class="col-md-6">
                <label class="form-label">Nationality<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="{{ auth()->user()->pays }}" placeholder="Enter your mobile number">
                {{-- <select class="form-select js-choice">
                    <option value="">Select your country</option>
                    <option>USA</option>
                    <option selected>Paris</option>
                    <option>India</option>
                    <option>UK</option>
                </select> --}}
            </div>

            <!-- Date of birth -->
            {{-- <div class="col-md-6">
                <label class="form-label">Date of Birth<span class="text-danger">*</span></label>
                <input type="text" class="form-control flatpickr" value="29 Aug 1996" placeholder="Enter date of birth" data-date-format="d M Y">
            </div>

            <!-- Gender -->
            <div class="col-md-6">
                <label class="form-label">Select Gender<span class="text-danger">*</span></label>
                <div class="d-flex gap-4">
                    <div class="form-check radio-bg-light">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check radio-bg-light">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                    <div class="form-check radio-bg-light">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Others
                        </label>
                    </div>
                </div>
            </div> --}}

            <!-- Address -->
            <div class="col-12">
                <label class="form-label">Address</label>
                <textarea class="form-control" rows="3" spellcheck="false">{{ auth()->user()->addresse }}, {{ auth()->user()->ville }}, {{ auth()->user()->pays }}</textarea>
            </div>

            <!-- Button -->
            <div class="col-12 text-end">
                <a href="#" class="btn btn-primary mb-0">Save Changes</a>
            </div>
        </form>
        <!-- Form END -->
    </div>
    <!-- Card body END -->
</div>
