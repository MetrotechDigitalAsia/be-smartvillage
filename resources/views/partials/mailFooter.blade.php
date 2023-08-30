<table style="width: 100%; margin-top: 15px; margin-left: 20px;"  >
    <tr>
        <td span="2" >Mengetahui :</td>
    </tr>
    <tr>
        <td>Reg No. : {{ $data->registration_number ?? '........................' }}</td>
    </tr>
    <tr>
        @if (!empty($data->registration_date))
            
        <td >Tanggal : {{ \Carbon\Carbon::parse($data->registration_date)->translatedFormat('d F Y') }}</td>
        @else
        <td >Tanggal : ........................</td>
        @endif
        <td>Getasan, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
    </tr>
    <tr>
        <td>Perbekel Getasan,</td>
        <td>Kelian Banjar Dinas Ubud</td>
    </tr>
    <tr>
        <td style="width: 100%;" >
            <div style="position: relative; height: 80px; width: 100%;" >
                @if ($data->status == 'Done' && !empty($perbekel))
                {{-- <img style="position: absolute; width:320px; height: 120px; left: -25%; bottom: -60%; object-fit: contain;" src="{{ public_path(). '/storage/'. $perbekel->image }}" alt=""> --}}
                @endif
            </div>
        </td>
        <td style="width: 100%;" >
            <div style="position: relative; height: 80px; width: 100%;" >
                @if ($data->status == 'Done' && !is_null($kelian))
                {{-- <img style="position: absolute; height: 120px; width:50%; bottom: -30%; object-fit: contain;" src="{{ public_path(). '/storage/'. $kelian->image }}" alt=""> --}}
                @endif
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p style="text-indent: 0; text-align: left;" >
                <u>{{ !empty($perbekel) ? $perbekel->name : 'belum ada data perbekel' }}</u>
            </p>
        </td>
        <td>
            <p style="text-indent: 0; text-align: left;" >
                <u>{{ !empty($kelian) ? $kelian->name : 'belum ada data kelian' }}</u>
            </p>
        </td>
    </tr>
</table>