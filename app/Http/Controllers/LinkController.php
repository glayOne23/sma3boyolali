<?php

namespace App\Http\Controllers;

use App\Models\RelatedLink;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class LinkController extends Controller
{
    public function show(){
        $extracurriculars = Extracurricular::all();
        $links = RelatedLink::all();
        return view('progressive.showlink',compact('extracurriculars','links') );
    }
}
