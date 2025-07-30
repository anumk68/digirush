<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireDeveloper extends Model
{
    use HasFactory;
    protected $table = 'hire_developers';

    // protected $fillable = ['fname', 'email', 'city', 'mobile_number', 'url', 'city_name','services'];
    protected $guarded = [];
}
