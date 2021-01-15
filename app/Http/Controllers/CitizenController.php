<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitizenRequest;
use App\Models\Citizen;
use App\Models\Dusun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('data-penduduk/data', compact('citizen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data-penduduk/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
            return redirect('data-penduduk')->with('status', 'Tambah Data Penduduk Berhasil!');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citizen = Citizen::query();
        if ($id != '') {
            // Apply NIK if Request has NIK ID
            $citizen = $citizen->where('id', $id);
        }
        $citizen = $citizen->first();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Fetched',
            'data' => $citizen,
        ]);
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
        return view('data-penduduk/edit', compact('citizen', 'dusun'));
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
            return redirect('data-penduduk')->with('status', 'Ubah Data Penduduk Berhasil!');
        } else {
            return redirect('data-penduduk')->with('status', 'Ubah Data Penduduk Gagal!');
        }
    }

    public function dataVerif($id)
    {
        $citizen = Citizen::find($id);
        $citizen->status = 'verified';
        $citizen->save();
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
    public function select2Name(Request $request)
    {
        // $name = Citizen::select('id', 'full_name');
        $name = DB::table('citizens')->select('id', 'full_name');
        $last_page = null;

        if ($request->has('search') && $request->search != '') {
            // Apply search param
            $name = $name->where('full_name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('page')) {
            // If request has page parameter, add paginate to eloquent
            $name->paginate(10);
            // Get last page
            $last_page = $name->paginate(10)->lastPage();
        }
        $name = $name->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data Fetched',
            'last_page' => $last_page,
            'data' => $name,
        ]);
    }
    public function select2Nik(Request $request)
    {
        // $name = Citizen::select('id', 'full_name');
        $nik = DB::table('citizens')->select('id', 'nik');
        $last_page = null;

        if ($request->has('search') && $request->search != '') {
            // Apply search param
            $nik = $nik->where('nik', 'like', '%' . $request->search . '%');
        }

        if ($request->has('page')) {
            // If request has page parameter, add paginate to eloquent
            $nik->paginate(10);
            // Get last page
            $last_page = $nik->paginate(10)->lastPage();
        }
        $nik = $nik->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data Fetched',
            'last_page' => $last_page,
            'data' => $nik,
        ]);
    }
}
