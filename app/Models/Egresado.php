<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Egresado extends Model
{
    use HasFactory; 

    /**
     * Get the user that owns the Egresado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the academicas for the Egresado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function academicas()
    {
        return $this->hasMany(Academica::class);
    }
}
