<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $guarded = false;

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_blog_category');
    }
}

