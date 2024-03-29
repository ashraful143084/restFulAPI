<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
class Product extends Model
{

	protected $fillable = [
		'product_name',
		'details',
		'price',
		'stock',
		'discount'
	];

    public function reviews(){
    	return $this->hasMany(Review::class);
    }
}
