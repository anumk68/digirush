<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeForm extends Model
{
    use HasFactory;
    protected $table = 'home_form';
    protected $fillable = [
        'fname', 
        'email', 
        'city', 
        'number', 
        'services',
        // add any other fields that you want to allow mass assignment
    ];
}
