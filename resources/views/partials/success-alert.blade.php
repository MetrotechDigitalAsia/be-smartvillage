@if (session()->has('success'))
<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
    <div class="alert-text">{{ session('success') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
    <div class="alert-text">{{ session('error') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>
@endif