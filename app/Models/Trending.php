<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
    use HasFactory;
    protected $fillable = [
        'trending_name',
        'link',
        'status',
    ];
}
