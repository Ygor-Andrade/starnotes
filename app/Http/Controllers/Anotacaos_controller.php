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
        $id_user = auth()->user()->id;
       
        $anotacaos = Anotacao::where('id_user', $id_user)->get();

        return view('principal', ['anotacaos'=> $anotacaos]);
    }



}
