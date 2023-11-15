<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeService extends Model
{
    use HasFactory;
    protected $table = 'home_services';
    protected $fillable = [
        'serve_sec_title',
        'serve_icon_one',
        'serve_title_one',
        'serve_desc_one',
        'serve_btn_one_txt',
        'serve_btn_one_link',
        'serve_icon_two',
        'serve_title_two',
        'serve_desc_two',
        'serve_btn_two_txt',
        'serve_btn_two_link',
        'serve_icon_three',
        'serve_title_three',
        'serve_desc_three',
        'serve_btn_three_txt',
        'serve_btn_three_link',
        'serve_icon_four',
        'serve_title_four',
        'serve_desc_four',
        'serve_btn_four_txt',
        'serve_btn_four_link',
    ];
}
