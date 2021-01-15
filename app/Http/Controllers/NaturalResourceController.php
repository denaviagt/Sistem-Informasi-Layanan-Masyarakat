<?php

namespace App\Http\Controllers;

use App\Data\Constants\NaturalResourceCons;
use App\Http\Requests\StoreNatureResourceRequest;
use App\Models\NaturalResource;
use Illuminate\Http\Request;

class NaturalResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'naturalResources' => NaturalResource::all()
        ];
        return view('natural-resource.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'statuses' => NaturalResourceCons::$statuses
        ];
        return view('natural-resource.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNatureResourceRequest $request)
    {
        $request->validated();

        $title = $request->title;
        $status = $request->status;
        $thumbnail = $request->thumbnail;
        $description = $request->description;

        $data = [
            'title' => $title,
            'status' => $status,
            //          'thumbnail' => $thumbnail,
            'description' => $description,
        ];

        $naturalResource = new NaturalResource();

        if ($naturalResource->insertOrIgnore($data)) return redirect('potensi-desa')->with('status', 'Berhasil tambah data');
        else return redirect()->back()->with('status', 'Gagal tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $naturalResource = NaturalResource::find($id);
        $data = [
            'detail' => $naturalResource,
        ];
        return view('natural-resource.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $naturalResource = NaturalResource::find($id);
        $data = [
            'statuses' => NaturalResourceCons::$statuses,
            'naturalResource' => $naturalResource
        ];
        return view('natural-resource.edit', $data);
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
        //$request->validated();

        $title = $request->title;
        $status = $request->status;
        $thumbnail = $request->thumbnail;
        $description = $request->description;

        $data = [
            'title' => $title,
            'status' => $status,
            //          'thumbnail' => $thumbnail,
            'description' => $description,
        ];

        $naturalResource = NaturalResource::find($id);
        $naturalResource->title=$title;
        $naturalResource->status=$status;
        $naturalResource->description=$description;
        if ($naturalResource->save()) return redirect('potensi-desa')->with('status', 'Berhasil Update Data');
        else return redirect()->back()->with('status', 'Gagal Update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $naturalResource = NaturalResource::find($id);

        if ($naturalResource->delete()) {
            return back()->with('status', 'Berhasil Hapus data ' . $naturalResource->title);
        } else {
            return back()->with('status', 'Gagal Hapus data ' . $naturalResource->title);
        }
    }
}
