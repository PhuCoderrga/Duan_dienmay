<?php

namespace App\Models; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $fillable = ['name', 'slug', 'price', 'price_discount', 'category_id', 'desc_long', 'desc_short', 'feature_img'];
}