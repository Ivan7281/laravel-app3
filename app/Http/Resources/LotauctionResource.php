<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LotauctionResource extends JsonResource
{
    public static $wrap = 'lot';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name_lot' => $this->name_lot,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'starting_price' => $this->starting_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'rate_id' => $this->rate_id,
            'create_user_id' => $this->create_user_id
        ];
    }
}
