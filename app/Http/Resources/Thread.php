<?php

namespace App\Http\Resources;

use App\Models\Post;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property int $userId
 * @property string $name
 * @property Carbon $createdAt
 *
 * @property Collection|Post[] $posts
 */
class Thread extends JsonResource
{
    public function toArray($request){
        return [
            'id'=>$this->id,
            'userId'=>$this->userId,
            'name'=>$this->name,
            'createdAt'=>$this->createdAt->toISOString(),
            'postCount'=>$this->posts->count(),
        ];
    }
}
