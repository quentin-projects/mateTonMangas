<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use SoftDeletes;

    public function anime()
    {
        return $this->belongsTo('App\Models\Anime');
    }
}
