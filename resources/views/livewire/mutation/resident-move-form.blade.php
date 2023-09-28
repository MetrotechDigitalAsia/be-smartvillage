<div>

    <h3 class="font-size-lg text-dark font-weight-bold mb-6">Data Mutasi</h3>

    <div class="form-group">
        <label>Tanggal Pindah</label>
        <input wire:model.lazy="move_date" class="form-control @error('move_date') is-invalid @enderror " type="date"  />
        @error('move_date')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Alasan Pindah</label>
        <input wire:model.lazy="reason"  class="form-control @error('reason') is-invalid @enderror " type="text"  />
        @error('reason')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row justify-content-end">
        <div class="col-4">
            <a href="data-penduduk/penduduk/mutasi/pindah-keluar" class="btn btn-secondary mr-2">Batal</a>
            <button type="button" wire:click="handleSubmit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
