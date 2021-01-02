<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        // return $admins;

        return view('admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        // return $request;
        // die;
        $admins = new Admin;

        $admins->full_name = $request->name;
        $admins->gender = $request->gender;
        $admins->email = $request->email;
        $admins->username = $request->username;
        $admins->is_active = 1;
        $admins->level = $request->levelAdmin;
        $admins->password = Hash::make('password');
        // $admins->password = Hash::make(Str::random(8));

        $admins->save();
        return redirect('admin')->with('status', 'Tambah Data Admin Berhasil!');
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
    public function edit($id)
    {
        $admin = Admin::find($id);
        // show the edit form and pass the shark
        // return View::make('admin', compact('admin'));
        return response()->json([
            'data' => $admin
        ]);
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
        $admins = Admin::find($request->ed_id_admin);

        $admins->full_name = $request->ed_name_admin;
        $admins->gender = $request->ed_gender_admin;
        $admins->email = $request->ed_email_admin;
        $admins->username = $request->ed_username_admin;
        $admins->level = $request->ed_level_admin;
        if ($request->ed_password_admin != null) {
            $admins->password = Hash::make($request->ed_password_admin);
        }

        if ($admins->save()) {
            return redirect('admin')->with('status', 'Tambah Data Admin Berhasil!');
        } else {
            return redirect('admin')->with('status', 'Tambah Data Admin Gagal!');
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
        //
    }
}
