<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use DateTimeInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->locale('id')->translatedFormat('l, j F Y');

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'date' => $date,
            'queues' => Queue::where('is_done', false)
                ->whereDate('date', date('Y-m-d'))
                ->get(),
            'qd' => Queue::where('is_done', true)
                ->whereDate('date', date('Y-m-d'))
                ->latest()
                ->get(),
            'queue' => Queue::where('user_id', auth()->user()->id)
                ->whereDate('date', date('Y-m-d'))
                ->latest()
                ->get()
        ]); 
    }

    public function queue(Request $request)
    {
        Queue::where('id', $request['q'])->update(['is_done' => true]);
        return redirect('/antrian');
    }

    public function ambilAntrian()
    {
        $latestQueue = Queue::whereDate('date', date('Y-m-d'))->latest()->first();

        $nextQueue = ($latestQueue) ? $latestQueue->queue + 1 : 1;

        $dataqueue = [
            'queue' => $nextQueue,
            'user_id' => auth()->user()->id,
            'is_done' => 0,
            'date' => date('Y-m-d')
        ];

        Queue::create($dataqueue);

        return redirect('/antrian');
    }
}
