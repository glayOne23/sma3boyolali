<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class AlbumController extends Controller
{
    public function index(){

        $extracurriculars = Extracurricular::all();
        $albums = Album::all();
        return view('progressive.albums',compact('albums', 'extracurriculars') );
    }

    public function show(Album $album){
        $extracurriculars = Extracurricular::all();
        return view('progressive.albumimages', compact('album', 'extracurriculars') );
    }
}
