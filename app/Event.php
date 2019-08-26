<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date'
      ];

      public function competitions(){
        return $this->hasMany('App\Competition');
      }
}
