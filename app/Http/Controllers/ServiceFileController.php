<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceFile;
use App\Models\ServiceRequirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceFileController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->nama_admin = Auth::guard('web')->user()->full_name;
            $this->url = $request->fullUrl();
            $this->ip = $request->ip();
            return $next($request);
        });
    }

    public function verifUpdate($id)
    {
        $file = ServiceFile::find($id);
        $req_name = ServiceRequirement::select('terms')->where('id', $file->service_requirement_id)->first();
        $service_id = Service::select('id')->where('id', $file->service_id)->first();
        if ($file->status != 'verified') {
            $file->status = 'verified';
            if ($file->save()) {
                // addToLog($this->url, $this->ip, $this->nama_admin . ' melakukan verifikasi berkas ' . $req_name->terms . ' pada layanan ID ' . $service_id->id, 'verif');
            }
        }
    }
    public function deniedUpdate($id, $service_id)
    {
        $file = ServiceFile::find($id);
        $file->status = 'denied';
        // $file->save();
        $service = Service::find($service_id);

        // $service->save();
        if ($file->status != 'denied') {
            $file->status = 'denied';
            $service->status = 'rejected';
            if ($file->save() && $service->save()) {
                // addToLog($this->url, $this->ip, $this->nama_admin . ' menolak layanan ' . $service->id . ' karena berkas bermasalah', 'reject');
            }
        }
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