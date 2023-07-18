<div>
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
    </div>
    <div class="form-group">
        <label>NPWP</label>
        <input wire:model.lazy="npwp" class="form-control @error('npwp') is-invalid @enderror " type="text"  />
        @error('npwp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
