<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Loginlog; // Tambahkan ini untuk mengimpor model LoginLog
use App\Models\User; // Tambahkan ini untuk mengimpor model LoginLog

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect('/dashboard');
        } else {
            return view('login.index', [
                'title' => 'Login'
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            // 'email' => ['required', 'email:dns'],            
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $ipAddress = $request->ip();
        $deviceInfo = $request->userAgent(); // Mengambil user agent string

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Catat log login berhasil menggunakan relasi dengan model LoginLog
            $loginLog = new Loginlog();
            $loginLog->user_id = $user->id;
            $loginLog->email = $user->email;
            $loginLog->ip_address = $ipAddress;
            $loginLog->device_info = $deviceInfo;
            $loginLog->keterangan = 'login';
            $loginLog->status = 'success';
            $loginLog->description = 'Login successful.';
            $loginLog->login_time = now(); // Catat waktu login saat ini
            $loginLog->save();

            $request->session()->regenerate();
            return redirect()->intended('/dashboard');            
        }else {
            // Catat log login gagal menggunakan relasi dengan model LoginLog
            $loginLog = new Loginlog();
            $loginLog->email = $request->input('email');
            $loginLog->ip_address = $ipAddress;
            $loginLog->device_info = $deviceInfo;
            $loginLog->keterangan = 'login';
            $loginLog->status = 'failed';
            $loginLog->description = 'Login failed. Email or Password is incorrect.';
            $loginLog->save();

            return back()->with('loginError', 'Email or Password is incorrect!');
        }        
    }

    public function logout(Request $request)
    {
        $ipAddress = $request->ip();
        $deviceInfo = $request->userAgent(); // Mengambil user agent string

        // Catat log logout menggunakan relasi dengan model LoginLog
        if (Auth::check()) {
            $user = Auth::user();

            $loginLog = new Loginlog();
            $loginLog->user_id = $user->id;
            $loginLog->email = $user->email;
            $loginLog->ip_address = $ipAddress;
            $loginLog->device_info = $deviceInfo;
            $loginLog->keterangan = 'logout';
            $loginLog->status = 'success';
            $loginLog->description = 'Logout successful.';
            $loginLog->login_time = $user->loginLogs()->orderBy('id', 'desc')->first()->login_time; // Ambil waktu login terakhir dari relasi loginLogs() untuk mendapatkan waktu login
            $loginLog->save();
        }

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function LoginLog(){
        $logs = Loginlog::all()->sortByDesc('created_at');

        // Calculate login duration for each logout entry
        foreach ($logs as $log) {
            if ($log->keterangan === 'logout') {
                $loginTime = strtotime($log->login_time);
                $logoutTime = strtotime($log->created_at);
                $duration = $logoutTime - $loginTime;
                $log->durasi = gmdate('H:i:s', $duration);
            }
        }

        return view('login.log', [
            'title' => 'Login Log',
            'logs' => $logs,
        ]);
    }

    public function changePassword(Request $request){
        // $request->validate([
        //     'current_password' => 'required',
        //     'new_password' => 'required|min:6|different:current_password',
        //     'confirm_password' => 'required|same:new_password',
        // ]);

        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            if ($request->new_password != $request->confirm_password) {
                return redirect()->back()->with('error', 'The confirm password and new password must match.');
            }
            if ($request->current_password == $request->new_password) {
                return redirect()->back()->with('error', 'The new password and current password must be different.');
            }
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);

            return redirect()->back()->with('update', 'Password has been changed successfully.');            
        } else {
            return redirect()->back()->with('error', 'The current password is incorrect.');            
            
            // return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

    }
}
