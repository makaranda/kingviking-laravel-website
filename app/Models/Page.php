<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';
    protected $fillable = [
        'title',
        'description',
        'sub_description',
        'feature_image',
        'slug',
        'seo_keywords',
        'seo_description',
        'order',
        'status',
    ];

    // Relationship: A page has many visitor counts
    public function visitors()
    {
        return $this->hasMany(VisitorsCount::class, 'page_id');
    }
}
