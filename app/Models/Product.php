<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Toko;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'product';

    public function toko()
    {
        return $this->hasOne(Toko::class,'id','toko_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
