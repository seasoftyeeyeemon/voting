<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable=['id','photo','name','address','education','age','activity','phone'];

    public function events(){
        return $this->belongsTo('App\Event');
    }
}
