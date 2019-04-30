<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use App\Models\ExtracurricularImage;

class AdminExtracurricularController extends Controller
{
    
    public function index()
    {
        $extracurriculars = Extracurricular::all();
        return view('admin.extracurriculars.index', compact('extracurriculars'));
    }

    
    public function create()
    {
        return view('admin.extracurriculars.create');
    }

    
    public function store(Request $request)
    {
        $errors = $request->validate([
            'name' => 'required|unique:extracurriculars,name',
            'content' => 'required',
            'file' => 'required | mimes:jpeg,jpg,png,svg | max:4096',
        ]);

        //change name and save image in public/images/
        $image = $request->file('file');
        $ldate = date('Y-m-d_H:i:s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $extracurricular = Extracurricular::create([
            'name' => request('name'),
            'content' => request('content'),

        ]);

        $extracurricular_images = ExtracurricularImage::create([
            'name' => $imageName,
            'extracurricular_id' => $extracurricular->id,
        ]);

        

        return redirect('admin/extracurriculars');    
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Extracurricular $extracurricular)
    {
        return view('admin.extracurriculars.edit', compact('extracurricular') );
    }

    
    public function update(Request $request, Extracurricular $extracurricular)
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

            // add image to extra
            $extracurricular_images = ExtracurricularImage::create([
                'name' => $imageName,
                'extracurricular_id' => $extracurricular->id,
            ]);
        }

        $extracurricular->update([
            'name' => request('name'),
            'content' => request('content'),
        ]);

        return redirect('admin/extracurriculars');
    }

    public function destroy(Extracurricular $extracurricular)
    {
        // delete all image in that extracurricular
        foreach ($extracurricular->extracurricular_images as $extracurricular_image) {
            $image_path = "images/".$extracurricular_image->name; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }

        $extracurricular->delete();
        
        return redirect('admin/extracurriculars');
    
    }
}
