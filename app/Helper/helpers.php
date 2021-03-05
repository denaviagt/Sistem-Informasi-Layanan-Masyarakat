<?php

use App\Models\LogActivity as LogActivityModels;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function addToLog($url, $ip, $description, $event)
{
    // $request =  Request;
    $log = [];
    $log[] = [
        'url' => $url,
        'ip' => $ip,
        'event' => $event,
        'description' => $description,
        'admin_id' => auth()->user()->id,
        'log_time' => now(),
    ];
    // LogActivityModels::insert($log);
    DB::table('log_activity')->insert($log);
    // dd($log);
}
function logActivityLists()
{
    return LogActivityModels::where('url', 'not like', '%jogotirto.id/admin%')->limit(5)->orderBy('log_time', 'desc')->get();
}