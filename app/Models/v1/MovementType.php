<?php

namespace App\Models\v1;

use App\Models\V1\Movement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MovementType extends Model
{
    use HasFactory;

    protected $fillable = ['move_type_code','move_type_name'];

    public function movement(): HasMany
    {
        return $this->hasMany(Movement::class);
    }

}
