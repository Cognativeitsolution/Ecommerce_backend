<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function Blogs()
    {
        return $this->belongsToMany(Blog::class);
    }

}
