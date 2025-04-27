<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $userId
 * @property int $threadId
 * @property string $content
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 * @property boolean $isDeleted
 * @property Carbon|null $deletedAt
 */

class Post extends BaseModel
{
    //
    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }

}
