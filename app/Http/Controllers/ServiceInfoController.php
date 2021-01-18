<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceProcedure;
use App\Models\ServiceRequirement;
use Illuminate\Http\Request;

class ServiceInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = ServiceCategory::all();
        $procedure = ServiceProcedure::where('service_category_id', $request->category ?? 1)->get();
        $req = ServiceRequirement::where('service_category_id', $request->category ?? 1)->get();
        return view('service-info/index', compact(['category', 'procedure', 'req']));
    }

    public function data_alur(Request $request)
    {
        $category = ServiceCategory::all();
        $procedure = ServiceProcedure::where('service_category_id', $request->category ?? 1)->get();
        return view('service-info/alur-data', compact('procedure'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->type == 'procedure') {
            $service = new ServiceProcedure();
            $service->procedure = $request->procedure;
        } else {
            $service = new ServiceRequirement();
            $service->terms = $request->terms;
        }
        $service->description = $request->description;
        $service->service_category_id = $request->category ?? 1;
        if ($service->save()) {
            return redirect('info-layanan?category=' . $request->category ?? 1)->with('status-success', 'Tambah Data Layanan ' . $request->type . '  Berhasil!');
        } else {
            return redirect('info-layanan')->with('status-fail', 'Tambah Data Layanan ' . $request->type . '  Gagal!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $type)
    {
        if ($type == 'procedure') {
            $service = ServiceProcedure::find($id);
        } else {
            $service = ServiceRequirement::find($id);
        }
        return response()->json([
            'data' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type)
    {
        if ($type == 'procedure') {
            $service = ServiceProcedure::find($request->edit_alur_id);
            $service->procedure = $request->edit_alur_layanan;
            $service->description = $request->edit_description_layanan;
        } else {
            $service = ServiceRequirement::find($request->edit_syarat_id);
            $service->terms = $request->edit_syarat_layanan;
            $service->description = $request->edit_description_layanan;
        }

        if ($service->save()) {
            return redirect('info-layanan?category=' . $request->category ?? 1)->with('status_success', 'Ubah Data Info Layanan Berhasil!');
        } else {
            return redirect('info-layanan?category=' . $request->category ?? 1)->with('status_fail', 'Ubah Data Info Layanan Gagal!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $type)
    {
        if ($type == 'procedure') {
            $service = ServiceProcedure::find($id);
        } else {
            $service = ServiceRequirement::find($id);
        }

        if ($service->delete()) {
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