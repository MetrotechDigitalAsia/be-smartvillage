<div class="cursor-pointer shadow-xs toggle-on pt-10 message-container mx-auto ribbon ribbon-top">
    <div class="ribbon-target bg-primary" style="top: -2px; right: 20px; font-family: Poppins;">
        @php
            switch ($data->status) {
                case 'Done':
                    echo 'Selesai';
                    break;
                case 'Process':
                    echo 'Diproses';
                    break;
                case 'Pending':
                    echo 'Dipending';
                    break;
                case 'Rejected':
                    echo 'Ditolak';
                    break;
            }
        @endphp
    </div>
    <div class="container bg-white message-content ribbon ribbon-top">
        @php
            $field = json_decode($data->field)    
        @endphp
        <div class="mail-header">
            <img src="{{ asset('assets/be/media/desa.png') }}" alt="">
            <h3 class="text-center m-0 goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</h3>
            <h2 class="m-0 my-1 village" >DESA GETASAN</h2>
            <p class="m-0 mb-3 text-center" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : Menyusul</p>
        </div>
        <div class="mail-body pt-8 px-10 text-center d-flex flex-column align-items-center pb-10">
            
            @include('admin.mailView.'.$data->slug)

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
                    @if ($data->status == 'Done')
                    <img style="position: absolute; left: -20%; bottom: -20%; width: 100%;" src="{{ asset('assets/be/media/perbekel.png') }}" alt="">
                    @endif
                    <u >I Wayan Suandi, S.Pt</u>
                </div>
                <div class="col text-left" style="position: relative;">
                    <p style="text-indent: 0; margin-top: 40px; margin-bottom: 0;" >Getasan, 7 april 2023,</p>
                    <p  style="text-indent: 0; margin-bottom: 60px;" >Kelian Banjar Dinas Ubud</p>
                    <img style="position: absolute; left: -20%; bottom: -20%; width: 100%;" src="{{ asset('storage/'. $data->image) }}" alt="">
                    <u>I Putu Antara, S.Pt</u>
                </div>
            </div>
        </div>
    </div>
</div>