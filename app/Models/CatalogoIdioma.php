<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CatalogoIdioma extends Model
{
    protected $table = 'catalogo_idiomas';

    protected $fillable = [
        'nombre',
    ];

    public function personajes(): BelongsToMany
    {
        return $this->belongsToMany(
            personaje::class,
            'personaje_idiomas',
            'idioma_id',
            'personaje_id'
        )->withTimestamps();
    }
}
