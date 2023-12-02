<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Обратная связь один ко многим (От FK к PK)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
