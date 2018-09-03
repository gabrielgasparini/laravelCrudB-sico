<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'titulo', 'texto',
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
