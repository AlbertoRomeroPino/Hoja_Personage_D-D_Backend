<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatalogoSubclase extends Model
{
    protected $table = 'catalogo_subclases';

    protected $fillable = [
        'clase_id',
        'nombre',
        'descripcion',
    ];

    public function clase(): BelongsTo
    {
        return $this->belongsTo(CatalogoClase::class, 'clase_id');
    }
}
