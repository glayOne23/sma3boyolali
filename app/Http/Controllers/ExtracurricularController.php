<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function show(Extracurricular $ekstrakurikuler){
        $extracurriculars = Extracurricular::all();
        return view('interior.showextracurricular',compact('ekstrakurikuler', 'extracurriculars') );
    }
}
