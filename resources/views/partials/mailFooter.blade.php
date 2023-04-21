<table style="width: 100%; margin-top: 15px;"  >
    <tr>
        <td span="2" >Mengetahui :</td>
    </tr>
    <tr>
        <td>Reg No. : ...............</td>
    </tr>
    <tr>
        <td >Tanggal : ...............</td>
        <td>Getasan, {{ Carbon\Carbon::now()->format('d F Y') }},</td>
    </tr>
    <tr>
        <td>Perbekel Getasan,</td>
        <td>Kelian Banjar Dinas Ubud</td>
    </tr>
    <tr>
        <td style="width: 100%;" >
            <div style="position: relative; height: 80px; width: 100%;" >
                @if ($data->status == 'Done')
                <img style="position: absolute; bottom: -60%; left: -15%;" width="290" src="{{ public_path().'/assets/be/media/perbekel.png' }}" alt="">
                @endif
            </div>
        </td>
        <td>
            <div style="position: relative; height: 80px; width: 100%;" >
                <img style="position: absolute; bottom: -60%; left: -25%;" width="290" src="{{ public_path().'/storage/'. $data->image }}" alt="">
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p style="text-indent: 0; text-align: left;" ><u >I Wayan Suandi, S.Pt</u></p>
        </td>
        <td>
            <p style="text-indent: 0; text-align: left;" ><u >I Putu Antara</u></p>
        </td>
    </tr>
</table>