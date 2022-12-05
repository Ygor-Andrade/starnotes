<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anotacao;

class Anotacaos_controller extends Controller
{
    public function gravar(Request $request)
    {
        $anotacao = new Anotacao;

        $user = auth()->user();
        $anotacao->id_user= $user->id;
        $anotacao->titulo  = $request->titulo;
        $anotacao->nota = $request->nota;

        $anotacao->save();
        return redirect('principal');
    }


    public function get_notas(){
        $user_id = auth()->user()->id;
        //Load registros onde o tipo=receita e user_id=$user_id
       
        $nota = Anotacao::where('user_id', $user_id)->where('tipo', 'nota')->get();
        $totNota = $nota->sum('nota');
        
        
    
        // $totDespesas = $despesas->sum('valor');

        $parametros = [
            'totNota' => $totNota, 
            'nota' => $nota,
            
           
        ];

        //carrega a VIEW extrato enviando as variáveis $despesas e $receitas
        return view('principal', $parametros);
    }



}
