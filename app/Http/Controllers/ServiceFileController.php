<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceFile;
use App\Models\ServiceRequirement;
use Illuminate\Http\Request;

class ServiceFileController extends Controller
{
    public function verifUpdate($id)
    {
        $file = ServiceFile::find($id);
        $file->status = 'verified';
        $file->save();
    }
    public function deniedUpdate($id, $service_id)
    {
        $file = ServiceFile::find($id);
        $file->status = 'denied';
        $file->save();
        $service = Service::find($service_id);
        $service->status = 'rejected';
        $service->save();
    }
    public function verifFiles($id, $cat)
    {
        // $verifFile = ServiceFile::find($id);
        $verifFile = ServiceFile::where('service_id', $id)->get();
        $tt = ServiceRequirement::where('service_category_id', $cat)->get();
        $verified = 0;
        if (count($verifFile) == count($tt)) {
            foreach ($tt as $key => $value) {
                if ($verifFile[$key]['status'] == 'verified') {
                    $verified++;
                }
            }
        }
        return  response()->json([
            'status' => $verified == count($tt) ? true : false,
        ]);
    }
}