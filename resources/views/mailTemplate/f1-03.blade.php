<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif !important;
        }
    </style>
</head>
<body>
    <div style="font-family: Arial, Helvetica, sans-serif" >
        <div style="border: 2px solid black; width: 100%;" >
            <div class="header" style="text-align: center; position: relative; border-bottom: 1px solid #000; height: 27px;" >
                <span style="margin: 0 auto; font-weight: 600; font-size: 14px;" >FORMULIR PENDAFTARAN PERPINDAHAN PENDUDUK</span>
                <span style="font-weight: 600;position:absolute; border: 1px solid #343434; padding: 1px 24px; font-size: 13px; right: 80px; top: 3px;" >F-1.03</span>
            </div>
            <div style="padding-left: 10px; font-size: 12px; font-weight: 400;" >
                <span>Perhatian :</span>
                <br>
                <span style="margin-left: 20px;" >Harap diisi dengan huruf cetak dan menggunakan tinta hitam</span>
                <table>
                    <tr>
                        <td>
                            <span style="border: 1px solid #000; width: 160px; display: inline-block; padding-left: 5px;" >1. No KK</span>
                        </td>
                        <td>:</td>
                        <td>
                            <span style="border: 1px solid #000; width: 500px; display: inline-block; padding-left: 5px;" >{{ $data->applicant_no_kk }}</span>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <span style="border: 1px solid #000; width: 160px; display: inline-block; padding-left: 5px;" >2. Nama</span>
                        </td>
                        <td>:</td>
                        <td>
                            <span style="border: 1px solid #000; width: 1055px; display: inline-block; padding-left: 5px;" >{{ $data->applicant_name }}</span>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <span style="border: 1px solid #000; width: 160px; display: inline-block; padding-left: 5px;" >3. NIK</span>
                        </td>
                        <td>:</td>
                        <td>
                            <span style="border: 1px solid #000; width: 500px; display: inline-block; padding-left: 5px;" >{{ $data->applicant_nik }}</span>
                        </td>
                    </tr>
                </table>
                
                <table style="margin: 0;" >
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block; padding-left: 5px;" >4. Jenis Permohonan</span>
                        </td>
                        <td style="vertical-align: top;" >
                            :
                        </td>
                        <td>
                            <div style="display: inline-block; padding-left: 15px;" >
                                <div>
                                    <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                    <span style="font-weight: 600;" >D. SURAT KETERANGAN KEPENDUDUKAN</span>
                                </div>
                                <div style="margin-left: 20px" >
                                    <table>
                                        <tr>
                                            <td style="vertical-align: top; width: 30px;" ><span style="width: 13px; height: 13px; border: 1px solid #000; display: inline-block;" ></span></td>
                                            <td style="vertical-align: top;" ><span >Surat Keterangan Pindah</span></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top; width: 30px;" ><span style="width: 13px; height: 13px; border: 1px solid #000; display: inline-block;" ></span></td>
                                            <td style="vertical-align: top;" ><span style="" >Surat Keterangan Pindah Luar Negeri (SKPLN)</span></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top; width: 30px;" ><span style="width: 13px; height: 13px; border: 1px solid #000; display: inline-block;" ></span></td>
                                            <td style="vertical-align: top;" ><span style="" >Surat Keterangan Tempat Tinggal (SKTT)<br> <span style="margin-left: 0px;" >Bagi Orang Asing Tinggal Terbatas</span> </span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >5. Alamat Asal</span>
                        </td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <span style="border: 1px solid #000; width: 500px; display: inline-block; padding-left: 5px;" >{{ $data->applicant_address }}</span>
                            <table style="" >
                                <tr>
                                    <td style="width: 130px;" >a. Desa/Kelurahan</td>
                                    <td style="width: 310px;" ><span style="border: 1px solid #000; width: 270px; display: inline-block; padding-left: 5px;" >Getasan</span></td>
                                    <td style="width: 80px;" >b. Kecamatan</td>
                                    <td><span style="border: 1px solid #000; width: 270px; display: inline-block; padding-left: 5px;" >Petang</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;" >c. Kabupaten/Kota</td>
                                    <td style="width: 310px;" ><span style="border: 1px solid #000; width: 270px; display: inline-block; padding-left: 5px;" >Badung</span></td>
                                    <td style="width: 80px;" >d. Provinsi</td>
                                    <td><span style="border: 1px solid #000; width: 270px; display: inline-block; padding-left: 5px;" >Bali</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; vertical-align: top;" > <span style="margin-left: 11px" >Kode Pos</span></td>
                                    <td style="width: 130px;" >
                                        <table cellspacing="0" >
                                            <tr>
                                                @for ($i = 0; $i < 5; $i++)
                                                <td  style=" border: 1px solid #000; width: 12px; height: 12px; border-collapse: collapse;" >

                                                </td>
                                                @endfor
                                            </tr>
                                        </table>
                                        {{-- <span style="width: 12px; height: 12px; border: 1px solid #000; border-right: none; display:inline-block;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; display:inline-block;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; border-right: none; display:inline-block;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; display:inline-block; border-right: none;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; display:inline-block; margin-left: -2px;" ></span> --}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >6. Klasifikasi Kepindahan</span>
                        </td>
                        <td style="vertical-align: top;" >:</td>
                        <td>
                            <div >
                                <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                <span style="" >Dalam satu desa/kelurahan atau yang disebut dengan nama lain</span>
                            </div>
                            <div >
                                <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                <span style="" >Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan</span>
                            </div>
                            <div >
                                <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                <span style="" >Antar kecamatan atau yang disebut dengan nama lain dalam satu kabupaten/kota</span>
                            </div>
                            <div >
                                <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                <span style="" >Antar kabupaten/kota dalam satu provinsi</span>
                            </div>
                            <div >
                                <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                <span style="" >Antar provinsi</span>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >7. Alamat Pindah</span>
                        </td>
                        <td style="vertical-align: top;">:</td>
                        <td>
                            <span style="border: 1px solid #000; width: 300px; display: inline-block;" >50281238012030</span>
                            <table>
                                <tr>
                                    <td style="width: 100px;" >a. Desa/Kelurahan</td>
                                    <td style="width: 130px;" ><span style="border: 1px solid #000; width: 100px; display: inline-block;" >50281238012030</span></td>
                                    <td style="width: 80px;" >b. Kecamatan</td>
                                    <td><span style="border: 1px solid #000; width: 100px; display: inline-block;" >50281238012030</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;" >c. Kabupaten/Kota</td>
                                    <td style="width: 130px;" ><span style="border: 1px solid #000; width: 100px; display: inline-block;" >50281238012030</span></td>
                                    <td style="width: 80px;" >d. Provinsi</td>
                                    <td><span style="border: 1px solid #000; width: 100px; display: inline-block;" >50281238012030</span></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; vertical-align: top;" > <span style="margin-left: 11px" >Kode Pos</span></td>
                                    <td style="width: 130px;" >
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; border-right: none; display:inline-block;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; display:inline-block; margin-left: -3px;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; border-right: none; display:inline-block; margin-left: -3px;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; display:inline-block; border-right: none; margin-left: -3px;" ></span>
                                        <span style="width: 12px; height: 12px; border: 1px solid #000; display:inline-block; margin-left: -2px;" ></span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >8. Alasan Pindah</span>
                        </td>
                        <td style="vertical-align: top;" >
                            :
                        </td>
                        <td style="width: 100%;" >
                            <table style="width: 100%;" >
                                <tr>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Pekerjaan</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Keamanan</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Perumahan</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Lainnya (sebutkan)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Pendidikan</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Kesehatan</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Keluarga</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >MENIKAH</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >9. Jenis Kepindahan</span>
                        </td>
                        <td style="vertical-align: top;" >
                            :
                        </td>
                        <td style="width: 100%;" >
                            <table style="width: 100%;" >
                                <tr>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Kepala Keluarga</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Kepala Keluarga dan Sebagian Anggota Keluarga</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Kepala Keluarga dan Seluruh Anggota Keluarga</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Anggota Keluarga</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >10. Anggota Keluarga <br> <span style="padding-left: 15px;" >Tidak Pindah</span></span>
                        </td>
                        <td style="vertical-align: top;" >
                            :
                        </td>
                        <td style="width: 100%;" >
                            <table style="width: 60%;" >
                                <tr>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Numpang KK</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Membuat KK Baru</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >11. Anggota Keluarga <br> <span style="padding-left: 15px;" >Yang Pindah</span></span>
                        </td>
                        <td style="vertical-align: top;" >
                            :
                        </td>
                        <td style="width: 100%;" >
                            <table style="width: 60%;" >
                                <tr>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Numpang KK</span>
                                    </td>
                                    <td>
                                        <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                        <span style="" >Membuat KK Baru</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <span style="border: 1px solid #000; width: 300px; display: inline-block; margin-left: 2px;" >12. Daftar Anggota Keluarga yang Pindah</span>
                <div style="padding-left: 10px; padding-right: 5px;" >
                    <table style="width: 100%;  margin-top: 2px;" >
                        <tr>
                            <td colspan="2" style="background-color: rgb(178, 178, 178); padding: 0 5px; border: 1px solid #000; text-align: center; font-weight: 700;" >NO.</td>
                            <td style="width: 17px;" ></td>
                            <td colspan="16" style="background-color: rgb(178, 178, 178); padding: 0 5px; border: 1px solid #000; text-align: center; font-weight: 700;" >NIK</td>
                            <td style="width: 17px;" ></td>
                            <td style="background-color: rgb(178, 178, 178); padding: 0 5px; border: 1px solid #000; text-align: center; font-weight: 700;" >NAMA LENGKAP</td>
                            <td style="width: 17px;" ></td>
                            <td colspan="2" style="background-color: rgb(178, 178, 178); padding: 0 5px; border: 1px solid #000; text-align: center; font-weight: 700;" >SHDK</td>
                        </tr>
                        <tr>
                            <td height="5" ></td>
                        </tr>
                        <tr>
                            <td width="15" style="text-align: center; border: 1px solid #000;" >0</td>
                            <td width="15" style="text-align: center; border: 1px solid #000;" >0</td>
                            <td></td>
                            @for ($i = 0; $i < 16; $i++)
                            <td width="15" style="text-align: center; border: 1px solid #000;" >0</td>
                            @endfor
                            <td></td>
                            <td style="text-align: left; border: 1px solid #000;" >NIPUTUSRIDWIGAYANTI</td>
                            <td></td>
                            <td width="15" style="text-align: left; border: 1px solid #000;" ></td>
                            <td width="15" style="text-align: left; border: 1px solid #000;" ></td>
                        </tr>
                        <tr>
                            <td height="5" ></td>
                        </tr>
                        @for ($i = 0; $i < 9; $i++)
                        <tr>
                            <td height="15" width="15" style="text-align: center; border: 1px solid #000;" ></td>
                            <td height="15" width="15" style="text-align: center; border: 1px solid #000;" ></td>
                            <td height="15"></td>
                            @for ($n = 0; $n < 16; $n++)
                            <td height="15" width="15" style="text-align: center; border: 1px solid #000;" ></td>
                            @endfor
                            <td height="15"></td>
                            <td height="15" style="text-align: left; border: 1px solid #000;" ></td>
                            <td height="15"></td>
                            <td height="15" width="15" style="text-align: left; border: 1px solid #000;" ></td>
                            <td height="15" width="15" style="text-align: left; border: 1px solid #000;" ></td>
                        </tr>
                        <tr>
                            <td height="5" ></td>
                        </tr>
                        @endfor
                    </table>
                </div>
            </div>
        </div>
    
        <div style="border: 2px solid black; width: 100%; margin-top: 10px;  font-size: 9px; padding-left: 2px;" >
            <span style="font-weight: 600;" >Diisi oleh Penduduk (Orang Asing) pemegang ITAS yang Mengajukan SKTT dan OA Pemegang ITAP yang Mengajukan Surat Keterangan Kependudukan Lainnya</span>
            <div style="margin-bottom: 2px;" >
                <span style="border: 1px solid #000; width: 160px; display: inline-block;" >13. Jenis Kepindahan</span>
                :
                <span style="border: 1px solid #000; width: 300px; display: inline-block; color: #fff; " > 0</span>
            </div>
            <table>
                <tr>
                    <td style="vertical-align: top;" >
                        <span style="border: 1px solid #000; width: 160px; display: inline-block;" >14. Tipe Sponsor</span>
                    </td>
                    <td style="vertical-align: top;" >
                        :
                    </td>
                    <td style="width: 100%;" >
                        <table style="width: 100%;" >
                            <tr>
                                <td>
                                    <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                    <span style="" >Organisasi Internasional</span>
                                </td>
                                <td>
                                    <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                    <span style="" >Pemerintah</span>
                                </td>
                                <td>
                                    <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                    <span style="" >Perusahaan</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                    <span style="" >Perorangan</span>
                                </td>
                                <td>
                                    <span style="width: 8px; height: 8px; border: 1px solid #000; display: inline-block;" ></span>
                                    <span style="" >Tanpa Sponsor</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="vertical-align: top;" >
                        <span style="border: 1px solid #000; width: 160px; display: inline-block;" >15. Alamat Sponsor</span>
                    </td>
                    <td style="vertical-align: top;" >
                        :
                    </td>
                    <td style="width: 100%;" >
                        <table style="width: 100%;" >
                            <tr>
                                <td>
                                    <span style="border: 1px solid #000; width: 300px; display: inline-block; color: #fff; " > 0</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span style="border: 1px solid #000; width: 300px; display: inline-block; color: #fff; " > 0</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="vertical-align: top;" >
                        <span style="border: 1px solid #000; width: 160px; display: inline-block;" >16. Nomor dan Tanggal <br> <span style="margin-left: 15px;" >KITAS & KITAP</span></span>
                    </td>
                    <td style="vertical-align: top;" >
                        :
                    </td>
                    <td style="width: 100%;" >
                        <table style="width: 100%;" >
                            <tr>
                                <td width="200" >
                                    <table>
                                        <tr>
                                            @for ($i = 0; $i < 10; $i++)
                                            <td style="border: 1px solid #000; width: 15px; height: 15px;" ></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            <td colspan="10" style="text-align: center;" >Nomor</td>
                                        </tr>
                                    </table>
                                </td>
                                <td >
                                    <table>
                                        <tr>
                                            @for ($i = 0; $i < 10; $i++)
                                            <td style="border: 1px solid #000; width: 15px; height: 15px;" ></td>
                                            @endfor
                                        </tr>
                                        <tr>
                                            <td colspan="10" style="text-align: center;" >Tanggal Masa Berlaku</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <span style="font-weight: 600;" >Diisi oleh Penduduk yang Mengajukan Surat Keterangan Pindah Luar Negeri</span>
            <div  >
                <table>
                    <tr>
                        <td>
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >17. Negara Tujuan</span>
                        </td>
                        <td>:</td>
                        <td style="border: 1px solid #000; width: 380px;" >
    
                        </td>
                        <td style="width: 60px;" ></td>
                        <td style="border: 1px solid #000; width: 20px;" >
    
                        </td>
                        <td style="border: 1px solid #000; width: 20px;" >
    
                        </td>
                        <td style="border: 1px solid #000; width: 20px;" >
    
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" >
                        </td>
                        </td>
                        <td colspan="4" >
                            Kode Negara
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="vertical-align: top;" >
                            <span style="border: 1px solid #000; width: 160px; display: inline-block;" >18. Alamat Tujuan</span>
                        </td>
                        <td style="vertical-align: top;" >
                            :
                        </td>
                        <td style="width: 100%;" >
                            <table style="width: 100%;" >
                                <tr>
                                    <td>
                                        <span style="border: 1px solid #000; width: 300px; display: inline-block; color: #fff; " > 0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="border: 1px solid #000; width: 300px; display: inline-block; color: #fff; " > 0</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div style="margin-bottom: 2px; margin-left: 1px;" >
                    <span style="border: 1px solid #000; width: 160px; display: inline-block;" >19. Penanggung Jawab</span>
                    :
                    <span style="border: 1px solid #000; width: 380px; display: inline-block; color: #fff; " > 0</span>
                </div>
                <div>
                    <table>
                        <tr>
                            <td>
                                <span style="border: 1px solid #000; width: 160px; display: inline-block;" >20. Rencana Pindah Tanggal</span>
                            </td>
                            <td>
                                :
                            </td>
                            <td style="width: 30px;" >
                                Tgl.
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="width: 50px;" ></td>
                            <td style="width: 30px;" >
                                Bln.
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="width: 50px;" ></td>
                            <td style="width: 30px;" >
                                Thn.
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                            <td style="border: 1px solid #000; width: 20px;" >
    
                            </td>
                        </tr>
                        <table style="width: 80%; margin: 0 auto; margin-top: 20px; margin-bottom: 30px;" >
                            <tr>
                                <td style="width: 70%;" >Mengetahui:</td>
                                <td>Getasan, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td>Perbekel Getasan,</td>
                                <td>Pemohon,</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="height: 60px;" >
    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <u><b>I WAYAN SUANDI, S.Pt</b></u>
                                </td>
                                <td>
                                    <u><b>I WAYAN SUANDI, S.Pt</b></u>
                                </td>
                            </tr>
                        </table>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>