<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class HistoryController extends Controller
{
    public function show(){
        $extracurriculars = Extracurricular::all();
        $history = Home::where('name', 'Sejarah')->first();
        return view('interior.showhistory',compact('history', 'extracurriculars') );
    }
}
