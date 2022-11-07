<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('tile_id');
            $table->integer('event');
            $table->integer('posX');
            $table->integer('posY');
            $table->enum('pointer', [0,1,2,3])->default(0);
            $table->boolean('visible')->default(false);
            $table->boolean('passed')->default(false);
            $table->json('cache')->nullable()->default(null);
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
        Schema::dropIfExists('fields');
    }
}
