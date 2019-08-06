<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class AlumniController extends Controller
{
    public function show(){
        $extracurriculars = Extracurricular::all();
        return view('progressive.showalumni',compact('extracurriculars') );
    }
}
