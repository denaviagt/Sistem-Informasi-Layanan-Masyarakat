<?php

namespace App\Http\Controllers;

use App\Models\Apparatus;
use App\Models\Citizen;
use App\Models\Dusun;
use App\Models\Mission;
use App\Models\Regulation;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Regulation;

class VillageProfileController extends Controller
{
    public function index()
    {
        $visions = Vision::all();
        $missions = Mission::all();
        $apparatus = Apparatus::all();
        $dusuns = Dusun::all();
        $regulations = Regulation::all();

        return view('village-profile/index', compact(['visions', 'missions', 'apparatus', 'dusuns', 'regulations']));
    }

    public function store(Request $request)
    {
        //  return $request; die;
        if ($request->type == 'vision') {
            $villageProfile = new Vision();
            $villageProfile->vision = $request->visionAdd;
        } else if ($request->type == 'mission') {
            $villageProfile = new Mission();
            $villageProfile->mission = $request->missionAdd;
        } else if ($request->type == 'apparatus') {
            $villageProfile = new Apparatus();
            $villageProfile->position = $request->position;
            $villageProfile->period = $request->period;
            $villageProfile->status = $request->status;
            $villageProfile->citizen_id = $request->citizen_id;
            $villageProfile->admin_id = $request->admin_id;
        } else if ($request->type == 'dusuns') {
            $villageProfile = new Dusun();
            $villageProfile->dusun_name = $request->dusun_name;
            $villageProfile->head_of_dusun = $request->head_of_dusun;
        } else if ($request->type == 'regulations') {
            $request->validate([
                'file' => 'required|mimes:pdf|max:2048',
            ]);
            $fileName = time() . '-' . $request->file('file')->getClientOriginalName();
            $request->file->move(public_path('regulationFile'), $fileName);
            $villageProfile = new Regulation();
            $villageProfile->title = $request->title;
            $villageProfile->file = $fileName;
        }
        if ($villageProfile->save()) {
            return redirect('profil-kalurahan')->with('status-success', 'Tambah Data Layanan ' . $request->type . '  Berhasil!');
        } else {
            return redirect('profil-kalurahan')->with('status-fail', 'Tambah Data Layanan ' . $request->type . '  Gagal!');
        }
    }
}
