<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'nome', 'nascionalidade',
   ];

    public function AutorLivro(){
        return $this->hasMany(Livro::class);
    }
}
