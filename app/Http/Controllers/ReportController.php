<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Record;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index', [
            'title' => 'Laporan',
            'records' => Record::all(),
            'users' => User::with('level')->where('level_id', 4)->get(),
            'medicines' => Medicine::all(),
        ]);
    }    
        
    function print(Request $request) {
        $title = 'Laporan';
        $mr = null;
        $startDate = null; // Set startDate to null as the default value
        
        switch ($request->range) {
            case '1-month':
                $startDate = Carbon::now()->subMonth();
                break;
            case '3-months':
                $startDate = Carbon::now()->subMonths(3);
                break;
            case '6-months':
                $startDate = Carbon::now()->subMonths(6);
                break;
            case '1-year':
                $startDate = Carbon::now()->subYear();
                break;
            default:
                // No range selected, set $startDate to null to retrieve all records
                break;
        }
        
        if ($startDate !== null) {
            $mr = Record::where('created_at', '>=', $startDate)->get();
        } else {
            $mr = Record::all(); // Retrieve all records if $startDate is null
        }
        
        return view('report.report', compact('title', 'mr'));
    }
        
    
    
}
