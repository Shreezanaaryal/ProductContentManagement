<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleryimage extends Model
{
    protected $fillable = ['gallery_id','file_name','file_size','file_mame','file_path','created-by'];
    public function gallery()

    {
    	return $this->belongTo('image/gallery');
    }
}
