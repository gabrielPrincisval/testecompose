<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::Orderby('Nome', 'ASC')->get();
        return view('categoria.index',['categorias'=>$categoria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatorio',
            'nome.min'      => 'O :attribute precisa ter no mínimo :min',
            
        ];



        $validated = $request->validate([
            'nome' => 'required|min:5',
            
        ], $messages);
    
    $categoria = new Categoria;
        $categoria-> nome =  $request -> nome;
        $categoria->save();

        return redirect('/categoria')->with('status', 'Produto atualizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoria.show',['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit',['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatorio',
            'nome.min'      => 'O :attribute precisa ter no mínimo :min',
            
        ];



        $validated = $request->validate([
            'nome' => 'required|min:5',
            
        ], $messages);
    
    $categoria = Categoria::findOrFail($id);
        $categoria->nome =  $request -> nome;
        $categoria->save();

        return redirect('/categoria')->with('status', 'Produto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect('/categoria')->with('status', 'Produto excluido com sucesso!');
    }
}
