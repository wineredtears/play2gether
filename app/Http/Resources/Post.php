<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $userId
 * @property string $content
 * @property Carbon $createdAt
 */


class Post extends JsonResource
{
    public function toArray($request){
        return [
            'id'=>$this->id,
            'userId'=>$this->userId,
            'content'=>$this->content,
            'createdAt'=>$this->createdAt->toISOString(),
        ];
    }
}
