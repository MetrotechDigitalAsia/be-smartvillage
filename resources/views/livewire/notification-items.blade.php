<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
    <!--begin::Item-->
    @foreach ($notifications as $notify)
        <div class="d-flex align-items-center flex-wrap mb-5">
            <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                    <img src="{{ asset('storage/'. $notify->data['data']['item_image']) }}" class="h-50 align-self-center" alt="" />
                </span>
            </div>
            <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">{{ $notify->data['data']['item_name'] }}</a>
                <span class="text-muted font-weight-bold">{{ $notify->created_at->diffForHumans() }}</span>
            </div>
            @livewire('delete-notif', ['notifId' => $notify->id], key($notify->id))
        </div>
    @endforeach
    <!--end::Item-->
</div>