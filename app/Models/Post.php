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
    protected $fillable = ['admin_id','title', 'slug', 'excerpt', 'content', 'post_type', 'is_published'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }

    public function post_metas()
    {
        return $this->hasMany(Category::class);
    }
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
