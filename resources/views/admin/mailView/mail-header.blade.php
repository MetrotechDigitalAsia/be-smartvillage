<div class="mail-header">
    <img src="{{ asset('assets/be/media/desa.png') }}" alt="">
    <h3 class="text-center m-0 goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</h3>
    <h2 class="m-0 my-1 village" >DESA GETASAN</h2>
    @if (request()->query('type') == 'surat-keterangan-meninggal' || request()->query('type') == 'surat-keterangan-perkawinan')
    <p class="m-0 mb-3 text-center" >Jln. Tukad Pened Nomor : 14 Telp. 081 353 622 066 Kode Pos 80353</p>
    @else
    <p class="m-0 mb-3 text-center" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : info.desagetasan.id</p>
    @endif
</div>