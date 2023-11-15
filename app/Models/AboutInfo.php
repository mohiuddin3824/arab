<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutInfo extends Model
{
    use HasFactory;
    protected $table = 'about_infos';
    protected $fillable = [
        'section_one_title',
        'section_one_desc',
        'section_one_btn_text',
        'section_one_btn_link',
        'section_one_img',
        'vision_title',
        'vision',
        'serve_sec_title',
        'serve_icon_one',
        'serve_title_one',
        'serve_desc_one',
        'serve_icon_two',
        'serve_title_two',
        'serve_desc_two',
        'serve_icon_three',
        'serve_title_three',
        'serve_desc_three',
        'serve_icon_four',
        'serve_title_four',
        'serve_desc_four',
        'activities_title',
        'activities_description',
    ];

    
}
