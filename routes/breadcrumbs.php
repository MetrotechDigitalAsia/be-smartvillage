<?php

use App\Models\Admin;
use App\Models\Agenda;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\BLT;
use App\Models\Complaint;
use App\Models\ComplaintCategory;
use App\Models\DestinationPoint;
use App\Models\ImportantNumber;
use App\Models\Investation;
use App\Models\ItemBusinessCategory;
use App\Models\KerjaSama;
use App\Models\Position;
use App\Models\Signature;
use App\Models\Staff;
use App\Models\UserBusinessItem;
use App\Models\UserData;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail): void {
    // $trail->push('Point Destinasi', route('destinationPoint'));
});
Breadcrumbs::for('destinationPoint', function (BreadcrumbTrail $trail): void {
    $trail->push('Point Destinasi', route('destinationPoint'));
});

Breadcrumbs::for('destinationPoint.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('destinationPoint');
    $trail->push('Tambah Data', route('destinationPoint.create'));
});

Breadcrumbs::for('destinationPoint.show', function (BreadcrumbTrail $trail, DestinationPoint $destinationPoint): void {
    $trail->parent('destinationPoint');
    $trail->push($destinationPoint->name, route('destinationPoint.show', $destinationPoint));
});

Breadcrumbs::for('importantNumber', function (BreadcrumbTrail $trail): void {
    $trail->push('Nomor Penting', route('importantNumber'));
});

Breadcrumbs::for('importantNumber.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('importantNumber');
    $trail->push('Tambah Data', route('importantNumber.create'));
});

Breadcrumbs::for('importantNumber.show', function (BreadcrumbTrail $trail, ImportantNumber $importantNumber): void {
    $trail->parent('destinationPoint');
    $trail->push($importantNumber->name, route('importantNumber.show', $importantNumber));
});

Breadcrumbs::for('agendas', function (BreadcrumbTrail $trail): void {
    $trail->push('Agenda', route('agendas'));
});

Breadcrumbs::for('agendas.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('agendas');
    $trail->push('Tambah Data', route('agendas.create'));
});

Breadcrumbs::for('agendas.show', function (BreadcrumbTrail $trail, Agenda $agenda): void {
    $trail->parent('agendas');
    $trail->push($agenda->title, route('agendas.show', $agenda));
});

Breadcrumbs::for('article', function (BreadcrumbTrail $trail): void {
    $trail->push('Artikel', route('article'));
});

Breadcrumbs::for('article.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('article');
    $trail->push('Tambah Data', route('article.create'));
});

Breadcrumbs::for('article.show', function (BreadcrumbTrail $trail, Article $article): void {
    $trail->parent('article');
    $trail->push($article->title, route('article.show', $article));
});

Breadcrumbs::for('umkm', function (BreadcrumbTrail $trail): void {
    $trail->push('UMKM', route('umkm'));
});

Breadcrumbs::for('umkmPending', function (BreadcrumbTrail $trail): void {
    $trail->push('UMKM (pending)', route('umkmPending'));
});

Breadcrumbs::for('umkmRejected', function (BreadcrumbTrail $trail): void {
    $trail->push('UMKM (ditolak)', route('umkmRejected'));
});

Breadcrumbs::for('umkm.show', function (BreadcrumbTrail $trail, UserBusinessItem $userBusinessItem): void {
    $trail->parent('UMKM');
    $trail->push($userBusinessItem->item_name, route('umkm.show',$userBusinessItem->slug));
});

Breadcrumbs::for('investation', function (BreadcrumbTrail $trail): void {
    $trail->push('Investasi', route('investation'));
});

Breadcrumbs::for('investation.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('investation');
    $trail->push('Tambah Data', route('investation.create'));
});

Breadcrumbs::for('investation.show', function (BreadcrumbTrail $trail, Investation $investation): void {
    $trail->parent('investation');
    $trail->push($investation->institute_name, route('investation.show', $investation));
});

Breadcrumbs::for('complaint', function (BreadcrumbTrail $trail): void {
    $trail->push('Pengaduan', route('complaint'));
});

Breadcrumbs::for('complaint.show', function (BreadcrumbTrail $trail, Complaint $complaint): void {
    $trail->parent('complaint');
    $trail->push($complaint->name, route('complaint.show', $complaint));
});

Breadcrumbs::for('kerjaSama', function (BreadcrumbTrail $trail): void {
    $trail->push('Kerja Sama', route('kerjaSama'));
});

Breadcrumbs::for('kerjaSama.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('kerjaSama');
    $trail->push('Tambah Data', route('kerjaSama.create'));
});

Breadcrumbs::for('kerjaSama.show', function (BreadcrumbTrail $trail, KerjaSama $kerjaSama): void {
    $trail->parent('kerjaSama');
    $trail->push($kerjaSama->id, route('kerjaSama.show', $kerjaSama));
});

Breadcrumbs::for('blt', function (BreadcrumbTrail $trail): void {
    $trail->push('Bantuan', route('blt'));
});

Breadcrumbs::for('blt.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('blt');
    $trail->push('Tambah Data', route('blt.create'));
});

Breadcrumbs::for('blt.show', function (BreadcrumbTrail $trail, BLT $bLT): void {
    $trail->parent('blt');
    $trail->push($bLT->type, route('kerjaSama.show', $bLT));
});

Breadcrumbs::for('articleCategory', function (BreadcrumbTrail $trail): void {
    $trail->push('Kategori Artikel', route('articleCategory'));
});

Breadcrumbs::for('articleCategory.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('articleCategory');
    $trail->push('Tambah Data', route('articleCategory.create'));
});

Breadcrumbs::for('articleCategory.show', function (BreadcrumbTrail $trail, ArticleCategory $articleCategory): void {
    $trail->parent('articleCategory');
    $trail->push($articleCategory->article_category, route('articleCategory.show', $articleCategory));
});

Breadcrumbs::for('complaintCategory', function (BreadcrumbTrail $trail): void {
    $trail->push('Kategori Pengaduan', route('complaintCategory'));
});

Breadcrumbs::for('complaintCategory.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('complaintCategory');
    $trail->push('Tambah Data', route('complaintCategory.create'));
});

Breadcrumbs::for('complaintCategory.show', function (BreadcrumbTrail $trail, ComplaintCategory $complaintCategory): void {
    $trail->parent('complaintCategory');
    $trail->push($complaintCategory->complaint_category, route('complaintCategory.show', $complaintCategory));
});

Breadcrumbs::for('admin', function (BreadcrumbTrail $trail): void {
    $trail->push('Admin', route('admin'));
});

Breadcrumbs::for('admin.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin');
    $trail->push('Tambah Data', route('admin.create'));
});

Breadcrumbs::for('admin.show', function (BreadcrumbTrail $trail, Admin $admin): void {
    $trail->parent('admin');
    $trail->push($admin->fullname, route('admin.show', $admin));
});

Breadcrumbs::for('position', function (BreadcrumbTrail $trail): void {
    $trail->push('Jabatan', route('position'));
});

Breadcrumbs::for('position.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('position');
    $trail->push('Tambah Data', route('position.create'));
});

Breadcrumbs::for('position.show', function (BreadcrumbTrail $trail, Position $position): void {
    $trail->parent('position');
    $trail->push($position->position_name, route('position.show', $position));
});

Breadcrumbs::for('staff', function (BreadcrumbTrail $trail): void {
    $trail->push('Staff', route('staff'));
});

Breadcrumbs::for('staff.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('staff');
    $trail->push('Tambah Data', route('staff.create'));
});

Breadcrumbs::for('staff.show', function (BreadcrumbTrail $trail, Staff $staff): void {
    $trail->parent('staff');
    $trail->push($staff->fullname, route('staff.show', $staff));
});

Breadcrumbs::for('itemBusinessCategory', function (BreadcrumbTrail $trail): void {
    $trail->push('Kategori UMKM', route('itemBusinessCategory'));
});

Breadcrumbs::for('itemBusinessCategory.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('itemBusinessCategory');
    $trail->push('Tambah Data', route('itemBusinessCategory.create'));
});

Breadcrumbs::for('itemBusinessCategory.show', function (BreadcrumbTrail $trail, ItemBusinessCategory $itemBusinessCategory): void {
    $trail->parent('itemBusinessCategory');
    $trail->push($itemBusinessCategory->item_category, route('itemBusinessCategory.show', $itemBusinessCategory));
});

Breadcrumbs::for('signature', function (BreadcrumbTrail $trail): void {
    $trail->push('Kategori UMKM', route('signature'));
});

Breadcrumbs::for('signature.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('signature');
    $trail->push('Tambah Data', route('signature.create'));
});

Breadcrumbs::for('signature.show', function (BreadcrumbTrail $trail, Signature $signature): void {
    $trail->parent('signature');
    $trail->push($signature->name, route('signature.show', $signature));
});

Breadcrumbs::for('userData', function (BreadcrumbTrail $trail): void {
    $trail->push('Data Penduduk', route('userData'));
});

Breadcrumbs::for('userData.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('userData');
    $trail->push('Tambah Data', route('userData.create'));
});

Breadcrumbs::for('userData.show', function (BreadcrumbTrail $trail, $id): void {
    $userData = UserData::where('id', $id)->first();
    $trail->parent('userData');
    $trail->push($userData->nama, route('userData.show', $userData->id));
});

Breadcrumbs::for('mailMasterData', function (BreadcrumbTrail $trail): void {
    $trail->push('Master Data', route('mailMasterData'));
});

Breadcrumbs::for('inbox', function (BreadcrumbTrail $trail): void {
    $trail->push('Inbox', route('inbox'));
});

Breadcrumbs::for('userMailByStatus', function (BreadcrumbTrail $trail, $status): void {
    switch ($status) {
        case 'finish':
            $mail = "selesai";
            break;
        case 'process':
            $mail = "diproses";
            break;
        case 'rejected':
            $mail = "ditolak";
            break;
        
        default:
            # code...
            break;
    }
    $trail->push("Surat - $mail", route('userMailByStatus', $status));
});

Breadcrumbs::for('userMailAll', function (BreadcrumbTrail $trail): void {
    $trail->push('Semua Surat', route('userMailAll'));
});

Breadcrumbs::for('userMail.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('inbox');
    $trail->push('Buat Surat', route('userMail.create'));
});

Breadcrumbs::for('userMail.show', function (BreadcrumbTrail $trail, $id): void {
    $trail->parent('inbox');
    $trail->push('Detail Surat', route('userMail.show', $id));
});