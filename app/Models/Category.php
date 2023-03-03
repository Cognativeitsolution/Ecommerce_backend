<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'slug',
        'image',
        'popular',
        'status'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->slug = Str::slug($model->title, '-');
        });

        self::updating(function($model){
            $model->slug = Str::slug($model->title, '-');
        });
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

}
