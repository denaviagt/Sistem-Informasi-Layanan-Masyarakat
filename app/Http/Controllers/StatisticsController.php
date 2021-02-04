<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function getCountService($month)
    {
        $data = array();
        $category = array();
        $catService = DB::table('service_categories')->select('category')->get();
        for ($i = 0; $i < 8; $i++) {
            array_push($category, $catService[$i]->category);
        }

        for ($cat = 1; $cat < 9; $cat++) {
            $result = DB::table('services')->whereNull('services.deleted_at')->where('service_category_id', $cat)->whereMonth('date', $month)->whereYear('date', Date('Y'))->get();
            $data[$cat - 1] = count($result) ?? 0;
        }
        return ([$data, $category]);
    }
    public function getCountServiceDusun($month)
    {
        $data = array();
        $dusunArray = array();
        $dusuns = DB::table('dusuns')->select('dusun_name')->get();
        foreach ($dusuns as $key => $value) {
            array_push($dusunArray, $dusuns[$key]->dusun_name);
        }
        foreach ($dusuns as $key => $value) {
            $result = DB::table('services')
                ->whereNull('services.deleted_at')
                ->join('citizens', 'services.citizen_id', 'citizens.id')
                ->where('citizens.dusun_id', $key + 1)
                ->whereMonth('date', $month)->whereYear('date', Date('Y'))
                ->get();
            $data[$key] = count($result) ?? 0;
        }
        return ([$data, $dusunArray]);
    }
    public function getCountFeedbackDusun($month)
    {
        $data = array();
        $dusunArray = array();
        $dusuns = DB::table('dusuns')->select('dusun_name')->get();
        foreach ($dusuns as $key => $value) {
            array_push($dusunArray, $dusuns[$key]->dusun_name);
        }
        foreach ($dusuns as $key => $value) {
            $result = DB::table('feedbacks')
                ->where('feedback_dusun_id', $key + 1)
                ->whereMonth('date', $month)->whereYear('date', Date('Y'))
                ->get();
            $data[$key] = count($result) ?? 0;
        }
        return ([$data, $dusunArray]);
    }
}