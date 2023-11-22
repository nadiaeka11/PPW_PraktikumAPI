<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $fillable = [
        'title',
        'description',
        'picture',
    ];
}
