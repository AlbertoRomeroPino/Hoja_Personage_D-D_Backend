<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CatalogoClase extends Model
{
    protected $table = 'catalogo_clases';

    protected $fillable = [
        'nombre',
        'dado_golpe',
    ];

    public function subclases(): HasMany
    {
        return $this->hasMany(CatalogoSubclase::class, 'clase_id');
    }

    public function personajes(): BelongsToMany
    {
        return $this->belongsToMany(
            personaje::class,
            'clase_personaje',
            'clase_id',
            'personaje_id'
        )->withPivot('nivel', 'subclase_id', 'recursos_clase_maximos', 'recursos_clase_actuales')
         ->withTimestamps();
    }
}
