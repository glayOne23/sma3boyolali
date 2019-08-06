<?php

namespace App\Http\Controllers;

use App\Models\RelatedLink;
use Illuminate\Http\Request;

class AdminRelatedLinkController extends Controller
{
    
    public function index()
    {
        $related_links = RelatedLink::all();   
        return view('admin.related_links.index', compact('related_links'));
    }

    
    public function create()
    {
        return view('admin.related_links.create');
    }

    
    public function store(Request $request)
    {
        $errors = $request->validate([
            'title' => 'required|unique:related_links,title',
            'link' => 'required',
            'file' => 'required | mimes:jpeg,jpg,png,svg | max:4096',
        ]);
        
        //change name and save image in public/images/
        $image = $request->file('file');
        $ldate = date('Y-m-d_H:i:s');
        $imageName = $ldate.'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
     
        $related_links = RelatedLink::create([
            'title' => request('title'),
            'link' => request('link'),
            'image' => $imageName,
        ]);

        return redirect('admin/related_links');
    }


    public function show($id)
    {
        //
    }

    
    public function edit(RelatedLink $related_link)
    {
        return view('admin.related_links.edit', compact('related_link'));
    }

    
    public function update(Request $request, RelatedLink $related_link)
    {
        $errors = $request->validate([
            'title' => 'required',
            'link' => 'required',
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
            $image_path = "images/".$related_link->image; 
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            // update image
            $related_link->update([
                'image' => $imageName,
            ]);
        
        }

        $related_link->update([
            'title' => request('title'),
            'link' => request('link'),
        ]);

        return redirect('admin/related_links');
    }

    
    public function destroy(RelatedLink $related_link)
    {
        // delete image
        $image_path = "images/".$related_link->image; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $related_link->delete();
        
        return redirect('admin/related_links');
    }
}
