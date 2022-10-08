<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin \Eloquent
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','slug','content'];
}
