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
        return view('produto.index',['produtos'=>$produtos]);
    
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
        $data=$request->all();
       dd('Entrou no Store'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
        //
    }
}
