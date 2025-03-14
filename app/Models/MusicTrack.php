<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicTrack extends Model
{
    use HasFactory;
    protected $table = 'music_tracks';
    protected $fillable = ['track_code','title', 'sub_title','description','track', 'track_image', 'type','price','qty','order', 'status'];
}
