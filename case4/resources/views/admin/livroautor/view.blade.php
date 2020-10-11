

@extends('layouts.app')

@section('content')
<h1> Livros desse autor</h1>
<table class="table table-striped">
<thead>
            <tr>

                <th>ISBN</th>
                <th>Titulo</th>
                <th>Ano</th>
                <th>Editora</th>     
            </tr>
        </thead>
        <tbody>
        @foreach($livros as $i)
        <?php
        $c = $i->livro_id;
         $li[] = \App\Livro::find($c); ?>

        @foreach ($li as $l)
        <tr>

                <td>{{$l->isbn}}</td>
                <td>{{$l->titulo}}</td>
                <td>{{$l->ano}}</td>
                <td>{{$l->editora}}</td>
                <td>
             

                </td>
            </tr>
        @endforeach
        @endforeach
        </tbody>
    </table>    
                    


@endsection