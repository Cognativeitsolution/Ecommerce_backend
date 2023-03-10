<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

}
