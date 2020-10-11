@extends('layouts.app')

@section('content')
<h1>Cadastrar Livro</h1>

<form action="{{route('admin.categorias.store')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>Codigo</label>
        <input type="text"name="codigo" class="form-control @error('codigo') is-invalid @enderror " value="{{old('codigo')}}">
        
        @error('codigo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Descricao</label>
        <input type="text"name="descricao" class="form-control @error('descricao') is-invalid @enderror " value="{{old('descricao')}}">
        @error('descricao')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>


    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Categoria</button>
    </div>
</form>

@endsection