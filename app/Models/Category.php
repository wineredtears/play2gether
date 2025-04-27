<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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
 */
class Category extends BaseModel
{
    //
}
