<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Album;
use App\Models\Article;
use App\Models\HomeImage;
use App\Models\RelatedLink;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class MainController extends Controller
{
    public function index(){
        $extracurriculars = Extracurricular::all();
        $slideshow = Home::where('name', 'Slideshow')->first();
        $kepsek = Home::where('name', 'Kepsek')->first();
        $blogs = Article::where('type','berita')->latest()->limit(6)->get();
        $achievements = Article::where('type','prestasi')->latest()->limit(6)->get();
        $albums = Album::latest()->limit(2)->get();
        
        $links = RelatedLink::all();  

        return view('interior.main',compact('slideshow', 'kepsek', 'blogs', 'extracurriculars', 'albums', 'achievements','links' ) );
    }
}
