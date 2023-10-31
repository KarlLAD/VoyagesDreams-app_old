<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Caddie extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',

    ];
         public function product(): HasMany
    {
        return $this->hasMany(Product::class);

    }
     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}