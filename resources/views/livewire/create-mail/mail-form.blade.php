<div>
    @switch($mail->title)
        @case('Surat Keterangan Tempat Usaha')
            @livewire('create-mail.surat-keterangan-usaha-form')
            @break
        @case('Surat Keterangan Kelahiran')
            @livewire('create-mail.surat-keterangan-kelahiran-form')
            @break
        @case('Surat Keterangan Meninggal')
            @livewire('create-mail.surat-akta-kematian-form')
            @break
        @case('Surat Keterangan Perkawinan')
            @livewire('create-mail.surat-keterangan-perkawinan-form')
            @break
        @default
    @endswitch

</div>
