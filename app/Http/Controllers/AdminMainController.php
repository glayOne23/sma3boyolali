<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeImage;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function index(){
        $home = Home::select('id')->where('name', 'Slideshow')->first();
        $headmaster = Home::where('name', 'Kepsek')->first();
        
        $slideshows = HomeImage::where('home_id', $home->id)->get();
        $kepsek = HomeImage::where('home_id', $headmaster->id)->first();

        return view('admin.index',compact('slideshows', 'kepsek', 'headmaster') );
    }
}
