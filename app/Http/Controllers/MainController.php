<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Apparatus;
use App\Models\Dusun;
use App\Models\Feedback;
use App\Models\Mission;
use App\Models\NaturalResource;
use App\Models\NaturalResourceImage;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProcedure;
use App\Models\ServiceRequirement;
use App\Models\VillageInfo;
use App\Models\Village;
use App\Models\Vision;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class MainController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
       
        return view('front.layanan.index', compact('serviceCategories'));
    }

    public function show($id)
    {
        $service_category = ServiceCategory::find($id);

        return view('front.layanan.show', compact('service_category', 'id'));
    }

    public function create($id)
    {
        $service_category = ServiceCategory::find($id);

        return view('front.layanan.create', compact('service_category', 'id'));
    }

    public function aduan_create()
    {
        $dusun = Dusun::all();

        return view('front.aduan.create', compact('dusun'));
    }

    public function aduan_store(Request $request)
    {
        $faker = Faker::create('id_ID');
        $validate = $request->validate(
            [
                'dusun_id'  => 'required',
                'date'      => 'required',
                'aduan'     => 'required',

            ],
            [
                'dusun_id.required'     => 'Daerah tidak boleh kosong',
                'date.required'         => 'Tanggal tidak boleh kosong',
                'aduan.required'        => 'Aduan tidak boleh kosong',
            ]
        );
        if ($validate) {
            $data = new Feedback();

            $data->is_important = 0;
            if ($request->anonim = 'on') {
                $data->is_anonim = 1;
            }else{
                $data->is_anonim = 0;
            }
            $data->is_read = 0;
            $data->feedback = $request->aduan;
            $data->location = $request->aduan;
            $data->date = $request->date;
            $data->feedback_dusun_id = $request->dusun_id;
            $data->user_id = $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8]);
            $data->save();
            return redirect()->back()->with('success', 'Pelaporan Keluhan Anda Berhasil!');
        }else{
            return redirect()->back()->with('error', 'Pelaporan Keluhan Anda Gagal!');
        }

    }
}