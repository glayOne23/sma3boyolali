<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\AlbumImage;
use Illuminate\Http\Request;

class AdminAlbumImageController extends Controller
{

    public function create(Album $album){
        return view('admin.album_images.create', compact('album'));
    }

    // public function store(AlbumImage $album_images){
    //     dd('store');
    // }

    public function store(Album $album, Request $request)
    {
        // dd($album->name);
        $image = $request->file('file');
        $ldate = date('Y-m-d_H:i:s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $album_image = AlbumImage::create([
            'name' => $imageName,
            'album_id' => $album->id,
        ]);

        return response()->json(['success'=>$imageName]);
    }

    public function destroy(Request $request)
    {
        // dd($request->input('table_records'));    
        foreach ($request->input('table_records') as $value) {
            $this->deleteImage($value);        

            AlbumImage::findOrFail($value)->delete();
        }
        return back();
    }

    
    //helper
    public function deleteImage($id){
        $getImage = AlbumImage::findOrFail($id);
        $imageName = $getImage->name;
        $image_path = "images/".$imageName; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
}
