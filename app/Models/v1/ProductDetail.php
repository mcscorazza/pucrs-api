<?php

namespace App\Models\V1;

use App\Models\V1\Product;
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
