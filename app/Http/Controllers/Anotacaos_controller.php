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
        $anotacao->id_user = $user->id;
        $anotacao->titulo = $request->titulo;
        $anotacao->nota = $request->nota;

        $anotacao->save();
        return redirect('principal');
    }


    public function get_notas()
    {
        $id_user = auth()->user()->id;

        $anotacaos = Anotacao::where('id_user', $id_user)->get();

        return view('principal', ['anotacaos' => $anotacaos]);
    }

    public function deletar($id)
    {
        Anotacao::findOrFail($id)->delete();

        return redirect('principal');
    }

    public function get_anotacao($id)
    {
        $anotacao = Anotacao::findOrFail($id);
        $id_user = auth()->user()->id;

        $anotacaos = Anotacao::where('id_user', $id_user)->get();

        return view('principal', ['anotacaos' => $anotacaos]);
    }

    public function atualizar_nota(request $request)
    {
        Anotacao::findOrFail($request->id)->update($request->all());
        return redirect('/principal');

    }


    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);

        /*$imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);*/

    }


}