<div>
    <h3 class="font-size-lg text-dark font-weight-bold mb-6">Data Mutasi</h3>

    <div class="form-group">
        <label>Tanggal Kematian</label>
        <input wire:model.lazy="date_of_death" class="form-control @error('date_of_death') is-invalid @enderror " type="date"  />
        @error('date_of_death')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Penyebab Kematian</label>
        <input wire:model.lazy="cause_of_death"  class="form-control @error('cause_of_death') is-invalid @enderror " type="text"  />
        @error('cause_of_death')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row justify-content-end">
        <div class="col-4">
            <a href="/data-penduduk/penduduk/mutasi/meninggal" class="btn btn-secondary mr-2">Batal</a>
            <button type="button" wire:click="handleSubmit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
