<?php

namespace App\Models\v1;

use App\Models\v1\User;
use App\Models\v1\SpedCode;
use App\Models\v1\MesureUnit;
use App\Models\v1\ProductType;
use App\Models\v1\ProductDetail;
use App\Models\v1\Movement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function detail(): HasOne {
        return $this->hasOne(ProductDetail::class);
    }

    public function movement(): HasMany {
        return $this->hasMany(Movement::class);
    }


}
