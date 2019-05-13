<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class VisionController extends Controller
{
    public function show(){
        $extracurriculars = Extracurricular::all();
        $vision = Vision::first();

        return view('progressive.vision',compact('extracurriculars', 'vision') );
    }
}
