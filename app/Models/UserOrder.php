<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserOrder  extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
   
    protected $fillable = ['name', 'email', 'address', 'province_id', 'district_id', 'ward_id', 'CCCD', 'loaithe', 'password', 'id_role', 'Exp_year'];
}