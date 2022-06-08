<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'category_id' =>$this->category->name,
            'name' =>$this->name,
            'description' =>$this->description,
            'price' =>$this->price,
            'quantity' =>$this->quantity,
            'active' =>$this->active,
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at,
        ];
    }
}
