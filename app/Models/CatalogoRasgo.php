<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CatalogoRasgo extends Model
{
    protected $table = 'catalogo_rasgos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
    ];

    public function personajes(): BelongsToMany
    {
        return $this->belongsToMany(
            personaje::class,
            'personaje_rasgos',
            'rasgo_id',
            'personaje_id'
        )->withTimestamps();
    }
}
