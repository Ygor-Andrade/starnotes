<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Anotacao;

class Anotacaos_controller extends Controller
{
    public function store(Request $request)
    {
        $anotacao = new Anotacao;

        $anotacao->id_user = $request->id_user;
        $anotacao->titulo  = $request->titulo;
        $anotacao->nota = $request->nota;
       
       
        $anotacao->data = date('Y-m-d');
        $user = auth()->user();
        $anotacao->user_id= $user->id;

        $anotacao->save();
        return redirect('principal');
    }




}
