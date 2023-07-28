<div>

    <div class="form-group">
        <label>Anak ke</label>
        <input wire:model.lazy="child_to" class="form-control @error('child_to') is-invalid @enderror " type="text"  />
        @error('child_to')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <span class="form-text text-muted">Contoh: 1 (Satu)</span>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Tanggal Kematian</label>
                <input wire:model.lazy="date_of_death" class="form-control @error('date_of_death') is-invalid @enderror " type="date"  />
                @error('date_of_death')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Pukul Kematian</label>
                <input wire:model.lazy="time_of_death" class="form-control @error('time_of_death') is-invalid @enderror " type="time"  />
                @error('time_of_death')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
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
    <div class="form-group">
        <label>Tempat Kematian</label>
        <input wire:model.lazy="place_of_death" class="form-control @error('place_of_death') is-invalid @enderror " type="text"  />
        @error('place_of_death')
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

    <h3 class="font-size-lg text-black-50 font-weight-bold mb-6">Data Orang Tua</h3>

    <div class="form-group">
        <label>Nama Ayah</label>
        <input wire:model.lazy="subject_father_name" class="form-control @error('subject_father_name') is-invalid @enderror " type="text"  />
        @error('subject_father_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nik Ayah</label>
        <input wire:model.lazy="subject_father_nik" class="form-control @error('subject_father_nik') is-invalid @enderror " type="number"  />
        @error('subject_father_nik')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group validated">
        <label>Kewarganegaraan Ayah</label>
        <select wire:model="subject_father_citizenship" class="form-control @error('subject_father_citizenship') is-invalid @enderror" id="exampleSelect1">
            <option>pilih...</option>
            <option value="WNI" >Warga Negara Indonesia (WNI)</option>
            <option value="WNA" >Warga Negara Asing (WNA)</option>
        </select>
        @error('subject_father_citizenship')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Tempat Lahir Ayah</label>
                <input wire:model.lazy="subject_father_birthplace" class="form-control @error('subject_father_birthplace') is-invalid @enderror " type="text"  />
                @error('subject_father_birthdate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Tanggal Lahir Ayah</label>
                <input wire:model.lazy="subject_father_birthdate" class="form-control @error('subject_father_birthdate') is-invalid @enderror " type="date"  />
                @error('subject_father_birthplace')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Nama Ibu</label>
        <input wire:model.lazy="subject_mother_name" class="form-control @error('subject_mother_name') is-invalid @enderror " type="text"  />
        @error('subject_mother_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nik Ibu</label>
        <input wire:model.lazy="subject_mother_nik" class="form-control @error('subject_mother_nik') is-invalid @enderror " type="number"  />
        @error('subject_mother_nik')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group validated">
        <label>Kewarganegaraan Ibu</label>
        <select wire:model="subject_mother_citizenship" class="form-control @error('subject_mother_citizenship') is-invalid @enderror" id="exampleSelect1">
            <option>pilih...</option>
            <option value="WNI" >Warga Negara Indonesia (WNI)</option>
            <option value="WNA" >Warga Negara Asing (WNA)</option>
        </select>
        @error('subject_mother_citizenship')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Tempat Lahir Ibu</label>
                <input wire:model.lazy="subject_mother_birthplace" class="form-control @error('subject_mother_birthplace') is-invalid @enderror " type="text"  />
                @error('subject_mother_birthdate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Tanggal Lahir Ibu</label>
                <input wire:model.lazy="subject_mother_birthdate" class="form-control @error('subject_mother_birthdate') is-invalid @enderror " type="date"  />
                @error('subject_mother_birthplace')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>


</div>
