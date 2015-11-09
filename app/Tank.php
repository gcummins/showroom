<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Tank extends Model
{
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function thumbnail()
    {
        try {
            return $this->photos()->firstOrFail();
        } catch(ModelNotFoundException $e) {
            $photo = \App::make('App\Photo');
            $photo->path = "/images/missing_image.png";
            return $photo;
        }
    }
}
