<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use App\Models\Complaint;
use App\Models\Mail;
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
                    return redirect()->intended('/');
                    break;
                case 'Layanan':
                    return redirect()->intended('/');
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
                    ->limit(3)
                    ->get([
                        'user_business_items.id',
                        'user_business_items.item_name',
                        'userDB.NAMA as name',
                        'user_business_items.created_at',
                        'user_business_items.status',
                        'user_business_items.item_image as image',
                    ]);
        
        $latestComplaint = Complaint::latest()->limit(3)->get();

        if(request()->ajax()){

            $mail = DB::table('users_mail')
                ->select('title', DB::raw('COUNT(title) as count'))
                ->join('mails', 'mails.id', '=', 'users_mail.mail_id')
                ->groupBy('mails.title')
                ->get();

            // $resident = DB::connection('resident_mysql')->select(DB::raw(
            //     "SELECT months.month, COALESCE(COUNT(resident_data.id), 0) as data_count
            //     FROM (
            //         SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
            //     ) AS months
            //     LEFT JOIN resident_data ON MONTH(resident_data.created_at) = months.month
            //         AND YEAR(resident_data.created_at) = YEAR(CURRENT_DATE())
            //         AND MONTH(resident_data.created_at) BETWEEN 1 AND 12
            //         AND resident_data.UMUR BETWEEN 20 AND 30
            //     GROUP BY months.month
            //     ORDER BY months.month"
            // ));

            // DB::connection('resident_mysql')::select(DB::raw('(SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12) AS months'))
            //     ->leftJoin('resident_data', function ($join) {
            //         $join->on(DB::raw('MONTH(resident_data.created_at)'), '=', 'months.month')
            //             ->whereYear('resident_data.created_at', '=', date('Y'))
            //             ->whereBetween('resident_data.age', [20, 30]);
            //     })
            //     ->select(DB::raw('months.month, COALESCE(COUNT(resident_data.id), 0) as data_count'))
            //     ->groupBy('months.month')
            //     ->orderBy('months.month')
            //     ->get();



            return compact('mail');
        }

        return view('admin.index', compact('residentTotal', 'umkmTotal', 'staffTotal', 'mailTotal', 'latestMail', 'latestUmkm', 'latestComplaint'));
    }

}
