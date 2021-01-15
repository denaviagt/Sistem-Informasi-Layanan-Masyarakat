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
            $villageProfile->village_id = 1;
        } else if ($request->type == 'mission') {
            $villageProfile = new Mission();
            $villageProfile->mission = $request->missionAdd;
            $villageProfile->village_id = 1;
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
            $request->file->move(public_path('uploads/regulationFile'), $fileName);
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
    public function edit($id, $type)
    {
        //  return $request; die;
        if ($type == 'vision') {
            $villageProfile = Vision::find($id);
        } else if ($type == 'mission') {
            $villageProfile = Mission::find($id);
        } else if ($type == 'apparatus') {
            $villageProfile = Apparatus::find($id);
        } else if ($type == 'dusuns') {
            $villageProfile = Dusun::find($id);
        } else if ($type == 'regulations') {
            $villageProfile = Regulation::find($id);
        }
        return response()->json([
            'data' => $villageProfile
        ]);
    }
    public function update(Request $request, $type)
    {
        //  return $request; die;
        if ($request->type == 'vision') {
            $villageProfile = Vision::find($request->visionId);
            $villageProfile->vision = $request->visionEdit;
            $type = 'Visi';
        } else if ($request->type == 'mission') {
            $villageProfile = Mission::find($request->missionId);
            $villageProfile->mission = $request->missionEdit;
        } else if ($request->type == 'apparatus') {
            $villageProfile = Apparatus::find($request->apparatusId);
            $villageProfile->position = $request->position;
            $villageProfile->period = $request->period;
            $villageProfile->status = $request->status;
            $villageProfile->citizen_id = $request->citizen_id;
        } else if ($request->type == 'dusuns') {
            $villageProfile = Dusun::find($request->dusunId);
            $villageProfile->dusun_name = $request->dusun_name;
            $villageProfile->head_of_dusun = $request->head_of_dusun;
        } else if ($request->type == 'regulations') {
            // return ('berhasil');
            $request->validate([
                'file' => 'required|mimes:pdf|max:2048',
            ]);
            $fileName = time() . '-' . $request->file('file')->getClientOriginalName();
            $request->file->move(public_path('uploads/regulationFile'), $fileName);
            $villageProfile = Regulation::find($request->regulationId);
            $villageProfile->title = $request->title;
            $villageProfile->file = $fileName;
        }
        if ($villageProfile->save()) {
            return redirect('profil-kalurahan')->with('status-success', 'Tambah Data Layanan ' . $type . '  Berhasil!');
        } else {
            return redirect('profil-kalurahan')->with('status-fail', 'Tambah Data Layanan ' . $type . '  Gagal!');
        }
    }
    public function destroy($id, $type)
    {
        //  return $request; die;
        if ($type == 'vision') {
            $villageProfile = Vision::find($id);
        } else if ($type == 'mission') {
            $villageProfile = Mission::find($id);
        } else if ($type == 'apparatus') {
            $villageProfile = Apparatus::find($id);
        } else if ($type == 'dusuns') {
            $villageProfile = Dusun::find($id);
        } else if ($type == 'regulations') {
            $villageProfile = Regulation::find($id);
        }
        if ($villageProfile->delete()) {
            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }
}