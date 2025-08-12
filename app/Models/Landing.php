<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $table = 'landingtable';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'form_type',
    ];
}
