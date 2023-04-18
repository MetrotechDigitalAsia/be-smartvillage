<div class="container bg-white message-content">
    <div class="mail-header">
        <img src="{{ asset('assets/be/media/desa.png') }}" alt="">
        <h3 class="text-center m-0 goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</h3>
        <h2 class="m-0 my-1 village" >DESA GETASAN</h2>
        <p class="m-0 mb-3 text-center" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : menyssusul</p>
    </div>
    <div class="mail-body pt-8 px-10 text-center d-flex flex-column align-items-center pb-10">
        <h3 class="text-center" >SURAT KETERANGAN KELAHIRAN</h3>
        <h6 class="text-center mb-10" >{{ $data->mail_number }}</h6>
        <p class="text-justify" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
        <table class="align-self-start ml-10" >
            <tr>
                <td class="w-20px" >1.</td>
                <td class="w-140px" >Nama</td>
                <td>: Rahmat Riyadi Syam</td>
            </tr>
            <tr>
                <td></td>
                <td>jenis kelamin</td>
                <td>: Laki Laki</td>
            </tr>
            <tr>
                <td></td>
                <td>Tempat/Tgl.lahir</td>
                <td>: Denpasar</td>
            </tr>
            <tr>
                <td></td>
                <td>NIK</td>
                <td>: -</td>
            </tr>
            <tr>
                <td></td>
                <td>Nomor KK</td>
                <td>: 60200120116</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>: Jalan Amirullah No 13</td>
            </tr>
            <tr>
                <td class="py-2"> </td>
            </tr>
            <tr>
                <td class="w-20px" >2.</td>
                <td class="w-140px" >Nama Ayah</td>
                <td>: Rahmat Riyadi Syam</td>
            </tr>
            <tr>
                <td></td>
                <td>Umur</td>
                <td>: 20 tahun</td>
            </tr>
            <tr>
                <td></td>
                <td>Pekerjaan</td>
                <td>: Software Engineer</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>: Jaln Amirullah No 13</td>
            </tr>
            <tr>
                <td class="py-2"> </td>
            </tr>
            <tr>
                <td class="w-20px" >3.</td>
                <td class="w-140px" >Nama ibu</td>
                <td>: Siapapun yang jadi istriku nnti</td>
            </tr>
            <tr>
                <td></td>
                <td>Umur</td>
                <td>: 20 tahun</td>
            </tr>
            <tr>
                <td></td>
                <td>Pekerjaan</td>
                <td>: Ibu Rumah Tangga</td>
            </tr>
            <tr>
                <td></td>
                <td>Alamat</td>
                <td>: Jaln Amirullah No 13</td>
            </tr>
        </table>
        <p class="text-justify mt-10" >Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Kutipan Akta Kelahiran.</p>
        <p  >Saksi Saksi</p>
        <div class="row" style="width: 100%;" >
            <div class="col">
                <table >
                    <tr>
                        <td class="w-20px" >1.</td>
                        <td class="w-115px" >Nama Saksi</td>
                        <td>: Rahmat</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: 27 tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: Karyawan Swasta</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: Ubud Getasan</td>
                    </tr>
                </table>
                <div class="d-flex justify-content-center">
                    <u class="saksi" style="margin-top: 50px;" >I Wayan Sunarta</u>
                </div>
            </div>
            <div class="col">
                <table >
                    <tr>
                        <td class="w-20px" >2.</td>
                        <td class="w-115px" >Nama Saksi</td>
                        <td>: Rahmat</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: 27 tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: Karyawan Swasta</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: Ubud Getasan</td>
                    </tr>
                </table>
                <div class="d-flex justify-content-center">
                    <u class="saksi" style="margin-top: 50px;" >I Wayan Sunarta</u>
                </div>
            </div>
        </div>
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