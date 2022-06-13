<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
