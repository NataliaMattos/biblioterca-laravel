<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorLivro extends Model
{
    protected $fillable = [
        'livro_id', 'autor_id',
   ];

   public function livro(){
    return $this->belongsTo(Livro::class);
}

public function autor(){
    return $this->belongsTo(Autor::class);
}

}
