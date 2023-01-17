<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->slug = Str::slug($model->name, '-');
        });

        self::updating(function($model){
            $model->slug = Str::slug($model->name, '-');
        });
    }

    public function meta(){
        return $this->hasOne(PageMetas::class);
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

}
