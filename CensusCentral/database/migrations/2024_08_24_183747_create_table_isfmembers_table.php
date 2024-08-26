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
            $table->unsignedBigInteger('headId');
            $table->foreign('headId')->references('id')->on('isfheads')->onDelete('cascade');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('maidenName')->nullable();
            $table->string('sex');
            $table->date('DOB');
            $table->integer('age');
            $table->string('civilStatus');
            $table->string('memberOccupation')->nullable();
            $table->string('placeOfWork')->nullable();
            $table->string('relationToHead');
            $table->string('memberOfCommunityGroup');
            $table->string('anyDisabilty')->nullable();
            $table->string('genderIdentification');
            $table->string('educAttaintment');
            $table->decimal('estimatedIncome')->nullable();

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
