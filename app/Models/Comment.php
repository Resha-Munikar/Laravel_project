<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $primaryKey = 'id';
    protected $fillable = [
        'content',
        'user_id',
        'slug',
    ];

    protected $casts = [
        'content' => 'string',
        'user_id' => 'integer',
    ];

    protected $hidden=[
        'user_id',
    ];
}

