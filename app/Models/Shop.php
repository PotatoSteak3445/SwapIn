<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    // These are the columns that can be filled via a form
    protected $fillable = [
        "user_id",
        "shop_name",
        "shop_domain",
        "phone_number",
        "email",
        "address",
        "bank_name",
        "bank_account",
    ];

    // Link it back to the User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
