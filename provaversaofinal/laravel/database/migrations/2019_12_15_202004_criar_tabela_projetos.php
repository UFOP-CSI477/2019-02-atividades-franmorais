<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaProjetos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',100);
            $table->tinyInteger('ano');
            $table->tinyInteger('semestre');  
            $table->unsignedInteger('aluno_id')->unsigned()->onDelete('cascade')->onUpdate('cascade');;
            $table->unsignedInteger('professor_id')->unsigned()->onDelete('cascade')->onUpdate('cascade');
       
            $table->timestamps();
            $table->foreign('aluno_id')
                ->references('id')
                ->on('alunos');

                $table->foreign('professor_id')
                ->references('id')
                ->on('professores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
