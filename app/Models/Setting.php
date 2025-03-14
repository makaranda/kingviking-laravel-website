<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'main_logo', 'fevicon_logo', 'contact_number', 'email_address', 
        'address', 'google_map', 'social_facebook', 'social_twitter', 
        'social_youtube', 'social_instagram', 'footer_content'
    ];
}
