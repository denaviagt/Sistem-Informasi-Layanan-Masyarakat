<?php

namespace App\Http\Controllers;

use App\Data\Constants\NaturalResourceCons;
use App\Http\Requests\StoreNatureResourceRequest;
use App\Models\NaturalResource;
use App\Models\NaturalResourceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NaturalResourceController extends Controller
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
        $naturalResources = NaturalResource::all();
        foreach ($naturalResources as $key => $value) {
            $date = $naturalResources[$key]->created_at->isoFormat('dddd, D MMMM Y');
        }
        return view('natural-resource.index', compact(['naturalResources', 'date']));
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
        return $request->all();
        $request->validated();

        $title = $request->title;
        $status = $request->status;
        $description = $request->description;

        $data = [
            'title' => $title,
            'status' => $status,
            'images' => $request->images,
            'description' => $description,
        ];

        $naturalResource = new NaturalResource();
        $naturalResource->title = $title;
        $naturalResource->status = $status;
        $naturalResource->description = $description;

        if ($naturalResource->save()) {
            // $naturalResource->refresh();
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $image) {
                    $name = $image->getFilename() . '.' . $image->extension();
                    $uploadDir = public_path() . '/uploads/images/natural_resource';
                    $image->move($uploadDir, $name);

                    $naturalResourceImage = new NaturalResourceImage();
                    $naturalResourceImage->image = $name;
                    $naturalResourceImage->natural_resource_id = $naturalResource->id;
                    $naturalResourceImages[] = $naturalResourceImage;
                }
                $naturalResource->images()->saveMany($naturalResourceImages);
                if ($naturalResource->push()) {
                    addToLog($this->url, $this->ip, $this->nama_admin . ' menambah potensi desa', 'create');
                    return redirect('potensi-desa')->with('status', 'Berhasil tambah data');
                }
            }
        } else {
            return redirect()->back()->with('status', 'Gagal tambah data');
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
        $naturalResource->title = $title;
        $naturalResource->status = $status;
        $naturalResource->description = $description;
        if ($naturalResource->save()) {
            addToLog($this->url, $this->ip, $this->nama_admin . ' mengedit potensi desa dengan judul ' . $naturalResource->title, 'update');
            return redirect('potensi-desa')->with('status', 'Berhasil Update Data');
        } else return redirect()->back()->with('status', 'Gagal Update data');
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
            addToLog($this->url, $this->ip, $this->nama_admin . ' menghapus potensi desa dengan judul ' . $naturalResource->title, 'delete');
            return back()->with('status', 'Berhasil Hapus data ' . $naturalResource->title);
        } else {
            return back()->with('status', 'Gagal Hapus data ' . $naturalResource->title);
        }
    }
}