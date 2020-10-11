

@extends('layouts.app')

@section('content')
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>autor</th>
                <th>livro</th>     
            </tr>
        </thead>
        <tbody>
        @foreach($livros as $l)
        <tr>
                <td>{{$l->id}}</td>
                <td>{{$l->autor_id}}</td>
                <td>{{$l->livro_id}}</td>
                <td>
             
               
                  <div class="btn-group">
               
                  </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>    
                    


@endsection


