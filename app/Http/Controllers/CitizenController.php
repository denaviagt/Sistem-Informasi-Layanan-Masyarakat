<?php

namespace App\Http\Controllers;

use App\Data\Constants\CitizenCons;
use App\Exports\CitizenExport;
use App\Http\Requests\StoreCitizenRequest;
use App\Imports\CitizenImport;
use App\Models\Citizen;
use App\Models\Dusun;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;

class CitizenController extends Controller
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
            // addToLog($this->url, $this->ip, $this->nama_admin . ' membuat data penduduk baru', 'create');
            return redirect('data-penduduk')->with('status', 'Tambah Data Penduduk Berhasil!');
        } else {
            return redirect()->back();
        }
    }
    public function exportExcel()
    {
        return Excel::download(new CitizenExport, 'Data Penduduk.xlsx');
    }

    public function importExcel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('uploads/file_citizen', $nama_file);

        // import data
        Excel::import(new CitizenImport, public_path('/uploads/file_citizen/' . $nama_file));


        // alihkan halaman kembali
        return redirect('/data-penduduk')->with('status', 'Import Data Penduduk Berhasil!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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

    public function show_data($nik)
    {
        $detail = Citizen::where('nik', $nik)->first();
        // $data = [
        //     'detail' => $citizen,
        // ];
        // return view('data-penduduk.detail', compact('detail'));

        return $detail;
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