<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $fillable = ['name', 'home_id'];

    public function home(){
        return $this->belongsTo('App\Models\Home', 'home_id', 'id');    
    }
}
