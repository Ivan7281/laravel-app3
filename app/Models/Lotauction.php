<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lotauction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_lot',
        'start_date',
        'end_date',
        'starting_price',
        'rate_id'
    ];

    public function rates(): BelongsTo
    {
        return $this->belongsTo(Rate::class);
    }

}
