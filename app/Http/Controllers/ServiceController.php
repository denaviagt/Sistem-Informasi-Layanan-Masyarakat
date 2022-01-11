<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\ExtraValue;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFile;
use App\Models\ServiceRequirement;
use App\Models\Village;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
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
    public function index(Request $request)
    {
        $category = ServiceCategory::all();

        $services = DB::table('citizens')
            ->join('services', 'citizens.id', 'services.citizen_id')
            ->join('dusuns', 'dusuns.id', 'citizens.dusun_id')
            ->select(
                'services.id',
                'services.date as date',
                'services.status as status',
                'citizens.id as citizen_id',
                'citizens.nik as nik',
                'citizens.full_name as full_name',
                'dusuns.dusun_name',
                // 'service_categories.category as service_category',
            )
            ->where('service_category_id', $request->category ?? 1)
            ->whereNull('services.deleted_at')
            ->orderBy('services.id', 'desc')
            ->get();
        // return $services;
        return view('service/index', compact(['services', 'category']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $citizen = Citizen::query();
        if ($request->has('input_nik') && $request->input_nik != '') {
            // Apply NIK if Request has NIK ID
            $citizen = $citizen->where('nik', $request->input_nik);
        }
        $citizen = $citizen->first();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Fetched',
            'data' => $citizen,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citizen = Citizen::where('nik', $request->input_nik)->first();
        $service = Service::updateOrCreate(
            ['id' => $request->service_id],
            [
                'date' => now(),
                'status' => $request->status,
                'service_category_id' => 1,
                'citizen_id' => $citizen->id,
                'description' => $request->desc,
                'user_id' => Auth::user()->id
            ]
        );

        if ($service) {
            $service_file = new ServiceFile();
            $service_file->file_url;
        }

        return redirect()->route('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $id)
    {
        $requirement = ServiceRequirement::where('service_category_id', $category)->get();
        $service = DB::table('services')
            ->join('citizens', 'citizens.id', 'services.citizen_id')
            ->join('dusuns', 'dusuns.id', 'citizens.dusun_id')
            ->join('service_categories', 'service_categories.id', 'services.service_category_id')
            ->select(
                'services.id',
                'services.date as date',
                'services.status as status',
                'services.service_category_id as service_category_id',
                'service_categories.category as service_category',
                'citizens.id as citizen_id',
                'citizens.nik as nik',
                'citizens.kk as kk',
                'citizens.full_name as full_name',
                'citizens.gender as gender',
                'citizens.religion as religion',
                'citizens.married_status as married_status',
                'citizens.last_education as last_education',
                'citizens.blood_type as blood_type',
                'citizens.profession as profession',
                'citizens.pob as pob',
                'citizens.dob as dob',
                'citizens.address as address',
                'citizens.status as citizen_status',
                'dusuns.dusun_name'
            )
            ->where('services.id', $id)
            ->first();
        $files = ServiceFile::where('service_id', $id)->get();
        // return ([$files, $requirement, $service]);
        return view('service/detail-layanan', compact(['requirement', 'service', 'files']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $service = Service::find($id);
        // return response()->json($service);
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
        //
    }

    public function statusUpdate($id)
    {
        $service = Service::find($id);
        if ($service->status == 'accepted' || $service->status == 'rejected') {
            $service->status = 'processing';
            if ($service->save()) {
                // addToLog($this->url, $this->ip, $this->nama_admin . ' memproses layanan dengan ID ' . $service->id, 'process');
            }
        }
    }
    public function serviceVerified($id)
    {
        $service = Service::find($id);
        if ($service->status !== 'completed') {
            $service->status = 'completed';
            if ($service->save()) {
                // addToLog($this->url, $this->ip, $this->nama_admin . ' melakukan verifikasi layanan dengan ID ' . $service->id, 'verif');
                return response()->json([
                    'status' => true,
                ]);
            } else {
                return response()->json([
                    'status' => false,
                ]);
            }
        }
    }
    // public function statusDenied($id)
    // {
    //     $fileStatus = ServiceFile::;
    //     $service->status = 'processing';
    //     $service->save();
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if ($service->delete()) {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' menghapus layanan dengan ID ' . $service->id, 'delete');
            return response()->json(['success' => true]);
        }
    }

    public function cetakSurat($id, $id_cat)
    {
        // return redirect()->back()->with('error', 'Fitur Cetak Sedang Dalam Perbaikan!');
        $data =  Service::where("id", $id)->where("service_category_id", $id_cat)->first();
        // $village = Village::first();
        // $extra_fields = DB::table('extra_fields')
        //     ->join('extra_values', 'extra_values.extra_field_id', 'extra_fields.id')
        //     ->where('extra_values.service_id', $id)
        //     ->get();
        // return ([$data, $village]);
        if ($id_cat == 1) {
            $pdf = PDF::loadView('template.ektp', compact(['data']));
        } elseif ($id_cat == 3) {
            $pdf = PDF::loadView('template.aktalahir', compact(['data', 'extra_fields']));
        } elseif ($id_cat == 4) {
            $pdf = PDF::loadView('template.aktamati', compact(['data', 'extra_fields']));
        } elseif ($id_cat == 5) {
            $pdf = PDF::loadView('template.pindah-penduduk', compact(['data', 'extra_fields']));
        } elseif ($id_cat == 7) {
            $pdf = PDF::loadView('template.nikah', compact(['data']));
            // return $pdf->stream($data['citizen']->full_name . '.pdf');
        } elseif ($id_cat == 8) {
            $pdf = PDF::loadView('template.sku', compact(['data', 'extra_fields']));
        }

        return $pdf->stream($data->citizen->full_name . '.pdf');
        // return $pdf->download($data->citizen->full_name . '.pdf');
    }
}