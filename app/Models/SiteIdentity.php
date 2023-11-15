<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteIdentity extends Model
{
    use HasFactory;
    protected $table = 'site_identites';
    protected $fillable = [
        'site_name',
        'site_tag_line',
        'site_logo',
        'site_fav',
    ];
}
