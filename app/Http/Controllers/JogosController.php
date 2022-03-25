<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    //
    public function index(){
        $jogos = Jogo::all();
      
        return view('jogos/index', ['jogos'=>$jogos]);
    }

    public function create(){
        return view('jogos/create');
    }

    public function store(Request $request){
        
        /*Inserindo os dados usando a Model Jogo*/
        Jogo::create($request->all());

        /*Redirecionando numa rota*/
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        /*Variável $jogo recebe jogo onde o id seja igual ao id passado $id, vai pegar o primeiro*/
        $jogo = Jogo::where('id', $id)->first();
        if(!empty($jogo)){
            return view('jogos.edit',['jogo'=>$jogo]);
        }else{
            return redirect()->route('jogos-index');
        } 
    }

    public function update(Request $request, $id){

      
      $dados = [
          'nome' =>$request->nome,
          'categoria' =>$request->categoria,
          'ano_criacao' =>$request->ano_criacao,
          'valor' =>$request->valor,
      ];

      Jogo::where('id', $id)->update($dados);
      return redirect()->route('jogos-index');
    }

    public function destroy($id){
        Jogo::where('id',$id)->delete($id);
        return redirect()->route('jogos-index');
    }

    
}

