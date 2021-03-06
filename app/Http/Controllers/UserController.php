<?php

namespace App\Http\Controllers;

use App\Data\Constants\CitizenCons;
use App\Http\Requests\StoreCitizenRequest;
use App\Models\Citizen;
use App\Models\Dusun;
use Illuminate\Http\Request;

// use Maatwebsite\Excel\Excel;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizen = Citizen::whereNull('is_deleted')->orWhere('is_deleted', '0')->orderBy('created_at', 'desc')->get();
        return view('data-penduduk/data', compact('citizen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'dusuns' => Dusun::all(),
            'bloodTypes' => CitizenCons::$bloodTypes,
            'genders' => CitizenCons::$genders,
            'religions' => CitizenCons::$religions,
            'marriedStatuses' => CitizenCons::$marriedStatuses,
            'lastEducations' => CitizenCons::$lastEducations,
        ];
        return view('data-penduduk/tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitizenRequest $request)
    {
        $request->validated();

        $citizen = new Citizen();
        $citizen->nik = $request->nik;
        $citizen->kk = $request->kk;
        $citizen->full_name = $request->full_name;
        $citizen->pob = $request->pob;
        $citizen->dob = $request->dob;
        $citizen->gender = $request->gender;
        $citizen->religion = $request->religion;
        $citizen->married_status = $request->married_status;
        $citizen->last_education = $request->last_education;
        $citizen->dusun_id = $request->dusun_id;
        $citizen->address = $request->address;

        if (isset($request->blood_type)) {
            $citizen->blood_type = $request->blood_type;
        }
        if (isset($request->profession)) {
            $citizen->profession = $request->profession;
        }

        if ($citizen->save()) {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' membuat data penduduk baru', 'create');
            return redirect('data-penduduk')->with('status', 'Tambah Data Penduduk Berhasil!');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $citizen = Citizen::query();
        // if ($id != '') {
        //     // Apply NIK if Request has NIK ID
        //     $citizen = $citizen->where('id', $id);
        // }
        // $citizen = $citizen->first();

        $detail = Citizen::find($id);
        // $data = [
        //     'detail' => $citizen,
        // ];
        return view('data-penduduk.detail', compact('detail'));

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Data Fetched',
        //     'data' => $citizen,
        // ]);
    }

    public function show_data_by_nik($nik)
    {
        $data = Citizen::where('nik', $nik)->first();
        $data = $data->user ?? "Blok Datane Renek";

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citizen = Citizen::find($id);
        $dusun = Dusun::all();
        return view('data-penduduk/edit', compact('citizen', 'dusun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $citizen = Citizen::find($id);
        $citizen->nik = $request->nik;
        $citizen->kk = $request->kk;
        $citizen->full_name = $request->full_name;
        $citizen->pob = $request->pob;
        $citizen->dob = $request->dob;
        $citizen->gender = $request->gender;
        $citizen->blood_type = $request->blood_type;
        $citizen->religion = $request->religion;
        $citizen->married_status = $request->married_status;
        $citizen->last_education = $request->last_education;
        $citizen->profession = $request->profession;
        $citizen->address = $request->address;
        $citizen->dusun_id = $request->dusun_id;

        if ($citizen->save()) {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' merubah data penduduk dengan NIK ' . $citizen->nik, 'update');
            return redirect('data-penduduk')->with('status', 'Ubah Data Penduduk Berhasil!');
        } else {
            return redirect('data-penduduk')->with('status', 'Ubah Data Penduduk Gagal!');
        }
    }

    public function dataVerif($id)
    {
        $citizen = Citizen::find($id);
        if ($citizen->status != 'verified') {
            $citizen->status = 'verified';
            if ($citizen->save()) {
                // addToLog($this->url, $this->ip, $this->nama_admin . ' memelakukan verifikasi data penduduk dengan NIK ' . $citizen->nik, 'verif');
            }
        }
    }

    public function updateDelete($id)
    {
        $citizen = Citizen::find($id);
        $citizen->is_deleted = 1;
        if ($citizen->save()) {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' menghapus data penduduk dengan NIK ' . $citizen->nik, 'delete');
            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citizen = Citizen::find($id);
        if ($citizen->delete()) {
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
