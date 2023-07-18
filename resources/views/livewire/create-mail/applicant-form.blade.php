<div>  
    
    @if (!empty($applicantData) || !is_null($applicantData))

        <div class="card card-custom">
            <div class="card-body">
                <div data-scroll="true" data-height="200">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control " readonly value="{{  ucwords(strtolower($applicantData->nama)) }}" type="text"  />
                    </div>
        
                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control " readonly value="{{ $applicantData->no_nik }}" type="text"  />
                    </div>
        
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input class="form-control " readonly value="{{ ucwords(strtolower($applicantData->jenis_kelamin)) }}" type="text"  />
                    </div>
        
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control " readonly value="{{ $applicantData->tempat_lahir }}" type="text"  />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control " readonly value="{{ Carbon\Carbon::parse($applicantData->tanggal_lahir)->format('d-m-Y') }}" type="text"  />
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input class="form-control " readonly value="{{ $applicantData->kewarganegaraan }}" type="text"  />
                    </div>
        
                    <div class="form-group">
                        <label>Agama</label>
                        <input class="form-control " readonly value="{{ $applicantData->agama }}" type="text"  />
                    </div>
        
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control " readonly value="{{ $applicantData->pekerjaan }}" type="text"  />
                    </div>
        
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control " readonly value="{{ $applicantData->alamat }}" type="text"  />
                    </div>
                </div>
            </div>
        </div>

    @endif

</div>
