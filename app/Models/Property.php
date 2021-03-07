<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable =[
        'category','state', 'municipality', 'town', 'direction', 'owner', 'contactNumber', 'price', 
        'numberOfRooms', 'numberOfBathrooms', 'comment'
    ];
}
