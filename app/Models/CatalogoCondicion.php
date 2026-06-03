<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CatalogoCondicion extends Model
{
    protected $table = 'catalogo_condiciones';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Relación inversa: muchas condiciones pueden aplicarse a muchos personajes.
     */
    public function personajes(): BelongsToMany
    {
        return $this->belongsToMany(
            personaje::class,
            'condicion_personaje',
            'condicion_id',
            'personaje_id'
        )->withPivot('turnos_restantes')
         ->withTimestamps();
    }
}
