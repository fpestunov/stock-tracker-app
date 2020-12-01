<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function inStock()
    {
        return $this->stock()->where('in_stock', true)->exists();
        // return false;
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
