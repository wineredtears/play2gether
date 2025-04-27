<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property int $userId
 * @property string $name
 * @property string $slug
 * @property string|null $imageUrl
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 * @property boolean $isDeleted
 * @property Carbon|null $deletedAt
 * Relations
 * @property Collection|Thread[] $threads
*/
class Category extends BaseModel
{
    // Relation to threads
    public function threads(): HasMany {
        return $this->hasMany(Thread::class);
    }
}
