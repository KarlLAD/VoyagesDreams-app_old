<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // clé étrangère product
  public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}