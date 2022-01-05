<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investiga extends Model
{
    use HasFactory;

    /**
     * Get the egresado that owns the Investiga
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function egresado()
    {
        return $this->belongsTo(Egresado::class);
    }
}
