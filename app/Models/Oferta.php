<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    /**
     * Get the empresa that owns the Oferta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }    


    /**
     * The ofertasEgresados that belong to the Oferta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ofertasEgresados()
    {
        return $this->belongsToMany(Egresado::class);
    }
}
