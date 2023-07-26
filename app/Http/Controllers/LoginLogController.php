<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loginlog;

class LoginLogController extends Controller
{
    public function index()
    {
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
}
