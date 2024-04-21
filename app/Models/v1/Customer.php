<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\v1\Movement;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cpf', 'phone'];
    
    public function movement(): HasMany
    {
        return $this->hasMany(Movement::class);
    }

}
