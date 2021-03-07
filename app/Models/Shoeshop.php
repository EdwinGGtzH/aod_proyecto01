<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoeshop extends Model
{
    use HasFactory;

    protected $fillable =[
        'category', 'brand', 'model', 'size', 'color', 'price', 'description', 'comment'
    ];
}
