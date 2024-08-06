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
        Schema::table('projects', function (Blueprint $table) {
            // aggiungo alla tabella projects una colonna type_id  
            $table->unsignedBigInteger('type_id')->nullable()->after('id');
            //type_id e' una foreign key che si riferisce alla colonna id della tabella types
            $table->foreign('type_id')
            ->references('id')
            ->on('types')
            ->onDelete('set null'); // se la colonna type_id è popolata e viene cancellata la riga sull'altra tabella alla quale la foreign key fa' riferimento, qui setti il valore su null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_type_id_foreign'); // nometabella_nomecolonna_foreign
            $table->dropColumn('type_id');
        });
    }
};
