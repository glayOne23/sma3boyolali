<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class BlogController extends Controller
{
    
    public function index(){
        $extracurriculars = Extracurricular::all();
        $blogs = Article::where('type', 'berita')->get();
        return view('progressive.blogs',compact('blogs', 'extracurriculars') );
    }

    public function show(Article $blog){
        $extracurriculars = Extracurricular::all();
        return view('progressive.showblog',compact('blog', 'extracurriculars' ) );
    }
}
