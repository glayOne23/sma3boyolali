<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeImage;
use Illuminate\Http\Request;

class AdminHistoryController extends Controller
{
    public function index()
    {
        $history = Home::where('name', 'Sejarah')->first();

        return view('admin.history.index',compact('history') );
    }

    public function update(Request $request){

        $errors = $request->validate([
            'file' => 'mimes:jpeg,jpg,png,svg | max:4096',
            'content' => 'required',
        ]);
        
        $history = Home::where('name', 'Sejarah')->first();

        if ($request->file('file') != null) {
            //change name and upload new image
            $image = $request->file('file');
            $ldate = date('Y-m-d_H:i:s');
            $imageName = $ldate.'_'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);

            // add image to history
            $home_images = HomeImage::create([
                'name' => $imageName,
                'home_id' => $history->id,
            ]);
        }

        $history->update([
            'content' => request('content'),
        ]);

        return redirect('admin/history');

    }

    public function destroy(HomeImage $history_image){
        
        // delete image
        $image_path = "images/".$history_image->name; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $history_image->delete();
        
        return redirect('admin/history');
    }    
}
