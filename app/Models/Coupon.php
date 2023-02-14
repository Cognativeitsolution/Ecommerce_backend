<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function scopeActive($query){
        return $query->where('expire_date', '>=', \Carbon\Carbon::today()->toDateString() );
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function getDeal(){
        $this->where('coupons.store_id', 10)->count();
    }

}
