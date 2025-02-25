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
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('cpf');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('company');
            $table->string('adress');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
