<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
         'isbn', 'titulo', 'ano','editora','categoria_id','user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function AutorLivro(){
        return $this->hasMany(Autor::class);
    }
}


