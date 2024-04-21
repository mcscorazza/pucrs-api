<?php

namespace App\Http\Resources\v1;

use App\Models\V1\Product;
use App\Models\V1\User;
use App\Models\V1\Supplier;
use App\Models\V1\Customer;
use App\Models\V1\MovementType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'invoice'=>$this->invoice_number,
            'date'=>$this->date,
            'quantity'=>$this->quantity,
            'value'=>$this->value,
            'code' => Product::findOrFail($this->product_id)->code,
            'movement_type' => MovementType::findOrFail($this->movement_type_id)->move_type_name,
            'user' => User::findOrFail($this->user_id)->name,
            'supplier' => Supplier::findOrFail($this->supplier_id)->name,
            'customer' => Customer::findOrFail($this->customer_id)->name,
        ];
    }
}
