<?php

namespace App\Http\Resources;

use App\Models\Thread;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * @property string $slug
 * @property int $userId
 * @property int $id
 * @property string $name
 * @property Carbon $createdAt
 * @property Collection|Thread[] $threads
 */

class Category extends JsonResource
{
    public function toArray($request) {
        return [
            'id' => $this -> id,
            'slug' => $this->slug,
            'userId' => $this->userId,
            'name' => $this->name,
            'createdAt' => optional($this->createdAt)->toISOString(),
            'threadCount' => $this->threads->where('isDeleted', false)->count(),
        ];
    }
}
