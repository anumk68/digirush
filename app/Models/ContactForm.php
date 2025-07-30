<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    // Define the table (optional if following Laravel's naming conventions)
    protected $table = 'contact_form_tbl';

    // Specify which fields are mass assignable
    protected $fillable = [
        'firstname', 'lastname', 'mobile_number', 'email', 'services', 'city'
    ];
}
?>
