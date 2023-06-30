@include('admin.mailView.mail-header')

<div class="mail-body pt-8 px-8 text-center d-flex flex-column align-items-center pb-10">

    @include('admin.mailView.'.$data->slug)

    @include('admin.mailView.mail-footer')
</div>