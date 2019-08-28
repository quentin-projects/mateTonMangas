<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anime extends Model
{
    use SoftDeletes;


    public function editeur()
    {
        return $this->belongsTo('App\Models\Editeur');
    }


    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }


    public function avis()
    {
        return $this->hasMany('App\Models\Avis');
    }

    public function episodes()
    {
        return $this->hasMany('App\Models\Episode');
    }


    public function auteurs()
    {
        return $this->belongsToMany('App\Models\Auteur');
    }

    public function types()
    {
        return $this->belongsToMany('App\Models\Type');
    }

    public function personnages()
    {
        return $this->belongsToMany('App\Models\Personnage');
    }
}
