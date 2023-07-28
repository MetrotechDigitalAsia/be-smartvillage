<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F-1.02</title>
    <style>
        .section__jenis-permohonan table {
            border: 1px solid black;  
        }

        .section__jenis-permohonan table tr td {
            border: 1px solid black;  
        }
    </style>
</head>
<body>

    <span style="position: absolute; top: 0; right: 20px; border: 2px solid black; padding: 1px 4px;" >F-1. 02</span>
    
    <div class="section__data-pemohon">
        <p style="font-size: 14px; margin-bottom: 8px;" >I. DATA PEMOHON</p>
        <table style="margin-left: 50px;" >
            <tr>
                <td style="width: 30px;" >1</td>
                <td style="width: 190px;" >Nama Lengkap</td>
                <td>: {{ $data->applicant_name }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>No. Induk Kependudukan</td>
                <td>: {{ $data->applicant_nik }}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nomor Kartu Keluarga</td>
                <td>: {{ $data->applicant_no_kk }}</td>
            </tr>
        </table>
    </div>
    <div class="section__jenis-permohonan">
        <p style="margin: 0; margin-top: 10px; font-size: 14px;" >II. JENIS PERMOHONAN</p>
        <table style="width: 100%; font-size: 14px;" cellspacing="0" >
            <tr>
                <td style="width: 50px; text-align: center;padding: 15px 0;" >I</td>
                <td style="width: 120px;" >KARTU<br>KELUARGA</td>
                <td style="width: 50px; text-align: center;" >II</td>
                <td style="width: 100px;" >KTP-el</td>
                <td style="width: 50px; text-align: center;" >III</td>
                <td style="width: 130px;" >KARTU IDENTITAS<br> ANAK</td>
                <td style="width: 50px; text-align: center;" >IV</td>
                <td>PERUBAHAN DATA</td>
            </tr>
            <tr>
                <td style="text-align: center;" >A</td>
                <td>BARU</td>
                <td style="text-align: center;" >A</td>
                <td>BARU</td>
                <td style="text-align: center;" >A</td>
                <td>BARU</td>
                <td style="text-align: center;" >A</td>
                <td>KK</td>
            </tr>
            <tr>
                <td style="text-align: center;" >1</td>
                <td>Membentuk Keluarga Baru</td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >2</td>
                <td>Penggantian Kepala Keluarga</td>
                <td style="text-align: center;" >B</td>
                <td>PINDAH DATANG</td>
                <td style="text-align: center;" >B</td>
                <td>HILANG/RUSAK</td>
                <td style="text-align: center;" >B</td>
                <td>KTP-el</td>
            </tr>
            <tr>
                <td style="text-align: center;" >3</td>
                <td>Pisah KK</td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" >1</td>
                <td>Hilang</td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >4</td>
                <td>Pindah Datang </td>
                <td style="text-align: center;" >C</td>
                <td>HILANG/RUSAK</td>
                <td style="text-align: center;" >2</td>
                <td>Rusak</td>
                <td style="text-align: center;" >C</td>
                <td>KIA</td>
            </tr>
            <tr>
                <td style="text-align: center;" >5</td>
                <td>WNI dari LN karena pindah</td>
                <td style="text-align: center;" >1</td>
                <td>Hilang</td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" rowspan="9" ></td>
                <td rowspan="9" >
                    melampirkan
                    <ol style="padding-left: 20px; " >
                        <li>Formulir Perubahan Data</li>
                        <li>Bukti Perubahan Data</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" >6</td>
                <td>Rentan Adminduk</td>
                <td style="text-align: center;" >2</td>
                <td>Rusak</td>
                <td style="text-align: center;" >C</td>
                <td>Perpanjangan ITAP</td>
            </tr>
            <tr>
                <td style="text-align: center;" >B</td>
                <td>PERUBAHAN DATA </td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >1</td>
                <td>Menumpang dalam KK</td>
                <td style="text-align: center;" >D</td>
                <td>PERPANJANGAN ITAP</td>
                <td style="text-align: center;" >D</td>
                <td>Lainnya</td>
            </tr>
            <tr>
                <td style="text-align: center;" >2</td>
                <td>Peristiwa Penting</td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >3</td>
                <td>Perubahan elemen data yang tercantum dalam KK</td>
                <td style="text-align: center;" >E</td>
                <td>PERUBAHAN STATUS KEWARGANEGARAAN</td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >C</td>
                <td>HILANG/RUSAK</td>
                <td style="text-align: center;" >F</td>
                <td>LUAR DOMISILI</td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >1</td>
                <td>Hilang</td>
                <td style="text-align: center;" ></td>
                <td></td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;" >2</td>
                <td>Rusak</td>
                <td style="text-align: center;" >G</td>
                <td>TRANSMIGRASI</td>
                <td style="text-align: center;" ></td>
                <td></td>
            </tr>
        </table>
    </div>

    <div class="section__persyaratan">
        <p style="margin: 15px 0; margin-bottom: 8px; font-size: 14px;">III. PERSYARATAN YANG DILAMPIRKAN</p>
        <table style="width: 100%; font-size: 14px;" >
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>KK Lama/KK Rusak</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Keterangan/Bukti Perubahan Peristiwa Kependudukan dan Peristiwa Penting</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Buku Nikah/Kutipan Akta Perkawinan</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>SPTJM Perkawinan/Perceraian Belum Tercatat</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Kutipan Akta Perceraian</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Akta Kematian</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Keterangan Pindah</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Pernyataan Penyebab Terjadinya Hilang atau Rusak</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Keterangan Pindah Luar Negeri</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Keterangan Pindah dari Perwakilan RI</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>KTP-el Rusak</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Pernyataan Bersedia Menerima Sebagai Anggota Keluarga</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%; padding: 7px 0;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Dokumen Perjalanan</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Kuasa Pengasuhan Anak dari Orang Tua/Wali</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td  style="width: 49%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Surat Keterangan Hilang dari Kepolisian</td>
                        </tr>
                    </table>
                </td>
                <td  style="width: 50%;" >
                    <table>
                        <tr>
                            <td style="width: 40px;" ><div style="width: 18px; height: 18px; border: 1.3px solid black; border-radius: 50%;" ></div></td>
                            <td>Kartu Izin Tinggal Tetap</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class="section__footer" style="padding-bottom: 100px;" >
        <table style="width: 85%; margin-left: 50px;" >
            <tr>
                <td style="width: 40%;" >Petugas,</td>
                <td style="height: 115px;" ></td>
                <td style="text-align: center; padding-bottom: 10px;" >Getasan, {{ Carbon\Carbon::now()->translatedFormat('d F Y') }} <br>Pemohon,</td>
            </tr>
            <tr>
                <td>{{ $data->petugas->name ?? '' }}</td>
                <td></td>
                <td style="text-align: center;">{{ $data->applicant_name }}</td>
            </tr>
        </table>
    </div>


</body>
</html>