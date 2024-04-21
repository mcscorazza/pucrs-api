<?php

namespace App\Models\v1;

use App\Models\v1\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MesureUnit extends Model
{
    use HasFactory;

    protected $fillable = ['unit_short','unit_name'];

    public function product(): HasMany
    {
        return $this->hasOne(Product::class);
    }

}
