<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Feedback;
use App\Models\User;
use FeedbackSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::orderBy('date', 'desc')->get();
        // return $feedbacks->id;
        // foreach ($feedbacks as $key) {
        //     $feed_val = [Str::limit($key->feedback, 20, '...')];
        // }
        return view('aduan', compact(['feedbacks']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedback::find($id);
        // $id_user = User::where('id', $feedback->user_id)->first();
        // dd($id_user);
        // $full_name = Citizen::where('id', $id_user->citizen_id)->first();

        $full_name = $feedback->user->citizen->full_name;
        $dusun = $feedback->dusun->dusun_name;
        return response()->json([
            'data' => $feedback,
            'full_name' => $full_name,
            'dusun' => $dusun
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function importantUpdate($id, $status)
    {
        $feedback = Feedback::find($id);
        if ($status == 'true') {
            $feedback->is_important = 1;
        } else {
            $feedback->is_important = 0;
        }
        $feedback->save();
    }
    public function readUpdate($id)
    {
        $feedback = Feedback::find($id);
        $feedback->is_read = 1;
        $feedback->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback->delete()) {
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
