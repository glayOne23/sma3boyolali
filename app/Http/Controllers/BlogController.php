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
        $news = Article::latest()->limit(4)->get();
        return view('interior.blogs',compact('blogs', 'extracurriculars', 'news') );
    }

    public function show(Article $blog){
        $extracurriculars = Extracurricular::all();
        $news = Article::latest()->limit(4)->get();
        return view('interior.showblog',compact('blog', 'extracurriculars', 'news' ) );
    }
}
