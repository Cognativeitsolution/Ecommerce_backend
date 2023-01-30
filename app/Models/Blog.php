<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
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

//    public function scopeRecent($query){
//        return $query->where('created_at', '', \Carbon\Carbon::now()->subDays(2) );
//    }

    public function meta(){
        return $this->hasOne(BlogMetas::class);
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->as('tags');
    }

    public function comments(){
        return $this->hasMany(Comment::class)->where('status', 1);
    }

}
