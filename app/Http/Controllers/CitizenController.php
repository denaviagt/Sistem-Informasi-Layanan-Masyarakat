<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Dusun;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizen = Citizen::all();
        return view('data-penduduk-desa', compact('citizen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data-penduduk-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citizen = Citizen::find($id);
        $dusun = Dusun::all();
        return view('data-penduduk-edit',compact('citizen','dusun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
            return redirect('data-penduduk-desa')->with('status', 'Ubah Data Penduduk Berhasil!');
        } else {
            return redirect('data-penduduk-desa')->with('status', 'Ubah Data Penduduk Gagal!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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