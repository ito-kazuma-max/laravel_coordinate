<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('madeUser_id')->nullable();
            $table->string('madeUser_name', 20);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tops_id');
            $table->unsignedBigInteger('bottoms_id');
            $table->unsignedBigInteger('shoes_id');
            $table->unsignedBigInteger('outer_id')->nullable();
            $table->unsignedBigInteger('bag_id')->nullable();
            $table->string('title', 20);
            $table->string('description', 100)->nullable();
            $table->timestamps();

            $table->foreign('madeUser_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tops_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('bottoms_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('shoes_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('outer_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('bag_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinates');
    }
}
