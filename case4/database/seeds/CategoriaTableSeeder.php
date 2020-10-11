<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
     
           // factory(\App\Categoria::class, 10)->create();
      
     
            factory(\App\Categoria::class,6)->create()->each(function($categoria){
                $categoria->livro()->save(factory(\App\Livro::class)->create()); 
            });
    
            
            $livros = \App\Livro::all();
            foreach($livros as $livro){
                $user = factory(\App\User::class)->create();
                $user->livro()->save($livro); 
            }
     
            
            }
        
        }

