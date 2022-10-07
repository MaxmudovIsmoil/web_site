<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
    ];

    public function sub_category()
    {
        return $this->hasOne(SubCategory::class, 'category_id');
    }
}
