<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            //tabella ponte, non necessita di colonne id e timestamp
            // creo le colonne e specifico che sono foreign key
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')
            ->references('id')
            ->on('projects')
            ->onDelete('cascade'); // quando viene cancellato un progetto le righe nella tabella ponte vengono cancellate

            $table->unsignedBigInteger('technology_id');
            $table->foreign('technology_id')
            ->references('id')
            ->on('technologies')
            ->onDelete('cascade');
            
            // entrambe le colonne sono primary key ( questa riga non è obbligatoria ma può velocizzare la ricerca nel DB)
            $table->primary(['project_id', 'technology_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
