<div>
    <h3 class="font-size-lg text-dark font-weight-bold mb-6">Data Surat</h3>

    @if ($mail->title == 'Surat Keterangan Tempat Usaha')
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
    @else

        <div class="form-group">
            <label>Nama Anak</label>
            <input wire:model.lazy="child_name" class="form-control @error('child_name') is-invalid @enderror " type="text"  />
            @error('child_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group validated">
            <label>Jenis Kelamin</label>
            <div class="radio-inline">
                <label class="radio radio-outline radio-success">
                    <input type="radio" value="Laki - Laki" wire:model.lazy="child_sex" name="jenis_kelamin"/>
                    <span></span>
                    Laki Laki
                </label>
                <label class="radio radio-outline radio-success">
                    <input type="radio" value="Perempuan" wire:model.lazy="child_sex" name="jenis_kelamin" />
                    <span></span>
                    Perempuan
                </label>
            </div>
            @error('child_sex')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input wire:model.lazy="child_birthplace" class="form-control @error('child_birthplace') is-invalid @enderror " type="text"  />
            @error('child_birthplace')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input wire:model.lazy="child_birth_date" class="form-control @error('child_birth_date') is-invalid @enderror " type="date"  />
                    @error('child_birth_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Waktu Lahir</label>
                    <input wire:model.lazy="child_birth_time" class="form-control @error('child_birth_time') is-invalid @enderror " type="time"  />
                    @error('child_birth_time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-group validated">
            <label>Tempat Dilahiran</label>
            @php $birthOfPlace = ['RS/RB', 'Puskesmas', 'Polindes', 'Rumah', 'Lainnya'] @endphp
            <select wire:model="child_birth_of_place" class="form-control @error('child_birth_of_place') is-invalid @enderror" id="exampleSelect1">
                <option>pilih...</option>
                @foreach ($birthOfPlace as $key => $item)
                <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
                @endforeach
            </select>
            @error('child_birth_of_place')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group validated">
            <label>Jenis Kelahiran</label>
            @php $birthType = ['Tunggal', 'Kembar 2', 'Kembar 3', 'Lainnya'] @endphp
            <select wire:model.lazy="child_birth_type" class="form-control @error('child_birth_type') is-invalid @enderror" id="exampleSelect1">
                <option>pilih...</option>
                @foreach ($birthType as $key => $item)
                <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
                @endforeach
            </select>
            @error('child_birth_type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Kelahiran Ke</label>
            <input wire:model.lazy="birth_count" class="form-control @error('birth_count') is-invalid @enderror " type="text"  />
            @error('birth_count')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <span class="form-text text-muted">Contoh: Satu</span>
        </div>

        <div class="form-group validated">
            <label>Penolong Kelahiran</label>
            @php $birthAttendant = ['Dokter', 'Bidan/Perawat', 'Dukun', 'Lainnya'] @endphp
            <select wire:model.lazy="birth_attendant" class="form-control @error('birth_attendant') is-invalid @enderror" id="exampleSelect1">
                <option>pilih...</option>
                @foreach ($birthAttendant as $key => $item)
                <option value="{{ $item }}" >{{ $key+1 }}. {{ $item }}</option>
                @endforeach
            </select>
            @error('birth_attendant')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group validated">
                    <label>Berat Bayi</label>
                    <div class="input-group">
                        <input wire:model.lazy="baby_weight" type="text" class="form-control @error('baby_weight') is-invalid @enderror" />
                        <div class="input-group-append"><span class="input-group-text">Kg</span></div>
                    </div>
                    @error('baby_weight')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group validated">
                    <label class="form-control-label" >Panjang Bayi</label>
                    <div class="input-group">
                        <input wire:model.lazy="baby_length" type="text" class="form-control @error('baby_length') is-invalid @enderror " />
                        <div class="input-group-append"><span class="input-group-text">Cm</span></div>
                    </div>
                    @error('baby_length')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        
    @endif
</div>
