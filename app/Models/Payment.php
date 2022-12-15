<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = ['order_id','total_price', 'payment_type','person_name', 'age', 'gender', 'city', 'email'];

    
}
