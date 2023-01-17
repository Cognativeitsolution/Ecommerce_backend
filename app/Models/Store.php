<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

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

    public function meta(){
        return $this->hasOne(MetaStores::class);
    }


    public static function getTableName()
    {
        return with(new static)->getTable();
    }



}
