<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = 'product_images';
    protected $primarykey='id';
    
    protected $fillable= [
        'product_category_id','images','caption'
    ];

    public function Category(){
        return $this->belongsTo('App\Models\ProductCategory','product_category_id',$this->primarykey);
    }
}
