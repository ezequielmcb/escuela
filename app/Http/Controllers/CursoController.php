<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;

class CursoController extends Controller
{

    public function index()
    {
        $alumnos = new Curso();
        return $alumnos->all(); 
    }

    public function create(Request $request)
    {
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->save();
        return $curso;
    }

    public function show($id)
    {
        $curso = new Curso();
        return $curso->find($id);
    }

    public function update($id, Request $request)
    {
        $curso = Curso::find($id);
        $curso->name = $request->name;
        $curso->save();
        return $curso;      
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return $curso;
    }
}
