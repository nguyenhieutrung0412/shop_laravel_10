<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model\Relations\HasMany;




class Product extends Model
{
    use HasFactory;

    // get the category thay owns the Product
    public function category(){
        return $this->belongsTo(Category::class,'cate_id','id');
    }

    //get the reviews for the product
    public function review() :HasMany{
        return $this->hasMany(Review::class);
    }

}
