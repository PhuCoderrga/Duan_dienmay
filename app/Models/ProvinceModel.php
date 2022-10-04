<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceModel extends Model
{
    use HasFactory;
    protected $table = 'province';

    function districts(){
        return $this->hasMany(DistrictModel::class, 'matinhthanh', 'matinhthanh');
    }

}