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
        Schema::create('isfmembers', function (Blueprint $table) {
            $table->id('memberId');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('isfheads')->onDelete('cascade');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('relationToHead');
            $table->integer('age');
            $table->string('gender');
            $table->string('civilStatus');
            $table->string('educAttaintment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isfmembers');
    }
};
