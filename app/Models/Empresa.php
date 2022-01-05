<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    /**
     * Get all of the ofertas for the Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertas()
    {
        return $this->hasMany(Oferta::class);
    }
}
