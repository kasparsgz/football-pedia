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
        Schema::create('speletajs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('komanda_id')->constrained();
            $table->int("ShirtNum");
            $table->longText("about");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speletajs');
    }
};
