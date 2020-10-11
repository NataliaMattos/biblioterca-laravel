<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
       'codigo', 'descricao', 
    ];
    public function livro(){
        return $this->hasMany(Livro::class);
    }
}
