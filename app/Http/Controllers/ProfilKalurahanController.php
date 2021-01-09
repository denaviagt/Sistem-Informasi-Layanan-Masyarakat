<?php

namespace App\Http\Controllers;

use App\Models\Apparatus;
use App\Models\Citizen;
use App\Models\Dusun;
use App\Models\Mission;
use App\Models\Vision;
use Illuminate\Http\Request;

class ProfilKalurahanController extends Controller
{
    public function index()
    {
        $visions = Vision::all();
        $missions = Mission::all();
        $apparatus = Apparatus::all();
        $dusuns = Dusun::all();

        return view('profil-kalurahan', compact(['visions', 'missions', 'apparatus', 'dusuns']));
    }
}