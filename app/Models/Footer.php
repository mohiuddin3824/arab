<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'footer_widget_one_title',
        'footer_logo',
        'footer_about_desc',
        'footer_widget_two_title',
        'footer_important_link1_text',
        'footer_important_link1',
        'footer_important_link2_text',
        'footer_important_link2',
        'footer_important_link3_text',
        'footer_important_link3',
        'footer_important_link4_text',
        'footer_important_link4',
        'footer_important_link5_text',
        'footer_important_link5',
        'footer_widget_three_title',
        'footer_address',
        'footer_phone',
        'footer_email',
    ];
}
