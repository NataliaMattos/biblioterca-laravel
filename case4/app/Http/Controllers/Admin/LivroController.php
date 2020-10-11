<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;
use App\Http\Requests\LivroRequest; 


class LivroController extends Controller
{
    // private $livro;

    // public function _construct(Livro $livro){
    //     $this->livro = $livro;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = auth()->user()->livro;
       return view('admin.livros.index',compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias =  \App\Categoria::all(['id', 'descricao']);
        $users =  \App\User::all(['id', 'name']);
        $autors =  \App\Autor::all(['id', 'nome']);
       
        return view('admin.livros.create',compact('users', 'categorias','autors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroRequest $request, Livro $livro)
    {
        // $image = $request->file('photos');
        // $image->store('livros', 'public');
        $data = $request->all();
        $user = auth()->user();
        $categoria = \App\Categoria::find($data['categoria']);
        $autor = \App\AutorLivro::find($data['autor_id']);
        $livro = $user->livro()->create($data); 
        $categoria->livro()->save($livro);
       
        flash('Livro Criado com Sucesso!')->success();
        return redirect()->route('admin.livros.index');
    }      
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = \App\Livro::find($id);
        return view('admin.livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LivroRequest $request, $id)
    {
        $data = $request->all();
        $livro = \App\Livro::find($id);
        $livro->update($data);
        flash('livro Atualizado com Sucesso!')->success();
        return redirect()->route('admin.livros.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = \App\Livro::find($id);
        $livro->delete();
        flash('Livro Removido com Sucesso!')->success();
        return redirect()->route('admin.livros.index');
    }
}
