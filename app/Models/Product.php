<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sub_category_id',
        'name_uz',
        'name_ru',
        'name_en',
        'desc_uz',
        'desc_ru',
        'desc_en',
        'image',
        'best',
        'madel',
        'price',
    ];   

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function image()
    {
        return $this->hasOne(Images::class, 'product_id');
    }
}
