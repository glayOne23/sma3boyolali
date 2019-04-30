<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminAchievementController extends Controller
{
    
    public function index()
    {
        $achievements = Article::where('type','prestasi')->get();   
        return view('admin.achievements.index', compact('achievements'));
    }

    
    public function create()
    {
        return view('admin.achievements.create');
    }

    
    public function store(Request $request)
    {
        $errors = $request->validate([
            'title' => 'required|unique:articles,title',
            'content' => 'required',
            'file' => 'required | mimes:jpeg,jpg,png,svg | max:4096',
        ]);
        
        //change name and save image in public/images/
        $image = $request->file('file');
        $ldate = date('Y-m-d_H:i:s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $article = Article::create([
            'title' => request('title'),
            'content' => request('content'),
            'type' => request('type'),
            'photo' => $imageName,
        ]);

        return redirect('admin/achievements');    
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Article $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    
    public function update(Request $request, Article $achievement)
    {
        $errors = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'file' => 'mimes:jpeg,jpg,png,svg | max:4096',
        ]);

        // upload image if updated
        if ($request->file('file') != null) {
            //change name and upload new image
            $image = $request->file('file');
            $ldate = date('Y-m-d_H:i:s');
            $imageName = $ldate.'_'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);

            //delete old image
            $image_path = "images/".$achievement->photo; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image
            $achievement->update([
                'photo' => $imageName,
            ]);
        
        }

        $achievement->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('admin/achievements');
    }

    
    public function destroy(Article $achievement)
    {
        // delete cover image
        $image_path = "images/".$achievement->photo; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $achievement->delete();
        
        return redirect('admin/achievements');
    }
}
