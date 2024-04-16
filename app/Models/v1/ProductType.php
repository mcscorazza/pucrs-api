<?php

namespace App\Models\V1;

use App\Models\V1\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['type_code', 'type_name'];

    public function product(): HasMany
    {
        return $this->hasOne(Product::class);
    }
}
