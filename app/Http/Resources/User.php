<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property int $name
 **/

class User extends JsonResource
{
    public function toArray($request){
        return [
            'id'=>$this->id,
            'name'=>$this->name,
        ];
    }
}
