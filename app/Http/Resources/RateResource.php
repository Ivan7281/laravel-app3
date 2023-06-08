<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RateResource extends JsonResource
{
    public static $wrap = 'rate';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name_customer' => $this->name_customer,
            'rate_price' => $this->rate_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator_user_id' => $this->creator_user_id
        ];
    }
}
