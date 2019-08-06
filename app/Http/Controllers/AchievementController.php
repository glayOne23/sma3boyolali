<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Extracurricular;

class AchievementController extends Controller
{
    public function index(){
        $extracurriculars = Extracurricular::all();
        $achievements = Article::where('type', 'prestasi')->get();
        $news = Article::latest()->limit(4)->get();
        return view('interior.achievements',compact('achievements', 'extracurriculars', 'news') );
    }

    public function show(Article $achievement){
        $extracurriculars = Extracurricular::all();
        $news = Article::latest()->limit(4)->get();
        return view('interior.showachievement',compact('achievement', 'extracurriculars', 'news' ) );
    }
}
