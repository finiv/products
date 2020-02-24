<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function product()
    {
        return $this->hasMany(Product::class, 'products_categories');
    }
    
    function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
