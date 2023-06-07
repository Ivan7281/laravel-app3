<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LotauctionResource extends JsonResource
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
            'name_lot' => $this->whenNotNull($this->name_lot),
            'start_date' => $this->whenNotNull($this->start_date),
            'end_date' => $this->whenNotNull($this->end_date),
            'starting_price' => $this->whenNotNull($this->starting_price),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'rate_id' => $this->rate_id,
            'create_user_id' => $this->create_user_id
        ];
    }
}
