<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_customer',
        'rate_price',
        'creator_user_id'
    ];

    public function lotauctions(): HasMany
    {
        return $this->hasMany(Lotauction::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'create_user_id');
    }

}
