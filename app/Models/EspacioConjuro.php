<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EspacioConjuro extends Model
{
    protected $table = 'espacios_conjuro_personaje';

    protected $fillable = [
        'personaje_id',
        'nivel_conjuro',
        'espacios_maximos',
        'espacios_gastados',
    ];

    public function personaje(): BelongsTo
    {
        return $this->belongsTo(personaje::class, 'personaje_id');
    }

    /**
     * Calcula espacios disponibles
     */
    public function getEspaciosDisponiblesAttribute(): int
    {
        return $this->espacios_maximos - $this->espacios_gastados;
    }
}
