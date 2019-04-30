<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtracurricularImage extends Model
{
    protected $fillable = ['name', 'extracurricular_id'];

    public function extracurricular(){
        return $this->belongsTo('App\Models\Extracurricular', 'extracurricular_id', 'id');    
    }
}
