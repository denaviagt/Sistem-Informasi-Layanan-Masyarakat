<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\SendPasswordMail;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;
use LogActivity;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->level =  Auth::guard('web')->user()->level;
            $this->id =  Auth::guard('web')->user()->id;
            $this->nama_admin = Auth::guard('web')->user()->full_name;
            if (($this->level != 'superadmin')) {
                return redirect('login')->send();
            }
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
        $admins = Admin::all();

        return view('admin.index', compact('admins'));
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
        $validate = $request->validate(
            [
                'name' => 'required',
                'gender' => 'required',
                'email' => 'required|unique:admins',
                'username' => 'required|unique:admins',
                'levelAdmin' => 'required',

            ],
            [
                'name.required' => 'Nama tidak boleh kosong',
                'gender.required' => 'Jenis kelamin tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'username.unique' => 'Username sudah terdaftar',
                'username.required' => 'Username tidak boleh kosong',
                'levelAdmin.required' => 'Username tidak boleh kosong',
            ]
        );

        // if ($validate) {
        //     return response()->json(['errors' => $validate]);
        // }

        $password = Str::random(8);

        $admins = new Admin;

        $admins->full_name = $request->name;
        $admins->gender = $request->gender;
        $admins->email = $request->email;
        $admins->username = $request->username;
        $admins->is_active = 1;
        $admins->level = $request->levelAdmin;
        $admins->password = Hash::make($password);
        $admins->token = '';
        $admins->remember_token = '';
        // $admins->password = Hash::make(Str::random(8));
        $admins->save();
        // if () {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' membuat admin baru', 'create');
            // addToLog($request, $this->nama_admin . ' membuat admin baru', 'create');
        // }
        $this->sendEmailToAdmin($admins, $password);
        return redirect('admin')->with('status', 'Tambah Data Admin Berhasil!');
    }

    public function resendEmail($id)
    {
        $admins = Admin::find($id);

        $password = Str::random(8);
        $admins->password = Hash::make($password);
        if ($admins->save()) {
            $this->sendEmailToAdmin($admins, $password);
            // addToLog($this->url, $this->ip, $this->nama_admin . ' mengirim ulang email admin dengan email ' . $admins->email, 'update');
            return redirect('admin')->with('status', 'Kirim Ulang Email Admin Berhasil!');
        } else {
            return redirect('admin')->with('status', 'Kirim Ulang Email Admin Gagal!');
        }
    }

    public function sendEmailToAdmin($admins, $password)
    {
        $to_email = $admins->email;
        Mail::to($to_email)->send(new SendPasswordMail($admins, $password));
        return "<p> Your E-mail has been sent successfully. </p>";
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
    public function editPassword()
    {
        return view('admin.edit-password');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {

        Admin::find($this->id)->update(
            [
                'password' => Hash::make($request->get('new_password'))
            ]
        );

        return redirect()->back();
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
        // if ($validate) {
        //     return response()->json(['errors' => $validate]);
        // }
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
            // addToLog($this->url, $this->ip, $this->nama_admin . ' merubah data admin dengan username ' . $admins->username, 'update');
            return redirect('admin')->with('status', 'Ubah Data Admin Berhasil!');
        } else {
            return redirect('admin')->with('status', 'Ubah Data Admin Gagal!');
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

        $admins = Admin::find($id);
        if ($admins->delete()) {
            // addToLog($this->url, $this->ip, $this->nama_admin . ' menghapus data admin dengan username ' . $admins->username, 'delete');
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