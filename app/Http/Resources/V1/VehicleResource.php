<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
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
            'plateNumber' => $this->plate_number,
            'brand' => $this->brand,
            'model' => $this->model,
            'year' => $this->year,
            'createdAt' => $this->created_at,
        ];
    }
}
