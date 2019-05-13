<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Album;
use App\Models\Article;
use App\Models\HomeImage;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class MainController extends Controller
{
    public function index(){
        $extracurriculars = Extracurricular::all();
        $slideshow = Home::where('name', 'Slideshow')->first();
        $kepsek = Home::where('name', 'Kepsek')->first();
        $blogs = Article::where('type','berita')->paginate(2);
        $achievements = Article::where('type','prestasi')->paginate(2);  
        $albums = Album::paginate(4);  

        return view('progressive.main',compact('slideshow', 'kepsek', 'blogs', 'extracurriculars', 'albums', 'achievements' ) );
    }
}
