<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandwich extends Model
{
    use HasFactory;

    protected $table = 'sandwichdetail';
    protected $fillable = ['sandwich_id','bread','size','extras','veggies','sauces'];
    protected $casts = [
        'extras' => 'array',
        'veggies' => 'array',
        'sauces' => 'array'
    ];
}
