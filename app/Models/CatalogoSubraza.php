<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatalogoSubraza extends Model
{
    protected $table = 'catalogo_subrazas';

    protected $fillable = [
        'raza_id',
        'nombre',
        'descripcion',
    ];

    public function raza(): BelongsTo
    {
        return $this->belongsTo(catalogo_raza::class, 'raza_id');
    }
}
