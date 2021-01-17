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
            $result = DB::table('services')->where('service_category_id', $cat)->whereMonth('date', $month)->whereYear('date', Date('Y'))->get();
            $data[$cat - 1] = count($result) ?? 0;
        }

        // $labels = (array_values($catService));
        // $service = (array_values($data));
        return ([$data, $category]);
    }
}
