<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'direction',
        'is_read',
        'conclusion',
        'operator_name'
    ];
}
