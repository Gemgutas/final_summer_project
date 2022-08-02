<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MyHotelBar extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name',
         'type',
        'address'
    ];
}
