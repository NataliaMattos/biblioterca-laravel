<?php

use Illuminate\Database\Seeder;

class AutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Autor::class,6)->create()->each(function($autor){
            $autor->AutorLivro()->save(factory(\App\AutorLivro::class)->create()); 
        });

        
        $autorlivros = \App\AutorLivro::all();
        foreach($autorlivros as $autorlivro){
            $livro = factory(\App\Livro::class)->create();
            $livro->AutorLivro()->save($autorlivro); 
        }
    }
}
