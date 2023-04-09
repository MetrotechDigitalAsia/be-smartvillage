@if($errors->any() || session()->has('error'))
<div class="row pt-8 px-8">
    <div class="col-lg-12">
        <div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
            <div class="alert-text">
                <ul class="m-0" >
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                {{ session()->has('error') ?? '' }}
            </div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    </div>
</div>
@endif