<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BitacoraPartida extends Model
{
    protected $table = 'bitacora_partidas';

    protected $fillable = [
        'partida_id',
        'personaje_id',
        'accion',
        'resultado',
    ];

    public function partida(): BelongsTo
    {
        return $this->belongsTo(Partida::class, 'partida_id');
    }

    public function personaje(): BelongsTo
    {
        return $this->belongsTo(personaje::class, 'personaje_id');
    }
}
