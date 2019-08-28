<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Editeur extends Model
{
    use SoftDeletes;

    public function mangas()
    {
        return $this->hasMany('App\Models\Manga');
    }

    public function animes()
    {
        return $this->hasMany('App\Models\Anime');
    }
}
