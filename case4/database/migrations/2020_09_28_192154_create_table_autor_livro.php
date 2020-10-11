<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAutorLivro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_livros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livro_id')->nullable();
            $table->unsignedBigInteger('autor_id')->nullable();
            $table->string('descricao');
            $table->timestamps();
            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('autor_id')->references('id')->on('autors');//->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_livros');
    }
}
