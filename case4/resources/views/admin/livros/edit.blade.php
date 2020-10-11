@extends('layouts.app')

@section('content')
<h1>Atualizar Livro</h1>

<form action="{{route('admin.livros.update',['livro' => $livro->id])}}" method="post">
@csrf
    @method("PUT")
    <div class="form-group">
        <label>ISBN</label>
        <input type="text"name="isbn" class="form-control " value="{{$livro->isbn}}">
        
        @error('isbn')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Titulo</label>
        <input type="text"name="titulo" class="form-control " value="{{$livro->titulo}}">
        @error('titulo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Ano</label>
        <input type="text"name="ano" class="form-control" value="{{$livro->ano}}">
        @error('ano')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Editora</label>
        <input type="text"name="editora" class="form-control " value="{{$livro->editora}}">
        @error('editora')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

   

    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar Livro</button>
    </div>
</form>

@endsection