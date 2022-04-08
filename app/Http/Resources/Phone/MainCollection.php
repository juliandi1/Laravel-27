<?php

namespace App\Http\Resources\Phone;

use App\Http\Resources\Phone\MainResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MainCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return MainResource::collection($this->collection);
    }
}
