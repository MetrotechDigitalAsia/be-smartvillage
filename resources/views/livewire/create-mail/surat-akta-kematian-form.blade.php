<div>

    <div class="form-group">
        <label>Anak ke</label>
        <input wire:model.lazy="child_to" class="form-control @error('child_to') is-invalid @enderror " type="text"  />
        @error('child_to')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Tanggal Kematian</label>
        <input wire:model.lazy="date_of_death" class="form-control @error('date_of_death') is-invalid @enderror " type="date"  />
        @error('date_of_death')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group validated">
        <label>Penyebab Kematian</label>
        @php $causesOfDeath = ['Sakit Biasa/Tua', 'Wabah Penyakit', 'Kecelakaan', 'Kriminalitas', 'Bunuh Diri', 'Lainnya'] @endphp
        <select wire:model="cause_of_death" class="form-control @error('cause_of_death') is-invalid @enderror" id="exampleSelect1">
            <option>pilih...</option>
            @foreach ($causesOfDeath as $key => $item)
            <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
            @endforeach
        </select>
        @error('cause_of_death')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group validated">
        <label>Yang Menerangkan </label>
        @php $items = ['Dokter', 'Tenaga Kesehatan', 'Kepolisian', 'Lainnya'] @endphp
        <select wire:model="annotator" class="form-control @error('annotator') is-invalid @enderror" id="exampleSelect1">
            <option>pilih...</option>
            @foreach ($items as $key => $item)
            <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
            @endforeach
        </select>
        @error('annotator')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>
