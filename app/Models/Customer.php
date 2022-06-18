<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
