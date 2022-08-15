<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakepalakeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakepalakeluarga', function (Blueprint $table) {
            $table->id();
            $table->string('kepalakeluarga', 100);
            $table->string('nokk', 100);
            $table->string('datart_id', 100);
            $table->string('tempattinggal', 100);
            $table->string('notelepon', 100);
            $table->string('jumlahkeluarga', 100);
            $table->string('imagekk', 255);
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
        Schema::dropIfExists('datakepalakeluarga');
    }
}
