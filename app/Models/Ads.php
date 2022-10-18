<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class Ads extends Model
{
    use HasFactory;
    protected $table = 'ads';
    protected $primaryKey = 'id';

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
