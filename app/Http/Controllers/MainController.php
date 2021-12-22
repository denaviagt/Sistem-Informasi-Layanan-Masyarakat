<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Apparatus;
use App\Models\Dusun;
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

class MainController extends Controller
{
    public function index()
    {
        // $mission = Mission::all();
        // $vision = Vision::all();
        // $apparatus = Apparatus::all();
        // $villageInfos = VillageInfo::limit(6)->orderBy('date', 'desc')->where('status', 'published')->get();
        // $naturalResources = NaturalResource::limit(6)->get();
        // $naturalResourceImage = array();
        // foreach ($naturalResources as $key => $value) {
        //     $naturalResourceDate = $naturalResources[$key]->created_at->isoFormat('dddd, D MMMM Y');
        //     $naturalResourceImageTemp = NaturalResourceImage::where('natural_resource_id', $naturalResources[$key]->id)->first();
        //     array_push($naturalResourceImage, $naturalResourceImageTemp);
        // }
        $serviceCategories = ServiceCategory::all();
        // return $naturalResourceImage;

        // return view('main', compact(['villageInfos', 'naturalResources', 'naturalResourceDate', 'naturalResourceImage', 'vision', 'mission', 'apparatus', 'serviceCategories']));
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
}