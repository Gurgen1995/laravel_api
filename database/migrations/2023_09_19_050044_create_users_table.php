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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable();
            $table->string('first_name', 40)->nullable();
            $table->string('last_name', 40)->nullable();
            $table->string('phone', 12)->nullable();
            $table->string('avatar')->nullable();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable();
            $table->string('name', 40)->nullable();
            $table->longText('description')->nullable();
            $table->string('photo')->nullable();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->longText('content')->nullable();
            $table->smallInteger('grades')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users', 'companies', 'comments');
    }
};
