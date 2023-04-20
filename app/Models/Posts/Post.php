<?php

namespace App\Models\Posts;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
