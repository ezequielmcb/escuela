<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 
class Docente extends Model
{
    use HasFactory;
    public function cursos(): HasMany
    {
        return $this->hasMany(Curso::class, 'id_docente');
    } 
}
 