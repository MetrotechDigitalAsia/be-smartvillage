<div class="row mt-10" style="width: 100%; margin-bottom: 100px;" >
    <div class="col text-left">
        <p class="m-0" style="text-indent: 0;" >Mengetahui :</p>
        <table>
            <tr>
                <td>Reg No.</td>
                <td>:...................</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:...................</td>
            </tr>
        </table>
        <p style="text-indent: 0; margin-bottom: 60px;" >Perbekel Getasan,</p>
        @if ($data->status == 'Done' && !empty($perbekel))
        <img style="position: absolute; height: 120px; width:320px; left: -25%; bottom: -20%; object-fit: contain;" src="{{ asset('storage/'. $perbekel->image) }}" alt="">
        @endif
        <u>{{ !empty($perbekel) ? $perbekel->name : 'belum ada data perbekel' }}</u>
    </div>
    <div class="col text-left" style="position: relative;">
        <p style="text-indent: 0; margin-top: 40px; margin-bottom: 0;" >Getasan, {{ Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
        <p  style="text-indent: 0; margin-bottom: 60px;" >Kelian Banjar Dinas Ubud</p>
        @if ($data->status == 'Done' && !is_null($kelian))
        <img style="position: absolute; height: 120px; width:50%; bottom: 0; object-fit: contain;" src="{{ asset('storage/'. $kelian->image) }}" alt="">
        @endif
        <u>{{ !empty($kelian) ? $kelian->name : 'belum ada data kelian' }}</u>
    </div>
</div>