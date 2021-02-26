<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Apparatus;
use App\Models\Mission;
use App\Models\NaturalResource;
use App\Models\NaturalResourceImage;
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
        $mission = Mission::all();
        $vision = Vision::all();
        $apparatus = Apparatus::all();
        $villageInfos = VillageInfo::limit(6)->orderBy('date', 'desc')->where('status', 'published')->get();
        $naturalResources = NaturalResource::limit(6)->get();
        $naturalResourceImage = array();
        foreach ($naturalResources as $key => $value) {
            $naturalResourceDate = $naturalResources[$key]->created_at->isoFormat('dddd, D MMMM Y');
            $naturalResourceImageTemp = NaturalResourceImage::where('natural_resource_id', $naturalResources[$key]->id)->first();
            array_push($naturalResourceImage, $naturalResourceImageTemp);
        }
        $serviceCategories = ServiceCategory::all();
        // return $naturalResourceImage;

        return view('main', compact(['villageInfos', 'naturalResources', 'naturalResourceDate', 'naturalResourceImage', 'vision', 'mission', 'apparatus', 'serviceCategories']));
    }
    public function villageInfoDetail($id)
    {
        $villageInfos = VillageInfo::limit(6)->orderBy('date', 'desc')->where('status', 'published')->get();
        $villageInfo = VillageInfo::find($id);
        $admin = Admin::find($villageInfo->admin_id);

        return view('view-info', compact('villageInfo', 'admin', 'villageInfos'));
    }

    public function ServiceInfoDetail($id)
    {
        $procedures = ServiceProcedure::where('service_category_id', $id)->get();
        $requirements = ServiceRequirement::where('service_category_id', $id)->get();
        $serviceCategories = ServiceCategory::all();
        $judul = ServiceCategory::where('id', $id)->first();
        return view('service-info-detail', compact('procedures', 'requirements', 'serviceCategories', 'judul'));
    }
}