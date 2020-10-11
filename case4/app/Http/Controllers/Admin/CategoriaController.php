<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Livro;
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
       
        $autors = \App\Autor::all('id','nome');
        return view('admin.livroautor.index',compact('autors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id= $request->all();
        

        $id= $request->all();
        $livros = \App\AutorLivro::find($id);
      //  dd($livros);
        $livro = \App\Livro::all();
    
        

        return view('admin.livroautor.view', compact('livros'));
    }


    // $id= $request->all();
    // $li = \App\AutorLivro::find($id);
    // $li = \App\AutorLivro::find($li->autor_id);
    // $chave = $li->all();
    // dd($li);
    // $livros = \App\Livro::find($chave);
    

    // return view('admin.livroautor.create', compact('livros'));


    /**
     * Display the specified resource.
     *
     * @param  int  $livro  
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $livros = \App\AutorLivro::find($livro);
        return view('admin.livro.index', compact('livros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livros = \App\AutorLivro::find($livro);
        return view('admin.livro.index', compact('livros'));
    }
}
