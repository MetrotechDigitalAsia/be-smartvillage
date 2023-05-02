@if (count($notifications) == 0)
    <div class="d-flex flex-center text-center text-muted min-h-200px">
        <i class="flaticon2-bell-2 mr-3" ></i>
        Tidak ada pemberitahuan.
    </div>    
@else
    <div class="navi scroll my-4 max-h-300px" data-scroll="true" data-height="300" data-mobile-height="200">
        <!--begin::Item-->
        @foreach ($notifications as $item)
        <a href="#" class="navi-item">
            <div class="navi-link">
                <span class="symbol symbol-40 mr-3">
                    <span class="symbol-label"><i class="flaticon2-mail text-success"></i></span>
                </span>
                <div class="navi-text">
                    <div class="font-weight-bold">{{ $item->data['data']['title'] }}</div>
                    <div class="text-muted"> ~<span style="font-size: 12px;" >{{ $item->data['data']['sender'] }}</span> <br> {{ $item->created_at->diffForHumans() }}</div>
                </div>
                <div class="navi-label">
                    <i wire:click="deleteNotif('{{ $item->id }}')" class="flaticon-close text-hover-primary" ></i>
                </div>
            </div>
        </a>
        @endforeach
        <!--end::Item-->
    </div>
@endif