<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enum\PostsStatus;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts =[
        'status'=> PostsStatus::class
    ];
}
