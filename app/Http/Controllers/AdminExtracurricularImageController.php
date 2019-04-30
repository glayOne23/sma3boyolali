<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtracurricularImage;

class AdminExtracurricularImageController extends Controller
{
    public function destroy($extracurricular,ExtracurricularImage $extracurricular_image){

        // delete cover image
        $image_path = "images/".$extracurricular_image->name; 
        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $extracurricular_image->delete();
        
        return redirect('admin/extracurriculars/'.$extracurricular.'/edit');
    }
}
