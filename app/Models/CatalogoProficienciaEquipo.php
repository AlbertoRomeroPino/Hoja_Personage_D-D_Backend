<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CatalogoProficienciaEquipo extends Model
{
    protected $table = 'catalogo_proficiencias_equipo';

    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
    ];

    public function personajes(): BelongsToMany
    {
        return $this->belongsToMany(
            personaje::class,
            'proficiencia_personaje',
            'proficiencia_id',
            'personaje_id'
        )->withTimestamps();
    }
}
