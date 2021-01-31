<?php

namespace App\Http\Controllers;

use App\Models\VillageInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VillageInfoController extends Controller
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
        $infoDesa = VillageInfo::all();
        foreach ($infoDesa as $key => $value) {
            $date = $infoDesa[$key]->date->isoFormat('dddd, D MMMM Y');
        }

        return view('village-info/index', compact(['infoDesa', 'date']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('village-info/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'summernote' => 'required',
            'status' => 'required'
        ]);
        $thumbName = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
        $request->thumbnail->move(public_path('uploads/images/village_info'), $thumbName);

        $infoDesaAdd = new VillageInfo;

        $infoDesaAdd->title = $request->title;
        $infoDesaAdd->content = $request->summernote;
        $infoDesaAdd->thumbnail = $thumbName;
        $infoDesaAdd->date = now();
        $infoDesaAdd->status = $request->status;
        $infoDesaAdd->admin_id = $request->admin_id;

        if ($infoDesaAdd->save()) {
            addToLog($this->url, $this->ip, $this->nama_admin . ' menambah data info kalurahan', 'create');
            return redirect('info-desa')->with('status', 'Tambah Data Info Desa Berhasil!');
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
        $infoDesaDetail = VillageInfo::where('id', $id)->first();
        return view('village-info/detail', compact('infoDesaDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infoDesaDetail = VillageInfo::where('id', $id)->first();
        return view('village-info/edit', compact('infoDesaDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'summernote' => 'required',
            'status' => 'required'
        ]);
        if ($request->thumbnail != null) {
            $thumbName = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
            $request->thumbnail->move(public_path('uploads/images/village_info'), $thumbName);
        }

        $infoDesaAdd = VillageInfo::find($request->id);

        $infoDesaAdd->title = $request->title;
        $infoDesaAdd->content = $request->summernote;
        if ($request->thumbnail != null) {
            $infoDesaAdd->thumbnail = $thumbName;
        }
        $infoDesaAdd->date = now();
        $infoDesaAdd->status = $request->status;
        $infoDesaAdd->admin_id = $request->admin_id;

        // $title = Str::substr($infoDesaAdd->title, 0, 15);

        if ($infoDesaAdd->save()) {
            addToLog($this->url, $this->ip, $this->nama_admin . ' mengubah data info kalurahan ' . $infoDesaAdd->title, 'update');
            return redirect('info-desa')->with('status', 'Ubah Data Info Desa Berhasil!');
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
        $infoDesa = VillageInfo::find($id);
        // $infoDesa->delete();
        if ($infoDesa->delete()) {
            addToLog($this->url, $this->ip, $this->nama_admin . ' menghapus data info kalurahan ' . $infoDesa->title, 'delete');
            return response()->json([
                'status' => true
            ]);
            return redirect('info-desa')->with('status', 'Hapus Data Info Desa Berhasil!');
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }
}
