<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'tech',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = static::generateUniqueSlug($project->title);
        });

        static::updating(function ($project) {
            if ($project->isDirty('title')) {
                $project->slug = static::generateUniqueSlug($project->title, $project->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $counter = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$counter}";
            $counter++;
        }

        return $slug;
    }
}
