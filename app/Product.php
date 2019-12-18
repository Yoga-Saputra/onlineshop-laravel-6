<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['picture', 'name', 'stock', 'harga', 'keterangan'];
    
    public function category()
	{
		return $this->belongsTo('App\Category');
	}

	
}
