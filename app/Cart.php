<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function product()
    {
    	return $this->hasOne('App\Product','id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
