<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUploadArticleContentController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        // $imgpath = $request->file('name')->store('uploads', 'public');

        $image = $request->file('file');
        // $ldate = date('Y-m-d_H:i:s');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('admin/uploads'),$imageName);
        $origin = request()->headers->get('origin');
        $finalImage = $origin.'/admin/uploads/'.$imageName;

        return response()->json(['location' => $finalImage]);
    }
}
