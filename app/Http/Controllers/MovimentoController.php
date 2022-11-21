<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Conexão com o model Fin_Movimento
use App\Models\Fin_movimento;

class MovimentoController extends Controller
{
    // Carrega os movimentos do Usuário logado

    public function get_movimentos(){
        $user_id = auth()->user()->id;
        //load registros onde o tipo=receita e user_id=$user_id
        $receitas = Fin_movimento::where('user_id', $user_id)->where('tipo', 'receita')->get();
        $despesas = Fin_movimento::where('user_id', $user_id)->where('tipo', 'despesa')->get(); 

        // carrega a VIEW extrato enviando as variaveois $despesas e $receitas
        return view('extrato', ['receitas'=> $receitas,'despesas'=> $despesas]); 
    }
    
    
    
    
    
    //Método gravar para armazenar o movimento
    public function gravar(Request $request){
        // dd($request);
        // Instancia a tebela fin_movimentos
        // $movimentos representa a tabela e
        // $request representa os campos do formulario
        $movimento = new Fin_movimento;

        $movimento->user_id = auth()->user()->id;
        $movimento->descricao = $request->descricao;
        $movimento->tipo = $request->tipo;
        $movimento->valor = $request->valor;

        $movimento->save();
       
        // Apos gravar os dados , redireciona para rota "extrato"
        return redirect('extrato');
    }
}
