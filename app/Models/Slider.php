<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sliders';
    protected $fillable = [
        'user_id',
        'slider_title',
        'slider_slug',
        'slider_caption',
        'slider_btn_text',
        'slider_btn_link',
        'slider_video_link',
        'slider_photo',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
