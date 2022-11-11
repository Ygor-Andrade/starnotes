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
        Schema::create('anotac_relaciomentos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_anotacao');
            $table->integer('id_pasta')->nullable('id_pasta');
            $table->integer('id_categoria')->nullable('id_categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anotac_relaciomentos');
    }
};
