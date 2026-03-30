<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'seo_title',
        'slug',
        'excerpt',
        'content',
        'author_name',
        'author_email',
        'featured_image',
        'meta_keywords',
        'meta_description',
        'status',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'meta_keywords' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::saving(function ($blog) {
            // Keep legacy flag in sync with status.
            if (!empty($blog->status)) {
                if ($blog->status === 'publish') {
                    $blog->is_published = true;
                    $blog->published_at = $blog->published_at ?: now();
                } else {
                    $blog->is_published = false;
                    $blog->published_at = null;
                }
            } elseif ($blog->isDirty('is_published')) {
                $blog->status = $blog->is_published ? 'publish' : 'draft';
            }
        });

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title') && empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'publish')
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_blog_category');
    }
}
