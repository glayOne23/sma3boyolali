<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeImage;
use Illuminate\Http\Request;

class AdminHeadmasterController extends Controller
{
    public function update(Request $request)
    {
        $errors = $request->validate([
            'file' => 'mimes:jpeg,jpg,png,svg | max:4096',
        ]);  

        //getting image where home_id = Kepsek
        $headmaster = Home::select('id')->where('name', 'Kepsek')->first();
        $kepsek = HomeImage::where('home_id', $headmaster->id)->first();

        // upload image if updated
        if ($request->file('file') != null) {
            //upload image
            $image = $request->file('file');
            $ldate = date('Y-m-d_H:i:s');
            $imageName = $ldate.'_'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);

            //delete old image
            $image_path = "images/".$kepsek->name; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image name in database
            $kepsek->update([
                'name' => $imageName,
            ]);  
        }
        
        // update home content where name = Kepsek
        $headmaster->update([
            'content' => request('content'),
        ]);


        return back();
    }

}
