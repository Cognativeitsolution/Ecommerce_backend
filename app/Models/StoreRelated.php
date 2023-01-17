<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreRelated extends Model
{
    use HasFactory;

    protected $table = 'store_related';
    protected $guarded = ['id'];
}
