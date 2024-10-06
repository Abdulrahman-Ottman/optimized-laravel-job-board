<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Scalar\String_;

class Job extends Model
{
    use HasFactory;

    public function employer() : BelongsTo {
        return $this->belongsTo(Employer::class);
    }

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate([
            'name' => $name,
        ]);

        $this->tags()->attach($tag);
    }

    public function tags()  : BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
