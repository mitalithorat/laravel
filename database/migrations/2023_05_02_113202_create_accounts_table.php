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
        Schema::create('accounts', function (Blueprint $table) {
        $table->id()->unique();
        $table->string('firstname')->nullable();
        $table->string('lastname')->nullable();
        $table->string('username')->nullable();
        $table->string('contact')->nullable();
        $table->string('email')->unique();
        $table->string('country')->nullable();
        $table->string('state')->nullable();
        $table->string('street')->nullable();
        $table->string('pincode')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
