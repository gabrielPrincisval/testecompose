<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

 /*

	https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller


    Dicas sobre resouces
    index - listar todos os itens
    create - exibe formulario para criacao
    store - armazena conteudo do formulário para criacao
    show - exibe um item
    edit - formulario de edicao de um item
    update - salva e edicao de um item
    destroy - exclui um item
    */



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index/listar
        
        $produtos = Produto::orderby('nome','ASC')
        ->get();
        return view('produto.index',['produtos' => $produtos]);
    
        //store/salvar

        //$produto = new Produto;
        //$produto->nome = 'Monitor Ultrawide 36';
        //$produto->valor = 3000;
        //$produto->save();

        //dd('Savlou!!');

        //show / exibir
        //$produto = Produto::findOrFail(4);
        //dd($produto);

        //update/ atualizar

        //$produto = Produto::findOrFail(4);
        //$produto -> nome ='Super Monitor Ultrawide 36 plus';
        //$produto -> valor= 7000;
        //$produto -> save();

       //dd('Atualizou');

       //destroy/ excluir

       //$produto = Produto::findOrFail(4);
       //$produto->delete();

       //dd('Excluiu');



    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('produto.create');
      
        //dd('Entrou no create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd('chegou!');
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatorio',
            'nome.min'      => 'O :attribute precisa ter no mínimo :min',
            'valor.required'=> 'O campo :attribute é obrigatorio!',
            'valor.numeric' => 'O campo :attribute precisa ser númerico!',
        ];



        $validated = $request->validate([
            'nome' => 'required|min:5',
            'valor' => 'required|numeric',
        ], $messages);
    
    $produto = new Produto;
        $produto->nome =  $request -> nome;
        $produto->valor = $request-> valor;
        $produto->save();

        return redirect('/produto')->with('status', 'Produto atualizado com sucesso!');
    
    
    
    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show',['produto' => $produto]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.edit',['produto' => $produto]);
        

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatorio',
            'nome.min'      => 'O :attribute precisa ter no mínimo :min',
            'valor.required'=> 'O campo :attribute é obrigatorio!',
            'valor.numeric' => 'O campo :attribute precisa ser númerico!',
        ];



        $validated = $request->validate([
            'nome' => 'required|min:5',
            'valor' => 'required|numeric',
        ], $messages);
    
    $produto = Produto::findOrFail($id);
        $produto->nome =  $request -> nome;
        $produto->valor = $request-> valor;
        $produto->save();

        return redirect('/produto')->with('status', 'Produto criado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect('/produto')->with('status', 'Produto excluido com sucesso!');
    }
}
