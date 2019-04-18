<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AdminAlbumController extends Controller
{
    
    public function index()
    {
        $albums = Album::all();

        return view('admin.albums.index', compact('albums'));
    }

    
    public function create()
    {
        return view('admin.albums.create');    
    }

    
    public function store(Request $request)
    {
        $errors = $request->validate([
            'name' => 'required',
            'file' => 'required | mimes:jpeg,jpg,png,svg | max:4096',
        ]);
        
        //change name and save image in public/images/
        $image = $request->file('file');
        $ldate = date('Y-m-d_H:i:s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $album = Album::create([
            'name' => request('name'),
            'cover' => $imageName,
        ]);

        return redirect('admin/albums');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('admin.albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('admin.albums.edit', compact('album') );
    }

    
    public function update(Request $request, Album $album)
    {
        $errors = $request->validate([
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
            $image_path = "images/".$album->cover; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image name in database
            $album->update([
                'cover' => $imageName,
            ]);
        }

        $album->update([
            'name' => request('name'),
        ]);  
        
        return redirect('admin/albums');
    }

    
    public function destroy(Album $album)
    {
        // delete all image in that album
        foreach ($album->album_images as $album_image) {
            $image_path = "images/".$album_image->name; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }

        // delete cover image
        $image_path = "images/".$album->cover; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $album->delete();
        
        return redirect('admin/albums');
    }
}
