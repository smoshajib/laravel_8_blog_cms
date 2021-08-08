<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory,HasSlug, SoftDeletes;
    protected $fillable = ['admin_id','title', 'slug', 'sub_title', 'details', 'post_type','featured_image','is_published'];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
