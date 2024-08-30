<div class="card border">
    <!-- Card header -->
    <div class="card-header border-bottom">
        <h4 class="card-header-title">Update email</h4>
        <p class="mb-0">Your current email address is <span class="text-primary">{{ auth()->user()->email }}</span></p>
    </div>

    <!-- Card body START -->
    <div class="card-body">
        <form>
            <!-- Email -->
            <label class="form-label">Enter your new email id<span class="text-danger">*</span></label>
            <input type="email" class="form-control" value="{{ auth()->user()->email }}" placeholder="Enter your email id">

            <div class="text-end mt-3">
                <a href="#" class="btn btn-primary mb-0">Save Email</a>
            </div>
        </form>
    </div>
    <!-- Card body END -->
</div>
<!-- Update email END -->

<!-- Update Password START -->
<div class="card border">
    <!-- Card header -->
    <div class="card-header border-bottom">
        <h4 class="card-header-title">Update Password</h4>
        <p class="mb-0">Your current email address is <span class="text-primary">{{ auth()->user()->email }}</span></p>
    </div>

    <!-- Card body START -->
    <form class="card-body">
        <!-- Current password -->
        <div class="mb-3">
            <label class="form-label">Current password</label>
            <input class="form-control" type="password" placeholder="Enter current password">
        </div>
        <!-- New password -->
        <div class="mb-3">
            <label class="form-label"> Enter new password</label>
            <div class="input-group">
                <input class="form-control fakepassword" placeholder="Enter new password" type="password" id="psw-input">
                <span class="input-group-text p-0 bg-transparent">
                    <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                </span>
            </div>
        </div>
        <!-- Confirm -->
        <div class="mb-3">
            <label class="form-label">Confirm new password</label>
            <input class="form-control" type="password" placeholder="Confirm new password">
        </div>

        <div class="text-end">
            <a href="#" class="btn btn-primary mb-0">Change Password</a>
        </div>
    </form>
    <!-- Card body END -->
</div>
