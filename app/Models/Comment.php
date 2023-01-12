<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function user() {
        return $this->belongsTo(user::class);
    }
    public function movies() {
        return $this->hasMany(movies::class);
    }
}
