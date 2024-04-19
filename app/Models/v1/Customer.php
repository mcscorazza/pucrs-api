<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cpf', 'phone'];
    
    public function movement(): HasMany
    {
        return $this->hasMany(Movement::class);
    }

    use App\Models\V1\Movement;
    use Illuminate\Database\Eloquent\Relations\HasMany;
}
