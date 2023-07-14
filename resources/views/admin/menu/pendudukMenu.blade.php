@extends('admin.app')

@section('content')

<div class="d-flex flex-row">
    <!--begin::List-->
    <div class="flex-row-fluid d-flex flex-column">
        <div class="d-flex flex-column flex-grow-1">
            <!--begin::Card-->
            @yield('table')
            <!--end::Card-->
        </div>
    </div>
    <!--end::List-->
</div>
    
@endsection