<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    
    public function index()
    {
        $blogs = Article::where('type','berita')->get();   
        return view('admin.blogs.index', compact('blogs'));
    }
    
    public function create()
    {
        return view('admin.blogs.create(tiny)');
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
        $ldate = date('Y-m-d_H_i_s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $article = Article::create([
            'title' => request('title'),
            'content' => request('content'),
            'type' => request('type'),
            'photo' => $imageName,
        ]);

        return redirect('admin/blogs');    
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Article $blog)
    {
        return view('admin.blogs.edit(tiny)', compact('blog'));
    }

    
    public function update(Request $request, Article $blog)
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
            $ldate = date('Y-m-d_H_i_s');
            $imageName = $ldate.'_'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);

            //delete old image
            $image_path = "images/".$blog->photo; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image
            $blog->update([
                'photo' => $imageName,
            ]);
        
        }

        $blog->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('admin/blogs');
    }

    
    public function destroy(Article $blog)
    {
        // delete cover image
        $image_path = "images/".$blog->photo; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $blog->delete();
        
        return redirect('admin/blogs');
    }
}
