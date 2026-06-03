<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class personaje extends Model
{
    protected $table = 'personajes';

    protected $fillable = [
        'user_id',
        'nombre',
        'alineamiento_id',
        'raza_id',
        'subraza_id',
        'transfondo_id',
        'puntos_experiencia',
        'inspiracion',
        'exitos_muerte',
        'fallos_muerte',
        'pg_maximos',
        'pg_actuales',
        'pg_temporales',
        'clase_armadura',
        'velocidad',
    ];

    // ============ Relaciones BelongsTo ============

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function alineamiento(): BelongsTo
    {
        return $this->belongsTo(catalogo_alineamiento::class, 'alineamiento_id');
    }

    public function raza(): BelongsTo
    {
        return $this->belongsTo(catalogo_raza::class, 'raza_id');
    }

    public function subraza(): BelongsTo
    {
        return $this->belongsTo(CatalogoSubraza::class, 'subraza_id');
    }

    public function transfondo(): BelongsTo
    {
        return $this->belongsTo(catalogo_transfondo::class, 'transfondo_id');
    }

    // ============ Relaciones BelongsToMany ============

    /**
     * Relación: un personaje puede tener múltiples condiciones
     */
    public function condiciones(): BelongsToMany
    {
        return $this->belongsToMany(
            CatalogoCondicion::class,
            'condicion_personaje',
            'personaje_id',
            'condicion_id'
        )->withPivot('turnos_restantes')
         ->withTimestamps();
    }

    /**
     * Relación: un personaje puede tener múltiples clases (multiclase)
     */
    public function clases(): BelongsToMany
    {
        return $this->belongsToMany(
            CatalogoClase::class,
            'clase_personaje',
            'personaje_id',
            'clase_id'
        )->withPivot('nivel', 'subclase_id', 'recursos_clase_maximos', 'recursos_clase_actuales')
         ->withTimestamps();
    }

    /**
     * Relación: un personaje puede tener múltiples rasgos y dotes
     */
    public function rasgos(): BelongsToMany
    {
        return $this->belongsToMany(
            CatalogoRasgo::class,
            'personaje_rasgos',
            'personaje_id',
            'rasgo_id'
        )->withTimestamps();
    }

    /**
     * Relación: un personaje puede hablar múltiples idiomas
     */
    public function idiomas(): BelongsToMany
    {
        return $this->belongsToMany(
            CatalogoIdioma::class,
            'personaje_idiomas',
            'personaje_id',
            'idioma_id'
        )->withTimestamps();
    }

    /**
     * Relación: un personaje puede tener proficiencias en armas, armaduras, herramientas
     */
    public function proficiencias(): BelongsToMany
    {
        return $this->belongsToMany(
            CatalogoProficienciaEquipo::class,
            'proficiencia_personaje',
            'personaje_id',
            'proficiencia_id'
        )->withTimestamps();
    }

    // ============ Relaciones HasMany ============

    /**
     * Relación: un personaje puede tener múltiples espacios de conjuro
     */
    public function espaciosConjuro(): HasMany
    {
        return $this->hasMany(EspacioConjuro::class, 'personaje_id');
    }

    /**
     * Relación: un personaje puede tener múltiples atributos
     */
    public function atributos(): HasMany
    {
        return $this->hasMany(AtributoPersonaje::class, 'personaje_id');
    }

    // ============ Accesores ============

    /**
     * Calcula el nivel total sumando todos los niveles de las clases
     */
    public function getNivelTotalAttribute(): int
    {
        return $this->clases()->sum('nivel') ?? 1;
    }

    /**
     * Verifica si el personaje está inconsciente (0 PG o más fallos de muerte)
     */
    public function getInconscienteAttribute(): bool
    {
        return $this->pg_actuales <= 0 || $this->fallos_muerte >= 3;
    }

    /**
     * Verifica si el personaje está muerto (3 fallos de muerte)
     */
    public function getMuertoAttribute(): bool
    {
        return $this->fallos_muerte >= 3;
    }
}

