<?php

namespace App\Models\V1;

use App\Models\V1\User;
use App\Models\V1\SpedCode;
use App\Models\V1\MesureUnit;
use App\Models\V1\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['code','name', 'image', 'stock', 'value', 'user_id', 'product_type_id', 'mesure_unit_id'];    

    public function code(): BelongsTo {
        return $this->belongsto(SpedCode::class);
    }

    public function unit(): BelongsTo {
        return $this->belongsto(MesureUnit::class);
    }

    public function type(): BelongsTo {
        return $this->belongsto(ProductType::class);
    }

    public function user(): BelongsTo {
        return $this->belongsto(User::class);
    }


}
