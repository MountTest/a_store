<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'desc', 'price', 'image', 'availability', 'category_id', 'type_id'];

    public function categroy() {
        return $this->belongsTo(Category::class);
    }

}
