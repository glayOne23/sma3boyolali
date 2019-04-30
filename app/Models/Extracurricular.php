<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $fillable = ['name', 'content'];

    public function extracurricular_images(){
        return $this->HasMany('App\Models\ExtracurricularImage', 'extracurricular_id', 'id'); 
    }
}
