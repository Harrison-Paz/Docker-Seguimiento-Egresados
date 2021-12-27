<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academica extends Model
{
    use HasFactory;

    /**
     * Get the egresado that owns the Academica
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function egresado()
    {
        return $this->belongsTo(Egresado::class);
    }
}
