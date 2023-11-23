<div>

    {{-- <div class="form-group">
        <label>Alamat Lengkap Suami </label>
        <input wire:model.lazy="subject_1_address" class="form-control  @error('subject_1_address') is-invalid @enderror" type="text"  />
        @error('subject_1_address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <span class="form-text text-muted">Contoh: Ubud, Desa/Kelurahan Getasan Kecamatan Petang, Kabupaten/Kota Badung Provinsi Bali</span>
    </div> --}}

    <p class="text-muted" >Alamat Lengkap Suami</p>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <div class="form-group">
                    <label>Provinsi</label>
                    <select wire:change="getCity($event.target.value, 1)" wire:model="subject_1_province" name="provinsi" id="" class="form-control" >
                        <option value="">pilih provinsi</option>
                        @foreach ($subject_1_list_of_province as $item)
                        <option data-id="{{ $item['id'] }}" value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Kabupaten/Kota</label>
                <select wire:change="getDistrict($event.target.value,1)" wire:model="subject_1_city" name="city" id="" class="form-control" >
                    <option value="">pilih kabupaten</option>
                    @foreach ($subject_1_list_of_city as $item)
                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Kecamatan</label>
                <select wire:change="getVillage($event.target.value, 1)" wire:model="subject_1_district" name="city" id="" class="form-control" >
                    <option value="">pilih kota</option>
                    @foreach ($subject_1_list_of_district as $item)
                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Kelurahan/Desa</label>
                <select wire:model="subject_1_village" name="city" id="" class="form-control" >
                    <option value="">pilih kabupaten</option>
                    @foreach ($subject_1_list_of_village as $item)
                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <p class="text-muted" >Alamat Lengkap Istri</p>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <div class="form-group">
                    <label>Provinsi</label>
                    <select wire:change="getCity($event.target.value, 2)" wire:model="subject_2_province" name="provinsi" id="" class="form-control" >
                        <option value="">pilih provinsi</option>
                        @foreach ($subject_2_list_of_province as $item)
                        <option data-id="{{ $item['id'] }}" value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Kabupaten/Kota</label>
                <select wire:change="getDistrict($event.target.value,2)" wire:model="subject_2_city" name="city" id="" class="form-control" >
                    <option value="">pilih kabupaten</option>
                    @foreach ($subject_2_list_of_city as $item)
                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Kecamatan</label>
                <select wire:change="getVillage($event.target.value, 2)" wire:model="subject_2_district" name="city" id="" class="form-control" >
                    <option value="">pilih kota</option>
                    @foreach ($subject_2_list_of_district as $item)
                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Kelurahan/Desa</label>
                <select wire:model="subject_2_village" name="city" id="" class="form-control" >
                    <option value="">pilih kabupaten</option>
                    @foreach ($subject_2_list_of_village as $item)
                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

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
        <label>Lokasi Perkawinan</label>
        <input wire:model.lazy="marriage_location" class="form-control @error('marriage_location') is-invalid @enderror " type="text"  />
        @error('marriage_location')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
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

    <h3 class="font-size-lg text-black-50 font-weight-bold mb-6">Data Orang Tua</h3>

    <div class="form-group">
        <label>Nama Ayah dari Suami </label>
        <input wire:model.lazy="subject_1_father_name" class="form-control @error('subject_1_father_name') is-invalid @enderror " type="text"  />
        @error('subject_1_father_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>NIK Ayah dari Suami </label>
        <input wire:model.lazy="subject_1_father_nik" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Umur Ayah dari Suami </label>
        <input wire:model.lazy="subject_1_father_age" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Pekerjaan Ayah dari Suami </label>
        <input wire:model.lazy="subject_1_father_job" class="form-control" type="text"  />
    </div>

    <div class="form-group">
        <label>Nama Ibu dari Suami </label>
        <input wire:model.lazy="subject_1_mother_name" class="form-control @error('subject_1_mother_name') is-invalid @enderror " type="text"  />
        @error('subject_1_mother_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>NIK Ibu dari Suami </label>
        <input wire:model.lazy="subject_1_mother_nik" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Umur Ibu dari Suami </label>
        <input wire:model.lazy="subject_1_mother_age" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Pekerjaan Ibu dari Suami </label>
        <input wire:model.lazy="subject_1_mother_job" class="form-control" type="text"  />
    </div>

    <div class="form-group">
        <label>Nama Ayah dari Istri </label>
        <input wire:model.lazy="subject_2_father_name" class="form-control @error('subject_2_father_name') is-invalid @enderror " type="text"  />
        @error('subject_2_father_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>NIK Ayah dari Istri </label>
        <input wire:model.lazy="subject_2_father_nik" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Umur Ayah dari Istri </label>
        <input wire:model.lazy="subject_2_father_age" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Pekerjaan Ayah dari Istri </label>
        <input wire:model.lazy="subject_2_father_job" class="form-control" type="text"  />
    </div>

    <div class="form-group">
        <label>Nama Ibu dari Istri </label>
        <input wire:model.lazy="subject_2_mother_name" class="form-control @error('subject_2_mother_name') is-invalid @enderror " type="text"  />
        @error('subject_2_mother_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>NIK Ibu dari Istri </label>
        <input wire:model.lazy="subject_2_mother_nik" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Umur Ibu dari Istri </label>
        <input wire:model.lazy="subject_2_mother_age" class="form-control" type="number"  />
    </div>

    <div class="form-group">
        <label>Pekerjaan Ibu dari Istri </label>
        <input wire:model.lazy="subject_2_mother_job" class="form-control" type="text"  />
    </div>

    {{-- <div class="form-group">
        <label>Provinsi</label>
        <select wire:change="getCity($event.target.value)" wire:model="province" name="provinsi" id="" class="form-control" >
            <option value="">pilih provinsi</option>
            @foreach ($list_of_province as $item)
            <option data-id="{{ $item['id'] }}" value="{{ $item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>

    @if (!empty($province))
    <div class="form-group">
        <label>Kabupaten/Kota</label>
        <select wire:change="getDistrict($event.target.value)" wire:model="city" name="city" id="" class="form-control" >
            <option value="">pilih kabupaten</option>
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
            <option value="">pilih kota</option>
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
            <option value="">pilih kabupaten</option>
            @foreach ($list_of_village as $item)
            <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    @endif --}}

</div>
