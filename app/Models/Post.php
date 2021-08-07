<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id', 'thumbnail', 'title', 'slug', 'sub_title', 'details', 'post_type', 'is_published'];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }
}
