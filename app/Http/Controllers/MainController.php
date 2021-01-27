<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\NaturalResource;
use App\Models\NaturalResourceImage;
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
        $villageInfos = VillageInfo::limit(6)->get();
        $naturalResources = NaturalResource::limit(6)->get();
        $naturalResourceImage = array();
        foreach ($naturalResources as $key => $value) {
            $naturalResourceDate = $naturalResources[$key]->created_at->isoFormat('dddd, D MMMM Y');
            $naturalResourceImageTemp = NaturalResourceImage::where('natural_resource_id', $naturalResources[$key]->id)->first();
            array_push($naturalResourceImage, $naturalResourceImageTemp);
        }
        // return $naturalResourceImage;

        return view('main', compact(['villageInfos', 'naturalResources', 'naturalResourceDate', 'naturalResourceImage']));
    }
}
