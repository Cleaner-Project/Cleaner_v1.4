<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'category_id', 'name', 'phone', 'date','email','address','time'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
