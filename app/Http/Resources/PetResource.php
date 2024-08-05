<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->name,
            ],
            'name' => $this->name,
            'photos' => $this->photos->pluck('name'),
            'tags' =>  [
                    'id' => $this->tag->id,
                    'name' => $this->tag->name,
            ],
            'status' => $this->status,
        ];
    }
}
