@extends('layouts.app')

@section('content')
<h1>Atualizar Livro</h1>

<form action="{{route('admin.categorias.update',['categoria' => $categoria->id])}}" method="post">
@csrf
    @method("PUT")
    <div class="form-group">
        <label>Codigo</label>
        <input type="text"name="codigo" class="form-control " value="{{$categoria->codigo}}">
        
        @error('codigo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Descricao</label>
        <input type="text"name="descricao" class="form-control " value="{{$categoria->descricao}}">
        @error('descricao')
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