<?php

namespace App\Http\Resources\v1;

use App\Models\v1\ProductType;
use App\Models\v1\User;
use App\Models\v1\MesureUnit;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'code'=> $this->code,
            'name'=> $this->name,
            'stock' => $this->stock,
            'value' => $this->value,
            'user' => User::findOrFail($this->user_id)->name,
            'type' => ProductType::findOrFail($this->product_type_id)->type_name,
            'unit' => MesureUnit::findOrFail($this->mesure_unit_id)->unit_name
        ];
    }
}
