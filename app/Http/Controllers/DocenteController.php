<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{

    public function index()
    { 
        $docentes = new Docente();
        return $docentes->all();
    }
 
    public function create(Request $request)
    {

        $docente = new Docente(); 
        $docente->name = $request->name;
        $docente->last_name = $request->last_name;       
        $docente->email = $request->email;       
        $docente->status = $request->status;
        $docente->save();       
        return $docente;       
    }

    public function show($id)
    {
        $docente = new Docente();
        return $docente->find($id);
    }

    public function update($id, Request $request)
    {
        $docente = Docente::find($id);
        $docente->name = $request->name;
        $docente->last_name = $request->last_name;       
        $docente->email = $request->email;       
        $docente->status = $request->status;
        $docente->save();
        return $docente;
    }
   
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return $docente;
    }
}
