<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property int $userId
 * @property int|null $categoryId
 * @property string $name
 * @property boolean $isPrivate
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 * @property boolean $isDeleted
 * @property Carbon|null $deletedAt
 *
 * Relations
 * @property Collection|Post[] $posts
 */
class Thread extends BaseModel
{
    // Relation to Posts
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
