<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencia = new Asistencia();
        return $asistencia->all();
    }

    public function create(Request $request)
    {
        $nuevoasistencias = new Asistencia(); 
        $nuevoasistencias->asistencia = $request->asistencia;
        $nuevoasistencias->id_matricula = $request->id_matricula;
        $nuevoasistencias->save();
        return $nuevoasistencias;
    }

    public function update(Request $request)
    {
        $asistencias = Asistencia::find($request->id);
        $asistencias->asistencia = $request->asistencia;
        $asistencias->id_matricula = $request->id_matricula;
        $asistencias->save();
    }

    public function destroy($id)
    {
        $alumno = Asistencia::find($id);
        $alumno->delete();
        return $alumno;
    }
}



