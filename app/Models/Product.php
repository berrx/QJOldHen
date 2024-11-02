<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'description',
        'bigimg_url',
        'smlimg_url',
        'status',
        'price'
    ];
    protected $casts = [
        'status' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 与商品SKU关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }
}
