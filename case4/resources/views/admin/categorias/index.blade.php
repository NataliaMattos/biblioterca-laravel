@extends('layouts.app')

@section('content')
<a href="{{route('admin.categorias.create')}}" class="btn btn-lg btn-success">Cadastrar Categoria</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Descriçáo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $c)
        <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->codigo}}</td>
                <td>{{$c->descricao}}</td>
                <td>
              <div class="btn-group">
              <a href="{{route('admin.categorias.edit',['categoria' => $c->id])}}" class="btn btn-sm btn-primary">Editar</a>
                  <form action="{{route('admin.categorias.destroy',['categoria' => $c->id])}}" method="post">
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
                    
    {{$categorias->links()}}

@endsection


