<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderContact extends Model
{
    use HasFactory;
    protected $table = 'header_contacts';
    protected $fillable = [
        'top_mobile_text',
        'top_mobile_no',
        'top_email_text',
        'top_email',
        'top_open_text',
        'top_open_time',
    ];
}
