<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->integer('point');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('film_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('kritik',function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik');
    }
};