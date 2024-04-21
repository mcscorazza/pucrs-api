<?php

namespace App\Models\v1;

use App\Models\v1\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','description', 'images_array', 'volume'];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
