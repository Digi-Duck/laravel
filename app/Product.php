<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_name', 'price','photo', 'discript', 'product_type_id'];

    public function type() {
        // 一對一關聯取出來的資料，就是單筆資料
        return $this->hasOne('App\ProductType','id','product_type_id');
    }

    public function photos() {
        return $this->hasMany('App\ProductImg','product_id','id');
    }
}
