<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinanceMoviment;

class FinanceMovimentsController extends Controller
{

    // CONJUNTO DE FUNÇÕES BASICAS QUE DEFINEM UM C.R.U.D. (CREATE, READ, UPDATE, DELETE)
    

    // FUNÇÃO QUE LISTA TODOS OS REGISTROS
    public function index()
    {
        //Invocando a função all() do model FinanceMoviment
        $result = FinanceMoviment::all();

        //Responde com JSON com os resultados da função
        return response()->json($result);
    }


    // FUNÇÃO QUE CRIA UM NOVO REGISTRO
    public function store(Request $request)
    {
        $result = FinanceMoviment::create($request->all());
        return response()->json(['id' => $result->id], 201);
    }


    // FUNÇÃO QUE RETORNA UM REGISTRO ESPECIFICO
    public function show($id)
    {
        $result = FinanceMoviment::find($id);

        // VERIFICA SE O REGISTRO EXISTE
        if (!$result) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        return response()->json($result);
    }


    // FUNÇÃO QUE ATUALIZA UM REGISTRO ESPECIFICO
    public function update(Request $request, $id)
    {
        //USO A FUNCAO SHOW() DESTA CONTROLLER PARA VERIFICAR SE O ID EXISTE
        $seExiste = $this->show($id);
        if (!$seExiste) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $result = FinanceMoviment::find($id)->update($request->all());
        return response()->json($result);
    }


    // FUNÇÃO QUE DELETA UM REGISTRO ESPECIFICO
    public function destroy($id)
    {
        $result = FinanceMoviment::find($id)->delete();
        return response()->json($result);
    }


    // FUNÇÃO QUE RETORNA TODOS OS REGISTROS COM UMA CONDIÇÃO ESPECIFICA
    public function getMovimentsCredito()
    {
        //
        $result = FinanceMoviment::where('movimento', 1)->get();
        return response()->json($result);
    }


    // FUNCAO QUE MOSTRE O VALOR DE UMA UNICA OPERACAO
    // FUNCAO QUE SOME TODOS OS VALORES DE OPERACOES QUE SEJAM DE CREDITO
        
}
