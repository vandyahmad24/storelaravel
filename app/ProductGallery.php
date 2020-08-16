<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = ['photos','products_id'];

     public function product()
    {
    	return $this->belongsTo(Product::class,'products_id','id');
    }

}
