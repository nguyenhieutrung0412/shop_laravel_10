<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;
    
    // get the product that owns the reviews
    public function product():belongsTo{
        return $this->belongsTo(Product::class);
    }
}
