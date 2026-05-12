<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    protected $fillable = [
        'locale',
        'name',
        'slug',
        'sort_order',
        'style_key',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::saving(function (BlogCategory $model): void {
            if (blank($model->slug)) {
                $model->slug = Str::slug($model->name);
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

    public function posts(): HasMany
    {
        return $this->hasMany(BlogPost::class);
    }
}
