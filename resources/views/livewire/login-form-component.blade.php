<div class="login-form login-signin">
    <div class="text-center mb-10 mb-lg-20">
        <h3 class="font-size-h1">Sign In</h3>
        <p class="text-muted font-weight-bold">Enter your Email and password</p>
    </div>
    <!--begin::Form-->
    <form class="form" wire:submit.prevent="handleSubmit" id="kt_login_signin_form"  >

        @csrf

        <div class="form-group">
            <input wire:model.lazy="email" class="form-control form-control-solid h-auto py-5 px-6 @error('password') is-invalid @enderror" type="text" placeholder="Email" name="email" autocomplete="off" />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input wire:model.lazy="password" class="form-control form-control-solid @error('password') is-invalid @enderror h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" />
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!--begin::Action-->
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
        </div>
        <!--end::Action-->
    </form>
    <!--end::Form-->
</div>