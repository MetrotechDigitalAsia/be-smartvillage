@extends('admin.app')

@section('content')

<form action="{{ empty($outsider) ? route('storeOutsiderData') : url('/data-penduduk/penduduk-luar/update/'.$outsider->id) }}" method="post">

    @csrf

<div class="card card-custom">

    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-center flex-row ">
            <h3 class="card-label font-weight-bolder text-dark">{{ empty($outsider) ? 'Tambah Data' : 'Ubah Data' }}</h3>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <div class="card-body pt-0">

        <!--begin::Heading-->
        <!--begin::Form Group-->

        <div class="card card-custom" style="box-shadow: none;" >
            <div class="card-header card-header-tabs-line px-0">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#pribadi_tab">
                            <span class="nav-icon"><i class="flaticon2-user-outline-symbol"></i></span>
                            <span class="nav-text">Pribadi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#keluarga_tab">
                            <span class="nav-icon"><i class="flaticon2-group"></i></span>
                            <span class="nav-text">Keluarga</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pernikahan_tab">
                            <span class="nav-icon"><i class="flaticon2-cube-1"></i></span>
                            <span class="nav-text">Pernikahan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body px-0">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pribadi_tab" role="tabpanel" aria-labelledby="pribadi_tab" >

                        <div class="row ">
                            <div class="col mr-10">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Nama <span style="color: red;" >*</span> </label>
                                    <div class="col">
                                        <input required class="form-control @error('nama') is-invalid @enderror form-control-lg " type="text" name="nama" value="{{$outsider['nama'] ?? '' }}" required />
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('tempat_lahir') is-invalid @enderror form-control-lg " type="text" name="tempat_lahir" value="{{$outsider['tempat_lahir'] ?? '' }}" required />
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('tanggal_lahir') is-invalid @enderror form-control-lg " type="date" name="tanggal_lahir" value="{{ !empty($outsider['tanggal_lahir']) ? Carbon\Carbon::createFromFormat('Y-m-d', $outsider['tanggal_lahir'])->format('Y-m-d')  : '' }}" required />
                                    </div>
                                </div>

                                @if (!empty($outsider))
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Umur</label>
                                        <div class="col">
                                            <input class="form-control form-control-lg " readonly name="UMUR" value="{{$outsider['umur'] ?? '' }}" />
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('alamat') is-invalid @enderror form-control-lg " type="text" name="alamat" value="{{$outsider['alamat'] ?? '' }}" required />
                                        @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Kewarganegaraan<span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $status = ['WNA', 'WNI']
                                        @endphp
                                        <select class="form-control form-control-lg " name="kewarganegaraan" required >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['kewarganegaraan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Agama <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <select class="form-control form-control-lg " name="agama" required >
                                            @php
                                                $banjar = ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu']
                                            @endphp
                                            <option value="">Pilih Agama...</option>
                                            @foreach ($banjar as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['agama'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">SHDK</label>
                                    <div class="col">
                                        @php
                                            $banjar = ['KEPALA KELUARGA', 'SUAMI', 'ISTRI', 'ANAK', 'MENANTU', 'CUCU']
                                        @endphp
                                        <select class="form-control form-control-lg " name="shdk" >
                                            <option value="">Pilih...</option>
                                            @foreach ($banjar as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['shdk'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col">

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Golongan Darah</label>
                                    <div class="col">
                                        @php
                                            $status = ['A', 'B', 'O', 'AB', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']
                                        @endphp
                                        <select class="form-control form-control-lg " name="golongan_darah"  >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['golongan_darah'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Jenis Kelamin <span style="color: red;" >*</span></label>
                                    <div class="col-9 col-form-label">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input required {{!empty($outsider) ? $outsider['jenis_kelamin']=="Laki-Laki" ? 'checked' : '' : ''}} type="radio" name="jenis_kelamin" value="Laki-Laki" required/>
                                                <span></span>
                                                Laki Laki
                                            </label>
                                            <label class="radio radio-outline radio-success">
                                                <input required {{!empty($outsider) ? $outsider['jenis_kelamin']=="Perempuan" ? 'checked' : '' : ''}}  type="radio" name="jenis_kelamin" value="Perempuan" />
                                                <span></span>
                                                Perempuan
                                            </label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pendidikan Terakhir <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $pendidikan = ['TDK/BLM SEKOLAH','PAUD', 'TK', 'TIDAK TAMAT SD','BELUM TAMAT SD', 'SD', 'SMP/SEDERAJAT', 'SMA/SEDERAJAT', 'D I/II', 'D III', 'D IV/S1', 'S2', 'S3']
                                        @endphp
                                        <select class="form-control form-control-lg " name="pendidikan" required >
                                            <option value="">Pilih...</option>
                                            @foreach ($pendidikan as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['pendidikan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="pekerjaan" value="{{$outsider['pekerjaan'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No KK <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('no_kk') is-invalid @enderror form-control-lg " type="number" name="no_kk" value="{{$outsider['no_kk'] ?? '' }}" required />
                                        @error('no_kk')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No NIK <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('no_nik') is-invalid @enderror form-control-lg " type="number" name="no_nik" value="{{$outsider['no_nik'] ?? '' }}" required />
                                        @error('no_nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">    
                                    <label class="col-xl-3 col-lg-3 col-form-label">Akta Kelahiran</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadioKelahiran(this)" {{!empty($outsider) ? $outsider['status_akta_kelahiran']=="1" ? 'checked' : '' : ''}} type="radio" name="status_akta_kelahiran" value="1" />
                                                <span></span>
                                                Ada
                                            </label>
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadioKelahiran(this)" {{!empty($outsider) ? $outsider['status_akta_kelahiran']=="0" ? 'checked' : '' : ''}}  type="radio" name="status_akta_kelahiran" value="0" />
                                                <span></span>
                                                Belum Ada
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No Akta Kelahiran <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input required class="form-control @error('no_nik') is-invalid @enderror form-control-lg " type="text" name="no_akta_kelahiran" value="{{$outsider['no_akta_kelahiran'] ?? '' }}" required {{!empty($outsider) ? $outsider['status_akta_kelahiran']=="0" ? 'disabled' : '' : ''}} />
                                        @error('no_nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="keluarga_tab" role="tabpanel" aria-labelledby="keluarga_tab"   >

                        <div class="row">
                            <div class="col mr-10">
                                
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Ayah <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="ayah" value="{{$outsider['ayah'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Nik Ayah <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="nik_ayah" value="{{$outsider['nik_ayah'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Umur Ayah <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="number" name="umur_ayah" value="{{$outsider['umur_ayah'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan Ayah <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="pekerjaan_ayah" value="{{$outsider['pekerjaan_ayah'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat Ayah <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="alamat_ayah" value="{{$outsider['alamat_ayah'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Kewarganegaraan Ayah<span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $status = ['WNA', 'WNI']
                                        @endphp
                                        <select class="form-control form-control-lg " name="kewarganegaraan_ayah" required >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['kewarganegaraan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col">

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Ibu <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="ibu" value="{{$outsider['ibu'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Nik Ibu <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="nik_ibu" value="{{$outsider['nik_ibu'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Umur Ibu <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="umur_ibu" value="{{$outsider['umur_ibu'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pekerjaan Ibu <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="text" name="pekerjaan_ibu" value="{{$outsider['pekerjaan_ibu'] ?? '' }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Kewarganegaraan Ibu <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $status = ['WNA', 'WNI']
                                        @endphp
                                        <select class="form-control form-control-lg " name="kewarganegaraan_ibu" required >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['kewarganegaraan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="pernikahan_tab" role="tabpanel" aria-labelledby="pernikahan_tab"  >

                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Status Perkawinan <span style="color: red;" >*</span></label>
                                    <div class="col">
                                        @php
                                            $status = ['Kawin Tercatat', 'Kawin Belum Tercatat', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati']
                                        @endphp
                                        <select class="form-control form-control-lg " name="status_perkawinan" required >
                                            <option value="">Pilih ...</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item }}" {{ !empty($outsider) ? $outsider['status_perkawinan'] == $item ? 'selected' : '' : ''}}  >
                                                {{ $item }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Perkawinan</label>
                                    <div class="col">
                                        <input class="form-control form-control-lg " type="date" name="tanggal_perkawinan" value="{{ !empty($outsider['tanggal_perkawinan']) ? Carbon\Carbon::createFromFormat('Y-m-d', $outsider['tanggal_perkawinan'])->format('Y-m-d')  : '' }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row align-items-center">    
                                    <label class="col-xl-3 col-lg-3 col-form-label">Akta Perkawinan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadio(this)" {{!empty($outsider) ? $outsider['status_akta_perkawinan']=="1" ? 'checked' : '' : ''}} type="radio" name="status_akta_perkawinan" value="1" />
                                                <span></span>
                                                Ada
                                            </label>
                                            <label class="radio radio-outline radio-success">
                                                <input onchange="handleChangeRadio(this)" {{!empty($outsider) ? ($outsider['status_akta_perkawinan']=="0") || empty($outsider['status_akta_perkawinan'])  ? 'checked' : '' : ''}}  type="radio" name="status_akta_perkawinan" value="0" />
                                                <span></span>
                                                Belum Ada
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No. Akta Perkawinan </label>
                                    <div class="col">
                                        <input class="form-control form-control-lg" {{!empty($outsider) ? ($outsider['status_akta_perkawinan']=="0") || empty($outsider['status_akta_perkawinan']) ? 'disabled' : '' : ''}} name="no_akta_perkawinan" value="{{ $outsider['no_akta_perkawinan'] ?? '' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
        
            </div>
        </div>


        <!--begin::Form Group-->
    </div>
    <!--end::Form-->
    <div class="card-footer">
        <div class="row justify-content-end">
            <div class="col text-right">
                <a href="/data-penduduk/penduduk" class="btn btn-secondary {{ !empty($outsider) ? $outsider['akun_mobile_app'] == 0 ? : '' : 'mr-2' }}">Batal</a>
                @if (!empty($outsider) && $outsider['akun_mobile_app'] == '0')
                <a href="/master-data/data-penduduk/create-mobile-account/{{ $outsider['id'] }}" class="btn btn-outline-success mx-3">Buat Akun Mobile</a>
                @endif
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

</form>
@endsection

@push('script')

    <script>
        
        function handleChangeRadio(el){
            if(el.value == 1)
                document.querySelector('input[name=no_akta_perkawinan]').removeAttribute('disabled')
            else 
                document.querySelector('input[name=no_akta_perkawinan]').setAttribute('disabled', 'disabled')
        }

        function handleChangeRadioKelahiran(el) {
            if(el.value == 1)
                document.querySelector('input[name=no_akta_kelahiran]').removeAttribute('disabled')
            else 
                document.querySelector('input[name=no_akta_kelahiran]').setAttribute('disabled', 'disabled')
        }

        function emptyMutasi(){
            document.querySelectorAll('.mutasi-radio').forEach( e => e.checked = false )
            // console.log(el)
        }

        function handleChangePenyandangDisabilitas(el){
            if(el.checked)
                document.querySelector('.penyandang-disabilitas-input').classList.remove('d-none')
            else
                document.querySelector('.penyandang-disabilitas-input').classList.add('d-none')
        }

    </script>
    
@endpush