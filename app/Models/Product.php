<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_ID',
        'name',
        'image',
        'description',
        'price' ,
    ];
//user : admin est accès à la table de la db de category
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
// admin est accès à la table de la db de product
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
