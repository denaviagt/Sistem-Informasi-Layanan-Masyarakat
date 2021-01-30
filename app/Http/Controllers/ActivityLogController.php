<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Models\Activity as ModelsActivity;

class ActivityLogController extends Controller
{
    public function index()
    {
        // activity()->causedBy($user)
        //     ->log('The causer name is :causer.name');
        $status = array("created" => "Membuat", "updated" => "Mengubah", "deleted" => "Mengapus");
        $lastActivity = ModelsActivity::orderBy('created_at', 'desc')->get();
        $data = array();
        foreach ($lastActivity as $key => $value) {
            $data[$key] = array('title' => $status[$lastActivity[$key]->description] . " " . $lastActivity[$key]->log_name, "content" => $lastActivity[$key]->causer->full_name . " " . $status[$lastActivity[$key]->description] . " " . $lastActivity[$key]->log_name . " id " . $lastActivity[$key]->subject['id'], "time" => $lastActivity[$key]->created_at->diffForHumans());
        }
        return $data;
        // return $lastActivity[0]->causer->full_name . " " . $status['Created'] . " " . $lastActivity[0]->log_name . " " . $lastActivity[0]->subject['id'];
        // $lastActivity->description;->diffForHumans()
    }
}
