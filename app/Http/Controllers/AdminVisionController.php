<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;

class AdminVisionController extends Controller
{
    public function index(){
        $vision_mission = Vision::where('id',1)->first();
        return view('admin.visions.index',compact('vision_mission') );
    }

    public function update(Request $request){

        $vision_mission = Vision::where('id',1)->first();

        $errors = $request->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]);

        $vision_mission->update([
            'vision' => request('vision'),
            'mission' => request('mission'),
        ]);  
        
        return back();
    }
}
