<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avis extends Model
{
    use SoftDeletes;

    public function manga()
    {
        return $this->belongsTo('App\Models\Manga');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function anime()
    {
        return $this->belongsTo('App\Models\Anime');
    }
}
