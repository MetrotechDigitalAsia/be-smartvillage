<div>
    <div class="form-group">
        <label>Kode Pos</label>
        <input wire:model.lazy="post_code" class="form-control @error('post_code') is-invalid @enderror " type="text"  />
        @error('post_code')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Klasifikasi Kepindahan</label>
        <select wire:model.lazy="displacement_classification" name="city" id="" class="form-control @error('displacement_classification') is-invalid @enderror " >
            <option value="">pilih jenis</option>
            @foreach ([
                'Dalam satu desa/kelurahan atau yang disebut dengan nama lain',
                'Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan',
                'Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota',
                'Antar kabupaten/kota dalam satu provinsi',
                'Antar provinsi'
            ] as $i => $item)
            <option value="{{ $i+1 }}">{{ $item }}</option>
            @endforeach
        </select>
        @error('displacement_classification')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Jenis Kepindahan</label>
        <select wire:model.lazy="displacement_type" name="city" id="" class="form-control @error('displacement_type') is-invalid @enderror " >
            <option value="">pilih jenis</option>
            @foreach ([
                'Kepala Keluarga',
                'Kepala Keluarga dan Seluruh Anggota Keluarga',
                'Kepala Keluarga dan Sebagian Anggota Keluarga',
                'Anggota Keluarga'
            ] as $i => $item)
            <option value="{{ $i+1 }}">{{ $item }}</option>
            @endforeach
        </select>
        @error('displacement_type')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Alasan Pindah</label>
        <select wire:model.lazy="moving_reason" name="city" id="" class="form-control @error('moving_reason') is-invalid @enderror " >
            <option value="">pilih alasan</option>
            @foreach ([
                'Pekerjaan',
                'Pendidikan',
                'Keamanan',
                'Kesehatan',
                'Perumahan',
                'Keluarga',
                'Menikah',
                'Lainnya'
            ] as $i => $item)
            <option value="{{ $i+1 }}">{{ $item }}</option>
            @endforeach
        </select>
        @error('moving_reason')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Anggota Keluarga Tidak Pindah</label>
        <select wire:model.lazy="not_family_displacement" name="city" id="" class="form-control @error('not_family_displacement') is-invalid @enderror " >
            <option value="">pilih</option>
            @foreach (['Numpang KK', 'Membuat KK Baru'] as $i => $item)
            <option value="{{ $i+1 }}">{{ $item }}</option>
            @endforeach
        </select>
        @error('not_family_displacement')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Anggota Keluarga Yang Pindah</label>
        <select wire:model.lazy="family_displacement" name="city" id="" class="form-control @error('family_displacement') is-invalid @enderror " >
            <option value="">pilih</option>
            @foreach (['Numpang KK', 'Membuat KK Baru'] as $i => $item)
            <option value="{{ $i+1 }}">{{ $item }}</option>
            @endforeach
        </select>
        @error('family_displacement')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Provinsi</label>
        <select wire:change="getCity($event.target.value)" wire:model="province" name="provinsi" id="" class="form-control" >
            <option value="">Pilih Provinsi</option>
            @foreach ($list_of_province as $item)
            <option data-id="{{ $item['id'] }}" value="{{ Str::title($item['name']) }}">{{ Str::title($item['name']) }}</option>
            @endforeach
        </select>
    </div>
    @if (!empty($province))
    <div class="form-group">
        <label>Kabupaten/Kota</label>
        <select wire:change="getDistrict($event.target.value)" wire:model="city" name="city" id="" class="form-control" >
            <option value="">pilih kabupaten</option>
            @foreach ($list_of_city ?? [] as $item)
            <option value="{{ Str::title($item['name']) }}">{{ Str::title($item['name']) }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!empty($city))
    <div class="form-group">
        <label>Kecamatan</label>
        <select wire:change="getVillage($event.target.value)" wire:model="district" name="city" id="" class="form-control" >
            <option value="">pilih kota</option>
            @foreach ($list_of_district ?? [] as $item)
            <option value="{{ Str::title($item['name']) }}">{{ Str::title($item['name']) }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!empty($district))
    <div class="form-group">
        <label>Kelurahan/Desa</label>
        <select wire:model="village" name="city" id="" class="form-control" >
            <option value="">pilih kabupaten</option>
            @foreach ($list_of_village ?? [] as $item)
            <option value="{{ Str::title($item['name']) }}">{{ Str::title($item['name']) }}</option>
            @endforeach
        </select>
    </div>
    @endif
</div>
