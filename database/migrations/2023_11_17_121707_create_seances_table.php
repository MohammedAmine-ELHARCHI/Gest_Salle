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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jour');
            $table->time('heurDebut');
            $table->time('heurFin');
            $table->unsignedBigInteger('idProf');
            $table->unsignedBigInteger('idSalle');
            $table->unsignedBigInteger('idGroupe');
            $table->boolean('reserved');
            $table->foreign('idProf')
            ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idSalle')
            ->references('id')->on('salles')->onDelete('cascade');
            $table->foreign('idGroupe')
            ->references('id')->on('groupes')->onDelete('cascade');
            $table->string('center');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
};
