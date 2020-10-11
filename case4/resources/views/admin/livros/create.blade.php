@extends('layouts.app')

@section('content')
<h1>Cadastrar Livro</h1>

<form action="{{route('admin.livros.store')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>ISBN</label>
        <input type="text"name="isbn" class="form-control @error('isbn') is-invalid @enderror " value="{{old('isbn')}}">
        
        @error('isbn')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Titulo</label>
        <input type="text"name="titulo" class="form-control @error('titulo') is-invalid @enderror " value="{{old('titulo')}}">
        @error('titulo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Ano</label>
        <input type="text"name="ano" class="form-control @error('ano') is-invalid @enderror " value="{{old('ano')}}">
        @error('ano')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Editora</label>
        <input type="text"name="editora" class="form-control @error('editora') is-invalid @enderror " value="{{old('editora')}}">
        @error('editora')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>



    <div class="form-group">
        <label>Categoria</label>
        <select name="categoria" class="form-control">
        @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Autor</label>
        <select name="autor_id" class="form-control">
        @foreach($autors as $autor)
        <option value="{{$autor->id}}">{{$autor->nome}}</option>
        @endforeach
        </select>
    </div>


    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Livro</button>
    </div>
</form>

@endsection