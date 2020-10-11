@extends('layouts.app')

@section('content')
<a href="{{route('admin.livros.create')}}" class="btn btn-lg btn-success">Cadastrar Livro</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Categoria</th>
                <th>ISBN</th>
                <th>Titulo</th>
                <th>Ano</th>
                <th>Editora</th>
            </tr>
        </thead>
        <tbody>
        @foreach($livros as $l)
        <tr>
                <td>{{$l->id}}</td>
                <td>{{$l->user_id}}</td>
                <td>{{$l->categoria_id}}</td>
                <td>{{$l->isbn}}</td>
                <td>{{$l->titulo}}</td>
                <td>{{$l->ano}}</td>
                <td>{{$l->editora}}</td>
                <td>
              <div class="btn-group">
              <a href="{{route('admin.livros.edit',['livro' => $l->id])}}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{route('admin.livros.destroy',['livro' => $l->id])}}" method="post">
                    @csrf
                    @method("DELETE")
                  <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                  </form>
                  </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>    
                    


@endsection


