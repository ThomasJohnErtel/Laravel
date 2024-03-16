<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        //Categoria::all();
        return view('categoria.index')->with('categorias', Categoria::all());
    }

    public function edit(Categoria $categoria){
        return view('categoria.edit')->with('categoria', $categoria);
    }

    public function update(Request $request, Categoria $categoria){
        $categoria->CATEGORIA_NOME = $request->CATEGORIA_NOME;
        $categoria->CATEGORIA_DESC = $request->CATEGORIA_DESC;
        $categoria->save();

        return redirect(route('categoria.index'));
    }

    public function create(){
        return view('categoria.create');
    }

    public function insert(Request $request){
        Categoria::create([
            'CATEGORIA_NOME' => $request->CATEGORIA_NOME,
            'CATEGORIA_DESC' => $request->CATEGORIA_DESC,
            'CATEGORIA_ATIVO' => 1
        ]);
        return redirect(route('categoria.index'));
    }
}
