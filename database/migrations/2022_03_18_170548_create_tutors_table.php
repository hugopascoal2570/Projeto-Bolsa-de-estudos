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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('email')->unique();
            $table->dateTime('birthdate')->default(NOW());
            $table->string('idade')->default('00');
            $table->string('phone')->default('(00)00000-0000');
            $table->string('nacionalidade')->default('Brasileiro');
            $table->string('cpf')->unique()->default('000.000.000-00');
            $table->string('photo')->default('default.png');
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
        Schema::dropIfExists('tutors');
    }
};
