<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutController extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['cart_id', 'user_id'];
}