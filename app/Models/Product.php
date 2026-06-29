<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "user_id",
        "shop_id",
        "name",
        "description",
        "price",
        "old_price",
        "stock",
        "category",
        "image",
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
