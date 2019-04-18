<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumImage extends Model
{
    protected $fillable = ['name', 'album_id'];

    public function album(){
        return $this->belongsTo('App\Models\Album', 'album_id', 'id');    
    }
}
