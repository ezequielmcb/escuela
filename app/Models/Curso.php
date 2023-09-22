<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model 
{
    use HasFactory;
    public function docente(): BelongsTo
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }
 
    public function matricula(): HasMany
    {
        return $this->hasMany(Matricula::class, 'id_curso');
    }
}
 