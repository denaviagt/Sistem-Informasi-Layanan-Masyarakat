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
        $catService = ServiceCategory::all();

        foreach ($catService as $key => $value) {
            $result = DB::table('services')->where('service_category_id', $value)->whereMonth('date', $month)->whereYear('date', Date('Y'))->get();
            $data[$catService[$value]] = count($result) ?? 0;
        }

        $labels = (array_keys($data));
        $service = (array_values($data));
        return ([$labels, $service]);
    }
}
