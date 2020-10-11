<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\CategoriaRequest; 


class LivroAutorController extends Controller
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
        $categorias = \App\Categoria::paginate(4);
       return view('admin.categorias.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request, Categoria $categoria)
    {
        // $image = $request->file('photos');
        // $image->store('livros', 'public');
        $categoria->create($request->all());
       
        flash('Categoria Criada com Sucesso!')->success();
        return redirect()->route('admin.categorias.index');
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
        $categoria = \App\Categoria::find($id);
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaRequest $request, $id)
    {
        $data = $request->all();
        $categoria = \App\Categoria::find($id);
        $categoria->update($data);
        flash('Categoria Atualizada com Sucesso!')->success();
        return redirect()->route('admin.categorias.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = \App\Categoria::find($id);
        $categoria->delete();
        flash('Categoria Removida com Sucesso!')->success();
        return redirect()->route('admin.categorias.index');
    }
}
