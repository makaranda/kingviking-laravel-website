<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    use HasFactory;
    protected $table = 'main_slider';
    protected $fillable = ['banner', 'heading', 'sub_heading', 'switch', 'music_area_switch'];
}
