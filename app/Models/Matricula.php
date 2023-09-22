<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
class Matricula extends Model
{
    use HasFactory;
    public function asistencia(): HasMany
    {
        return $this->hasMany(Asistencia::class, 'id_matricula');
    }

    public function curso(): BelongsTo 
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class, 'id_alumno');
    }
}
 