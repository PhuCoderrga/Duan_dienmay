<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class BillDetail extends Model
{
    use HasFactory;
    protected $table = 'bill_details';

    public function bill()
    {
        return $this->hasOne(Bill::class, 'id', 'bill_id');
    }
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}