<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoCompany extends Model
{
    use HasFactory;
    protected $table = 'seo_company';

    protected $fillable = ['fname', 'email', 'city', 'mobile_number', 'url', 'city_name'];
}
