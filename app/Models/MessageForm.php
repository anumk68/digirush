<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageForm extends Model
{
    // Specify the table name if it's different from the pluralized version of the model name
    protected $table = 'message_form';

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'phone',
        'email',
        'service',
        'city',
        'city_name'
    ];
}
?>
