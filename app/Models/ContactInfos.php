<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfos extends Model
{
    use HasFactory;
    protected $table = 'contact_infos';
    protected $fillable = [
        'title',
        'location',
        'email',
        'phone',
        'gmap',
    ];
}
