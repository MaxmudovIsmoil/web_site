<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifi extends Model
{
    use HasFactory;

    protected $fillable = [
        'certifi',
        'image',
    ];
}
