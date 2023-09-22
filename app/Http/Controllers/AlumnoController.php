<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{ 
 
    public function index()
    {
        $alumnos = new Alumno();
        return $alumnos->all(); 
    }


    public function create(Request $request)
    {
        $alumno = new Alumno();
        $alumno->name = $request->name;
        $alumno->last_name = $request->last_name;
        $alumno->status = $request->status;
        $alumno->save();
        return $alumno;
    }

    public function show($id)
    {
        $alumno = new Alumno();
        return $alumno->find($id);
    }

    public function update($id, Request $request)
    {
        $alumno = Alumno::find($id);
        $alumno->name = $request->name;
        $alumno->last_name = $request->last_name;
        $alumno->status = $request->status;
        $alumno->save();
        return $alumno;
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return $alumno;
    }
} 
