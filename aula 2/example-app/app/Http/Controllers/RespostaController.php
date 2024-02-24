<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespostaController extends Controller
{
    function receba(Request $request){
        return view('resposta')->with([
            'Nome' => $request->Nome,
            'Idade' => $request->Idade,
        ]);
    }
}
