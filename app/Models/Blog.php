<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasUuids;

    protected static function booted()
    {
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });

        static::updating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });

        static::saving(function ($blog) {
            if (empty($blog->excerpt)) {
                $excerpt = null;

                if (is_array($blog->body)) {
                    foreach ($blog->body as $block) {
                        if ($block['type'] === 'paragraph' && !empty($block['data']['text'])) {
                            $excerpt = $block['data']['text'];
                            break;
                        }
                    }
                }

                if (is_string($blog->body)) {
                    $excerpt = strip_tags($blog->body);
                }

                if ($excerpt) {
                    $blog->excerpt = Str::limit($excerpt, 200);
                }
            }
        });
    }

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'thumbnail',
        'user_id',
        'published_at',
        'status',
        'tags',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags' => 'array',
        'body' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
