<?php

namespace App\Models\v1;

use App\Models\V1\User;
use App\Models\V1\MovementType;
use App\Models\V1\Supplier;
use App\Models\V1\Customer;
use App\Models\V1\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_number','date', 'quantity', 'value', 'user_id', 'movement_type_id', 'product_id', 'supplier_id', 'customer_id'];    

    public function move_type(): BelongsTo {
        return $this->belongsTo(MovementType::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function supplier(): BelongsTo {
        return $this->belongsTo(Supplier::class);
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class);
    }

}
