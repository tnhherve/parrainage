<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParrainFilleulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrain__filleules', function (Blueprint $table) {
            $table->unsignedInteger('id_parrain');
            $table->unsignedInteger('id_filleule');
            $table->primary(['id_parrain','id_filleule']);
            $table->foreign('id_parrain')->
                references('id')->
                on('users')->
                onDelete('cascade');
            $table->foreign('id_filleule')->
                references('id')->
                on('users')->
                onDelete('cascade');    
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
        Schema::dropIfExists('parrain__filleules');
    }
}
