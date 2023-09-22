<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asistencia extends Model 
{
    use HasFactory;
    public function matricula(): BelongsTo
    {
        return $this->belongsTo(Matricula::class, 'id_matricula');
    } 
}
 