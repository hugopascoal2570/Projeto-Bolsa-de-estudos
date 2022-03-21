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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('não informado');
            $table->boolean('is_admin')->nullable()->default(0);
            $table->boolean('first_access')->default(0);
            $table->string('email')->unique();
            $table->dateTime('birthdate')->nullable()->default(NOW());
            $table->string('phone')->nullable()->default('(00)00000-0000');
            $table->string('nacionalidade')->nullable()->default('Brasileiro');
            $table->string('cpf')->nullable()->unique();
            $table->string('image')->nullable()->default('default.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
