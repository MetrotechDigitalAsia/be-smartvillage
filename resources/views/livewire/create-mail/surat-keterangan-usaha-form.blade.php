<div class="sktu-container" >
    <div class="form-group">
        <label>Nama Usaha</label>
        <input wire:model.lazy="business_name" class="form-control @error('business_name') is-invalid @enderror " type="text"  />
        @error('business_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Alamat Usaha</label>
        <input wire:model.lazy="business_address"  class="form-control @error('business_address') is-invalid @enderror " type="text"  />
        @error('business_address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <span class="form-text text-muted">Contoh: Jl. I Gst Ngr Rai. Dusun/Link, Br. Ubud</span>
    </div>
    <div class="form-group">
        <label>NPWP</label>
        <input wire:model.lazy="npwp" class="form-control @error('npwp') is-invalid @enderror " type="text"  />
        @error('npwp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bidang Usaha</label>
        <input wire:model.lazy="field_of_business" class="form-control @error('field_of_business') is-invalid @enderror " type="text"  />
        @error('field_of_business')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Provinsi</label>
        <select wire:change="getCity($event.target.value)" wire:model="province" name="provinsi" id="" class="form-control" >
            <option value="">-- Pilih Provinsi --</option>
            @foreach ($list_of_province as $item)
            <option data-id="{{ $item['id'] }}" value="{{ $item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    @if (!empty($province))
    <div class="form-group">
        <label>Kabupaten/Kota</label>
        <select wire:change="getDistrict($event.target.value)" wire:model="city" name="city" id="" class="form-control" >
            <option value="">-- Pilih Kabupaten --</option>
            @foreach ($list_of_city as $item)
            <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!empty($city))
    <div class="form-group">
        <label>Kecamatan</label>
        <select wire:change="getVillage($event.target.value)" wire:model="district" name="city" id="" class="form-control" >
            <option value="">-- Pilih Kecamatan --</option>
            @foreach ($list_of_district as $item)
            <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!empty($district))
    <div class="form-group">
        <label>Kelurahan/Desa</label>
        <select wire:model="village" name="city" id="" class="form-control" >
            <option value="">-- Pilih Kelurahan --</option>
            @foreach ($list_of_village as $item)
            <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    @endif
        
</div>

