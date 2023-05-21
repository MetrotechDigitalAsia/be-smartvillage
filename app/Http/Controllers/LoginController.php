<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Staff;
use App\Models\UserBusinessItem;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    protected $userDb;

    public function __construct(){
        $this->userDb = env('DB_RESIDENT_DATABASE'). '.resident_data as userDB';
    }
    
    public function index(){
        return view('login');
    }

    public function auth(Request $request){

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([...$validated, 'status' => 'Active'])){

            $request->session()->regenerate();

            switch (Auth::user()->type) {
                case 'Super':
                    return redirect()->intended('/');
                    break;
                case 'Umum':
                    return redirect()->intended('/');
                    break;
                case 'Pariwisata':
                    return redirect()->intended('tourism-map/point-destinasi');
                    break;
                case 'Layanan':
                    return redirect()->intended('/persuratan/surat');
                    break;
            }

            die;
        }

        return back()->withErrors('loginFailed', 'login gagal');
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function dashboard(){

        $residentTotal = UserData::count();
        $umkmTotal = UserBusinessItem::where('status', 'approve')->count();
        $staffTotal = Staff::count();
        $mailTotal = DB::table('users_mail')->count();

        $latestMail = DB::table('users_mail as userMail')
                    ->join('mails', 'mails.id', '=', 'userMail.mail_id')
                    ->join('user_logins as user', function($join){
                        $join->join($this->userDb, 'userDB.NIK', '=', 'user.no_nik')
                        ->on('user.id', '=', 'userMail.user_id');
                    })
                    ->latest('userMail.created_at')
                    ->limit(3)
                    ->get([
                        'userMail.id as id',
                        'userMail.created_at',
                        'userDB.NAMA as name',
                        'mails.title'
                    ]);
        
        $latestUmkm = UserBusinessItem::join('user_logins as user', function($join){
                        $join->join($this->userDb, 'userDB.NIK','user.no_nik')
                        ->on('user.id', 'user_business_items.user_id');
                    })
                    ->latest('user_business_items.created_at')
                    ->limit(4)
                    ->get([
                        'user_business_items.id',
                        'user_business_items.item_name',
                        'userDB.NAMA as name',
                        'user_business_items.created_at',
                        'user_business_items.status',
                        'user_business_items.item_image as image',
                    ]);
        
        $latestComplaint = Complaint::latest()->limit(4)->get();

        return view('admin.index', compact('residentTotal', 'umkmTotal', 'staffTotal', 'mailTotal', 'latestMail', 'latestUmkm', 'latestComplaint'));
    }

}
