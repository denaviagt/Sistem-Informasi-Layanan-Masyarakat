<?php

namespace App\Http\Controllers;

use App\Models\ServiceFile;
use Illuminate\Http\Request;

class ServiceFileController extends Controller
{
    public function statusUpdate($id)
    {
        $file = ServiceFile::find($id);
        $file->status = 'verified';
        $file->save();
    }
}