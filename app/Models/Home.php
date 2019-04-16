<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['name', 'content'];

    public function home_images(){
        return $this->HasMany('App\Models\HomeImage', 'home_id', 'id'); 
    }
}
