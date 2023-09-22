<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{

    public function index() 
    {
        $matricula = Matricula::with('asistencia', 'curso', 'alumno')->get(); 
        return $matricula;
    }
  
    public function create(Request $request) 
    { 
        $nuevomatriculas = new Matricula(); 
        $nuevomatriculas->name = $request->name;
        $nuevomatriculas->id_curso = $request->id_curso;
        $nuevomatriculas->id_alumno = $request->id_alumno;
        $nuevomatriculas->save();
        return $nuevomatriculas;

    }

    public function update(Request $request)
    {
        $matriculas = Matricula::find($request->id);
        $matriculas->name = $request->name;
        $matriculas->id_curso = $request->id_curso;
        $matriculas->id_alumno = $request->id_alumno;
        $matriculas->save();
        return $matriculas;

    }

    public function destroy($id)
    {
        $matriculas = Matricula::find($id);
        $matriculas->delete();
        return $matriculas;
    }
}
