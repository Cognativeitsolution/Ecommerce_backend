<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogRelated extends Model
{
    use HasFactory;

    protected $table = 'blog_related';
    protected $guarded = ['id'];
}
