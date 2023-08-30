<div class="offcanvas-content">
    <!--begin::Wrapper-->
    <form wire:submit.prevent="handleChange" >
        <div class="offcanvas-wrapper mb-5 scroll-pull">
            <div class="form-group">
                <label>Nomor Surat</label>
                <input type="text" class="form-control" wire:model.lazy="mail_num" placeholder="Masukan Nomor Surat"/>
            </div>

            <div class="form-group">
                <label>Nomor Registrasi</label>
                <input type="text" class="form-control" wire:model.lazy="registration_number" placeholder="Masukan Nomor Registrasi"/>
            </div>
            <div class="form-group">
                <label>Tanggal Registrasi</label>
                <input type="date" class="form-control" wire:model.lazy="registration_date" placeholder="Masukan Tanggal Registrasi"/>
            </div>
            <div class="form-group">
                <label for="saksi1" >Saksi 1</label>
                <select class="form-control" wire:model.lazy="saksi1" id="saksi1">
                    <option>pilih saksi ...</option>
                    @foreach ($signatures as $item)
                    <option value="{{ $item->id }}" @if($saksi1 == $item->id) selected @endif >{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="saksi2" >Saksi 2</label>
                <select class="form-control" wire:model.lazy="saksi2" id="saksi2">
                    <option>pilih saksi ...</option>
                    @foreach ($signatures as $item)
                    <option value="{{ $item->id }}" @if($saksi2 == $item->id) selected @endif >{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            @if ($slug == 'surat-keterangan-meninggal')
            <div class="form-group">
                <label for="petugas" >Petugas </label>
                <select class="form-control" wire:model.lazy="petugas" id="petugas">
                    <option>pilih petugas ...</option>
                    @foreach ($signatures as $item)
                    <option value="{{ $item->id }}" @if($petugas == $item->id) selected @endif >{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            @endif
        </div>
        <!--end::Wrapper-->
        <!--begin::Purchase-->
        <div class="offcanvas-footer px-6 d-flex position-absolute left-0 right-0" style="bottom: 30px;" >
            <a class="btn btn-light btn-block mr-5" wire:click="resetMail" >
                Atur Ulang
            </a>
            <button class="btn btn-primary btn-block mt-0" type="submit" >
                Terapkan
            </button>
        </div>
        <!--end::Purchase-->
    </form>
</div>
