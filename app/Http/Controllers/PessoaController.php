<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function store(Request $req){

        $p = new Pessoa;
        $p->nome = $req->input('nome');
        $p->save();

        return redirect()->back()->with("msg", "Salvo com Sucesso!!!");

    }
    
    public function listarpessoas(){

        $pessoas = Pessoa::All();
        return view('form_listagem_pessoa', ['pessoas' => $pessoas]);

    }

    public function destroy($id){

        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        return redirect()->back()->with("msg", "Excluído com Sucesso!!!"); 
              
       }

}
