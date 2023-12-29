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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('GroupeNumber');
            $table->unsignedBigInteger('idAnne');
            $table->unsignedBigInteger('idFiliere');
            $table->string('email_delegue');
            $table->foreign('idAnne')
            ->references('id')->on('annees')->onDelete('cascade');
            $table->foreign('idFiliere')
            ->references('id')->on('filieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes');
    }
};
