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
        Schema::create('aboute', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('image');
            $table->string('title_privileges');
            $table->string('contant_privileges');
            $table->string('title_ourwork');
            $table->string('contant_ourwork');
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
        Schema::dropIfExists('aboute');
    }
};
