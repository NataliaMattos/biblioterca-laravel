@extends('layouts.app')

@section('content')
<h1>Procurar Livros</h1>

<form action="{{route('admin.livroautor.store')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
   

    <div class="form-group">
        <label>Autor</label>
        <select name="autor" class="form-control">
        
        @foreach($autors as $autor)
        <option value="{{$autor->id}}">{{$autor->nome}}</option>
        @endforeach
        </select>
    </div>

    <div>
        <button type="submit" class="btn btn-lg btn-success">Pesquisar</button>
    </div>
</form>

@endsection