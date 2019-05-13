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
        return view('progressive.achievements',compact('achievements', 'extracurriculars') );
    }

    public function show(Article $achievement){
        $extracurriculars = Extracurricular::all();
        return view('progressive.showachievement',compact('achievement', 'extracurriculars' ) );
    }
}
