@extends('admin.persuratan.surat.dashboard')

@section('table')


<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">
        <!--begin::Left-->
        <div class="d-flex align-items-center my-2">
            <a href="/persuratan/surat" class="btn btn-clean btn-icon btn-sm mr-6" >
                <i class="flaticon2-left-arrow-1"></i>
            </a>
            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Archive">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Spam">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Warning-1-circle.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                            <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                            <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Delete">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Mark as read">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Duplicate.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M15.9956071,6 L9,6 C7.34314575,6 6,7.34314575 6,9 L6,15.9956071 C4.70185442,15.9316381 4,15.1706419 4,13.8181818 L4,6.18181818 C4,4.76751186 4.76751186,4 6.18181818,4 L13.8181818,4 C15.1706419,4 15.9316381,4.70185442 15.9956071,6 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M10.1818182,8 L17.8181818,8 C19.2324881,8 20,8.76751186 20,10.1818182 L20,17.8181818 C20,19.2324881 19.2324881,20 17.8181818,20 L10.1818182,20 C8.76751186,20 8,19.2324881 8,17.8181818 L8,10.1818182 C8,8.76751186 8.76751186,8 10.1818182,8 Z" fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="Move">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Media-folder.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
                            <path d="M10.782158,17.5100514 L15.1856088,14.5000448 C15.4135806,14.3442132 15.4720618,14.0330791 15.3162302,13.8051073 C15.2814587,13.7542388 15.2375842,13.7102355 15.1868178,13.6753149 L10.783367,10.6463273 C10.5558531,10.489828 10.2445489,10.5473967 10.0880496,10.7749107 C10.0307022,10.8582806 10,10.9570884 10,11.0582777 L10,17.097272 C10,17.3734143 10.2238576,17.597272 10.5,17.597272 C10.6006894,17.597272 10.699033,17.566872 10.782158,17.5100514 Z" fill="#000000" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </span>
        </div>
        <!--end::Left-->
        <!--begin::Right-->
        <div class="d-flex align-items-center justify-content-end text-right my-2">
            <span class="btn btn-default btn-sm btn-icon mr-2">
                <i class="flaticon2-sort"></i>
            </span>
            <span onclick="printMail()" class="btn btn-default btn-sm btn-icon mr-2" data-dismiss="modal">
                <i class="flaticon2-fax"></i>
            </span>
            <div class="dropdown" data-toggle="tooltip" title="Settings">
                <span class="btn btn-default btn-icon btn-sm" data-toggle="dropdown">
                    <i class="ki ki-bold-more-hor icon-1x"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-md">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-drop"></i>
                                </span>
                                <span class="navi-text">New Group</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-list-3"></i>
                                </span>
                                <span class="navi-text">Contacts</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-rocket-1"></i>
                                </span>
                                <span class="navi-text">Groups</span>
                                <span class="navi-link-badge">
                                    <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                </span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-bell-2"></i>
                                </span>
                                <span class="navi-text">Calls</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-gear"></i>
                                </span>
                                <span class="navi-text">Settings</span>
                            </a>
                        </li>
                        <li class="navi-separator my-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-magnifier-tool"></i>
                                </span>
                                <span class="navi-text">Help</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-bell-2"></i>
                                </span>
                                <span class="navi-text">Privacy</span>
                                <span class="navi-link-badge">
                                    <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
            </div>
        </div>
        <!--end::Right-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Header-->
        {{-- <div class="d-flex align-items-center justify-content-between flex-wrap card-spacer-x py-5">
            <!--begin::Title-->
            <div class="d-flex align-items-center mr-2 py-2">
                <div class="font-weight-bold font-size-h3 mr-3">Trip Reminder. Thank you for flying with us!</div>
                <span class="label label-light-primary font-weight-bold label-inline mr-2">inbox</span>
                <span class="label label-light-danger font-weight-bold label-inline">important</span>
            </div>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="d-flex py-2">
                <span class="btn btn-default btn-sm btn-icon mr-2">
                    <i class="flaticon2-sort"></i>
                </span>
                <span class="btn btn-default btn-sm btn-icon" data-dismiss="modal">
                    <i class="flaticon2-fax"></i>
                </span>
            </div>
            <!--end::Toolbar-->
        </div> --}}
        <!--end::Header-->
        <!--begin::Messages-->
        <div class="mb-3 pt-8">
            <div class="cursor-pointer shadow-xs toggle-on container pt-10 message-container">
                <div class="mail-header ">
                    <img src="{{ asset('assets/be/media/desa.png') }}" alt="">
                    <h3 class="text-center m-0 goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</h3>
                    <h2 class="m-0 my-1 village" >DESA GETASAN</h2>
                    <p class="m-0 mb-3 text-center" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : menyssusul</p>
                </div>
                <div class="mail-body pt-8 px-10 text-center d-flex flex-column align-items-center pb-10">
                    <h3 class="text-center" >SURAT KETERANGAN KELAHIRAN</h3>
                    <h6 class="text-center mail-num mb-10" >Nomor : 045.2/33/Br.Dis/IV/2021</h6>
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
                            <p style="text-indent: 0; margin-bottom: 50px;" >Perbekel Getasan,</p>
                            <u >I Wayan Suandi, S.Pt</u>
                        </div>
                        <div class="col text-left">
                            <p style="text-indent: 0; margin-top: 40px; margin-bottom: 0;" >Getasan, 7 april 2023,</p>
                            <p  style="text-indent: 0; margin-bottom: 50px;" >Kelian Banjar Dinas Ubud</p>
                            <u >I Putu Antara, S.Pt</u>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Messages-->
        
    </div>
    <!--end::Body-->
</div>
    
@endsection

@push('script')

    <script>

        function printMail(){
            const mailContent = document.querySelector('.message-container')
            winPrint = window.open('/', '')
            winPrint.document.write(mailContent.innerHTML)
            winPrint.document.close()
            winPrint.focus()
        }

    </script>

@endpush