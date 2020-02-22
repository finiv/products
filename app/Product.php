<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'full_description',
        'price',
        'balance',
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class, 'products_categories');
    }

    public function scopeOrderProducts()
    {
        return User::orderBy('id','DESC')->paginate(5);
    }
}
