<div>
    <div class="form-group validated">
        <label>Status Perkawinan Sebelum Kawin</label>
        @php $status = ['Kawin', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati'] @endphp
        <select wire:model="marriage_status" class="form-control @error('marriage_status') is-invalid @enderror" id="exampleSelect1">
            <option>pilih...</option>
            @foreach ($status as $key => $item)
            <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
            @endforeach
        </select>
        @error('marriage_status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Perkawinan Ke</label>
        <input wire:model.lazy="marriage_to" class="form-control @error('marriage_to') is-invalid @enderror " type="text"  />
        @error('marriage_to')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <span class="form-text text-muted">Contoh: 1 (Satu)</span>
    </div>

    <div class="form-group">
        <label>Tanggal Pemberkatan Perkawinan</label>
        <input wire:model.lazy="marriage_date" class="form-control @error('marriage_date') is-invalid @enderror " type="date"  />
        @error('marriage_date')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group validated">
        <label>Agama</label>
        @php $agama = ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha', 'K.hucu'] @endphp
        <select wire:model="religion" class="form-control @error('religion') is-invalid @enderror" id="exampleSelect1">
            <option>pilih...</option>
            @foreach ($agama as $key => $item)
            <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
            @endforeach
        </select>
        @error('religion')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <h3 class="font-size-lg text-black-50 font-weight-bold mb-6">Data Kepala Keluarga</h3>

    <div class="form-group">
        <label>Nama </label>
        <input wire:model.lazy="head_of_family_name" class="form-control @error('head_of_family_name') is-invalid @enderror " type="text"  />
        @error('head_of_family_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nomor Telepon </label>
                <input wire:model.lazy="head_of_family_phone" class="form-control @error('head_of_family_phone') is-invalid @enderror " type="number"  />
                @error('head_of_family_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Email </label>
                <input wire:model.lazy="head_of_family_email" class="form-control @error('head_of_family_email') is-invalid @enderror " type="email"  />
                @error('head_of_family_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Jumlah Anggota Keluarga </label>
        <input wire:model.lazy="number_of_family_members" class="form-control @error('number_of_family_members') is-invalid @enderror " type="number"  />
        @error('number_of_family_members')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <h3 class="font-size-lg text-black-50 font-weight-bold mb-6">Data Wilayah</h3>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Kode Pos </label>
                <input wire:model.lazy="postal_code" class="form-control @error('postal_code') is-invalid @enderror " type="number"  />
                @error('postal_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group validated">
                <label>Banjar</label>
                @php $banjar = ['Br. Ubud', 'Br. Tengah', 'Br. Buangga', 'Br. Kauh'] @endphp
                <select wire:model="banjar" class="form-control @error('banjar') is-invalid @enderror" id="exampleSelect1">
                    <option>pilih...</option>
                    @foreach ($banjar as $key => $item)
                    <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
                    @endforeach
                </select>
                @error('banjar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>


</div>
