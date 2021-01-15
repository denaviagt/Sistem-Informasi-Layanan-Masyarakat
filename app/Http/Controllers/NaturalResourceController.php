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
        $description = $request->summernote;

        $data = [
          'title' => $title,
          'status' => $status,
//          'thumbnail' => $thumbnail,
          'description' => $description,
        ];

        $naturalResource = new NaturalResource();

        if ($naturalResource->insertOrIgnore($data)) return redirect('potensi-desa');
        else return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
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
        return back();
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
