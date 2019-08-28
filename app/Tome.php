<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tome extends Model
{
    use SoftDeletes;

    public function manga()
    {
        return $this->belongsTo('App\Models\Manga');
    }
}
