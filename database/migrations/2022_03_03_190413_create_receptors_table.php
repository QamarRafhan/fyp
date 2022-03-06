<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
           
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
        Schema::dropIfExists('receptors');
    }
}
