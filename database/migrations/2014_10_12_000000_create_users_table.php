<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->useCurrent();
            $table->string('password');
            $table->enum('role', ['admin', 'donor', 'receptor'])->default('donor');
            $table->bigInteger('mobile')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->unsignedBigInteger('blood_id')->nullable();
            $table->foreign('blood_id')->references('id')->on('bloods')->onDelete('set null');



            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
