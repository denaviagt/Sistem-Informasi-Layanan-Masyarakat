<?php

namespace App\Http\Controllers;

use App\Models\Apparatus;
use App\Models\Citizen;
use App\Models\Dusun;
use App\Models\Mission;
use App\Models\Regulation;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use App\Models\Regulation;

class VillageProfileController extends Controller
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
            $type = 'visi';
            $villageProfile = new Vision();
            $villageProfile->vision = $request->visionAdd;
            $villageProfile->village_id = 1;
        } else if ($request->type == 'mission') {
            $type = 'misi';
            $villageProfile = new Mission();
            $villageProfile->mission = $request->missionAdd;
            $villageProfile->village_id = 1;
        } else if ($request->type == 'apparatus') {
            $type = 'struktur organisasi';
            $villageProfile = new Apparatus();
            $villageProfile->position = $request->position;
            $villageProfile->period = $request->period;
            $villageProfile->status = $request->status;
            $villageProfile->citizen_id = $request->citizen_id;
            $villageProfile->admin_id = $request->admin_id;
            if ($request->avatar) {
                $request->validate([
                    'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $avatarName = time() . '-' . $request->file('avatar')->getClientOriginalName();
                $request->avatar->move(public_path('uploads/images/apparatus-avatar'), $avatarName);
                $villageProfile->avatar = $avatarName;
            }

        } else if ($request->type == 'dusuns') {
            $type = 'dusun';
            $villageProfile = new Dusun();
            $villageProfile->dusun_name = $request->dusun_name;
            $villageProfile->head_of_dusun = $request->head_of_dusun;
        } else if ($request->type == 'regulations') {
            $type = 'produk hukum';
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
            // addToLog($this->url, $this->ip, $this->nama_admin . ' menambah data ' . $type, 'create');
            return redirect('profil-kalurahan')->with('status-success', 'Tambah Data ' . $type . '  Berhasil!');
        } else {
            return redirect('profil-kalurahan')->with('status-fail', 'Tambah Data ' . $type . '  Gagal!');
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
            $apparatus_name = DB::table('citizens')->select('full_name')->where('id', $villageProfile->citizen_id)->first();
            // return $apparatus_name;

            $villageProfile['name'] = $apparatus_name;
            // array_push($villageProfile, $apparatus_name);
            
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
            $type = 'visi';
        } else if ($request->type == 'mission') {
            $villageProfile = Mission::find($request->missionId);
            $villageProfile->mission = $request->missionEdit;
            $type = 'misi';
        } else if ($request->type == 'apparatus') {
            $villageProfile = Apparatus::find($request->apparatusId);
            $villageProfile->position = $request->position;
            $villageProfile->period = $request->period;
            $villageProfile->status = $request->status;
            $villageProfile->citizen_id = $request->citizen_id;
            if ($request->avatar) {
                $avatarName = time() . '-' . $request->file('avatar')->getClientOriginalName();
                $avatarName = str_replace(' ', '-', $avatarName);
                $request->avatar->move(public_path('uploads/images/apparatus-avatar'), $avatarName);

                $villageProfile->avatar = $avatarName;
            }
            $type = 'struktur organisasi';
        } else if ($request->type == 'dusuns') {
            $villageProfile = Dusun::find($request->dusunId);
            $villageProfile->dusun_name = $request->dusun_name;
            $villageProfile->head_of_dusun = $request->head_of_dusun;
            $type = 'dusun';
        } else if ($request->type == 'regulations') {
            $type = 'produk hukum';
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
            // addToLog($this->url, $this->ip, $this->nama_admin . ' merubah data ' . $type . ' dengan id ' . $villageProfile->id, 'update');
            return redirect('profil-kalurahan')->with('status-success', 'Edit Data ' . $type . 'Berhasil!');
        } else {
            return redirect('profil-kalurahan')->with('status-fail', 'Tambah Data Layanan ' . $type . '  Gagal!');
        }
    }
    public function destroy($id, $type)
    {
        //  return $request; die;
        if ($type == 'vision') {
            $villageProfile = Vision::find($id);
            $type = 'visi';
        } else if ($type == 'mission') {
            $villageProfile = Mission::find($id);
            $type = 'misi';
        } else if ($type == 'apparatus') {
            $villageProfile = Apparatus::find($id);
            $type = 'struktur organisasi';
        } else if ($type == 'dusuns') {
            $villageProfile = Dusun::find($id);
            $type = 'dusun';
        } else if ($type == 'regulations') {
            $villageProfile = Regulation::find($id);
            $type = 'produk hukum';
        }
        if ($villageProfile->delete()) {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' menghapus data ' . $type . ' dengan id ' . $villageProfile->id, 'delete');
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