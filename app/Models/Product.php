<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function scopeWithCommentsCount(Builder $builder): Builder
    {
        return $builder->withCount([
            'comments' => function ($query) {
                $query->whereNotNull('confirmed_at');
            }
        ]);
    }
}
