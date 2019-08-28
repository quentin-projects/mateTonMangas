<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    public function mangas()
    {
        return $this->belongsToMany('App\Models\Manga');
    }

    public function animes()
    {
        return $this->belongsToMany('App\Models\Anime');
    }
}
