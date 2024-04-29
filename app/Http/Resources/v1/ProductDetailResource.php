<?php

namespace App\Http\Resources\v1;

use App\Models\v1\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailResource extends JsonResource
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
            'code' => Product::findOrFail($this->product_id)->code,
            'name' => Product::findOrFail($this->product_id)->name,
            'description' => $this->description,
            'images' => $this->images_array
        ];
    }
}
