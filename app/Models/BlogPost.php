<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [
        'locale',
        'blog_category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'featured_image',
        'meta_description',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (BlogPost $model): void {
            if (blank($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
            $base = $model->slug;
            $i = 1;
            while (static::query()
                ->where('locale', $model->locale)
                ->where('slug', $model->slug)
                ->when($model->exists, fn ($q) => $q->where('id', '!=', $model->id))
                ->exists()) {
                $model->slug = $base.'-'.$i++;
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public static function createWithLockRetry(array $attributes): static
    {
        $attempts = 6;
        for ($i = 1; $i <= $attempts; $i++) {
            try {
                return static::query()->create($attributes);
            } catch (QueryException $e) {
                if (! static::isMysqlLockOrDeadlock($e) || $i === $attempts) {
                    throw $e;
                }
                usleep(150000 * $i);
            }
        }

        throw new \LogicException('createWithLockRetry');
    }

    public function updateWithLockRetry(array $attributes): bool
    {
        $attempts = 6;
        for ($i = 1; $i <= $attempts; $i++) {
            try {
                return $this->update($attributes);
            } catch (QueryException $e) {
                if (! static::isMysqlLockOrDeadlock($e) || $i === $attempts) {
                    throw $e;
                }
                usleep(150000 * $i);
            }
        }

        throw new \LogicException('updateWithLockRetry');
    }

    protected static function isMysqlLockOrDeadlock(QueryException $e): bool
    {
        $msg = $e->getMessage();

        return str_contains($msg, '1205')
            || str_contains($msg, '1213')
            || str_contains($msg, 'Deadlock');
    }

    public function isPublished(): bool
    {
        return $this->published_at !== null && $this->published_at->isPast();
    }
}
