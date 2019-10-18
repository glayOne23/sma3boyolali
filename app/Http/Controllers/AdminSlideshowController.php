<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeImage;
use Illuminate\Http\Request;

class AdminSlideshowController extends Controller
{
    
    public function create()
    {
        return view('admin.slideshow.create');
    }

    
    public function store(Request $request)
    {
        $image = $request->file('file');
        $ldate = date('Y-m-d_H_i_s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $home = Home::select('id')->where('name', 'Slideshow')->first();
        $home_image = HomeImage::create([
            'name' => $imageName,
            'home_id' => $home->id,
        ]);

        return response()->json(['success'=>$imageName]);
    }

    public function destroy(Request $request)
    {
        
        foreach ($request->input('table_records') as $value) {
            $this->deleteImage($value);        

            HomeImage::findOrFail($value)->delete();
        }
        return back();
    }

    
    //helper
    public function deleteImage($id){
        $getImage = HomeImage::where('id', $id)->first();
        $imageName = $getImage->name;
        $image_path = "images/".$imageName; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
}
