<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\Models\Curso;



class CursoController extends Controller
{
    public function mostrarFormCurso(){
        return view('cad_curso');
    }

    public function cadastroCurso(Request $request){
        //verifica se existe algo na variável nomecategoria
        dd($request);
       $registrosCurso = $request->validate([
        'nomecurso' => 'string|required',
        'cargahoraria' => 'string|required',
        'idcategoria' => 'numeric|required',
        'valor' => 'numeric|required',
    
       ]);
       //dd($regidtrosCursos)
       // Esta linha é que grava o registro no banco.
       Categoria::create($registrosCurso);

       return Redirect::route('index');

    }
}
