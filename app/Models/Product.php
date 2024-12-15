<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
        protected $fillable = [
        'category_ID',
        'name',
        'image',
        'description',
        'price',


    ];
    use HasFactory;

//user : admin a l'accès à la table de la db de category




    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_ID');
    }
// admin a l'accès à la table de la db de product
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}