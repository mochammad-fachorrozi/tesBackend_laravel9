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
        Schema::create('films', function (Blueprint $table) {
            $table->string('kd_film', 100)->primary();
            $table->string('nm_film', 100);
            $table->string('genre', 50);
            $table->string('artis', 100);
            $table->string('produser', 50);
            $table->integer('pendapatan');
            $table->integer('nominasi');
            $table->timestamps();

            $table->foreign('genre')->references('kd_genre')->on('genres')->onDelete('cascade');
            $table->foreign('artis')->references('kd_artis')->on('artis')->onDelete('cascade');
            $table->foreign('produser')->references('kd_produser')->on('produsers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
