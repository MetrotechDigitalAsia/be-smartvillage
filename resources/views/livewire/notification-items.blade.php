@if (count($notifications) == 0)
    <div class="d-flex flex-center text-center text-muted min-h-200px">
        <i class="flaticon2-bell-2 mr-3" ></i>
        Tidak ada pemberitahuan.
    </div>
@else
<div class="navi navi-hover my-4 px-6 scroll max-h-300px" style="overflow-y: auto;" data-height="300" data-mobile-height="200">
    {{-- <div class="scroll pr-7 mr-4 p-4" data-scroll="true" data-height="300" data-mobile-height="200"> --}}
    @foreach ($notifications as $notify)
        <div class="d-flex align-items-center flex-wrap mb-5">
            <div class="symbol symbol-50 symbol-light mr-5">
                <span class="symbol-label">
                    <img src="{{ asset('storage/'. $notify->data['data']['item_image']) }}" class="h-50 align-self-center" alt="" />
                </span>
            </div>
            <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="/informasi-desa/umkm/show/{{ $notify->data['data']['item_name']  }}" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">{{ $notify->data['data']['item_name'] }}</a>
                <span class="text-muted font-weight-bold">{{ $notify->created_at->diffForHumans() }}</span>
            </div>
            <div class="navi-label">
                <i wire:click="deleteNotif('{{ $notify->id }}')" class="flaticon-close text-hover-primary" ></i>
            </div>
        </div>
    @endforeach
</div>
@endif
