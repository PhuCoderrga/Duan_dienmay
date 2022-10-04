<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictModel extends Model
{
    use HasFactory;
    protected $table = 'district';

    function wards(){
        return $this->hasMany(WardModel::class, 'maquanhuyen', 'maquanhuyen');
    }
}