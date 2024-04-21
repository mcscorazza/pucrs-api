<?php

namespace App\Models\V1;

use App\Models\V1\Movement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cnpj', 'phone', 'email', 'website'];

    public function movement(): HasMany
    {
        return $this->hasMany(Movement::class);
    }
}
