<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceFile;
use App\Models\ServiceRequirement;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = ServiceCategory::all();
        // $citizen = Citizen::all();
        // return($services->citizen);
        // return $services;
        // $services = Service::where('service_category_id', $request->category ?? 1)->with('citizen')->get();
        // $citizen = $citizen->service()->where('service_category_id', $request->category ?? 1)->get();
        $services = DB::table('citizens')
            ->join('services', 'citizens.id', 'services.citizen_id')
            ->join('dusuns', 'dusuns.id', 'citizens.dusun_id')
            ->select(
                'services.id',
                'services.date as date',
                'services.status as status',
                'citizens.id as citizen_id',
                'citizens.nik as nik',
                'citizens.kk as no_kk',
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
            ->where('service_category_id', $request->category ?? 1)
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
        $service = Service::updateOrCreate(
            ['id' => $request->service_id],
            [
                'date' => now(),
                'status' => $request->status,
                'service_category_id' => $request->service_category_id,
                'citizen_id' => $request->citizen_id
            ]
        );

        return response()->json(['success' => 'Service sukses', 'data' => $service, 'code' => 200, 200]);
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
        $service = DB::table('citizens')
            ->join('services', 'citizens.id', 'services.citizen_id')
            ->join(
                'dusuns',
                'dusuns.id',
                'citizens.dusun_id'
            )
            ->select(
                'services.id',
                'services.date as date',
                'services.status as status',
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
        $service->status = 'processing';
        $service->save();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return response()->json(['success' => 'Service terhapus']);
    }
}
