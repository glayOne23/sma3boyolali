<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'cover'];

    public function album_images(){
        return $this->HasMany('App\Models\AlbumImage', 'album_id', 'id'); 
    }
}
