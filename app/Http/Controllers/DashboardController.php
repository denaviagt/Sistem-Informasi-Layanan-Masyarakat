<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        $date = '2021-01-15 20:15:24';
        $proccess = Service::where('status', 'processing')->get();
        $proccesses = $proccess->count();
        $accepted = Service::where('status', 'accepted')->get();
        $accepteds = $accepted->count();
        $rejected = Service::where('status', 'rejected')->get();
        $rejecteds = $rejected->count();
        $completed = Service::where('status', 'completed')->get();
        $completeds = $completed->count();
        $serviceOfDate = Service::where('date', $date)->get();
        $countServiceOfDate = $serviceOfDate->count();
        $feedback = Feedback::get();

        $feedbacks = $feedback->count();
        $current = Carbon::now();
        // dd($current->subMonths());
        // DB::table('log_activity')->where('log_time', '<=', $current->subMonths())->delete();

        return view('dashboard', compact(['proccesses', 'accepteds', 'rejecteds', 'completeds', 'countServiceOfDate', 'feedbacks']));
    }
    public function countService()
    {
        $data = array();
        $monthText = array(
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November',
            'Desember'
        );
        for ($months = 1; $months < 13; $months++) {
            $result = DB::table('services')->whereNull('services.deleted_at')->whereMonth('date', $months)->whereYear('date', Date('Y'))->get();
            $data[$monthText[$months - 1]] = count($result) ?? 0;
        }
        $feedback = array();
        for ($months = 1; $months < 13; $months++) {
            $result = DB::table('feedbacks')->whereMonth('date', $months)->whereYear('date', Date('Y'))->get();
            $feedback[$monthText[$months - 1]] = count($result) ?? 0;
        }

        $labels = (array_keys($data));
        $service = (array_values($data));
        $feedback = (array_values($feedback));
        return response()->json([
            'labels' => $labels,
            'service' => $service,
            'feedback' => $feedback
        ]);
    }

    // public function logActivity()
    // {
    //     $logs = logActivityLists();
    //     $data = array();
    //     foreach ($logs as $key => $value) {
    //         $data[$key] = array('description' => $logs[$key]->description, 'event' => $logs[$key]->event, 'time' => $logs[$key]->log_time->diffForHumans());
    //     }

    //     return response()->json([
    //         'data' => $data,
    //     ]);
    // }
}