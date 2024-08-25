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
        Schema::create('isfheads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surveyId');
            $table->foreign('surveyId')->references('surveyId')->on('survey_forms')->onDelete('cascade');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('maidenName')->nullable();
            $table->date('dateOfBirth');
            $table->integer('age');
            $table->string('sex');
            $table->string('civilStatus');
            $table->string('occupation');
            $table->string('workplace')->nullable();
            $table->string('address');
            $table->string('communityGroup')->nullable();
            $table->string('gender')->nullable();
            $table->string('disability')->nullable();

           
           
        

            $table->string('spouseLname')->nullable();
            $table->string('spouseFname')->nullable();
            $table->string('spouseMname')->nullable();
            $table->string('spouseMaidenName')->nullable();
            $table->date('spouseDOB')->nullable();
            $table->integer('spouseAge')->nullable();
            $table->string('spouseSex')->nullable();
            $table->string('spouseCommunityGroup')->nullable();
            $table->string('spouseGender')->nullable();

           
            $table->string('MedicalHistory')->nullable();
           


            $table->string('HouseholdClass');
            $table->integer('householdSize');
            $table->integer('yearResidency');
            $table->string('doubleHousehold');
            $table->string('indigenousOrNot')->nullable();
         
            $table->string('placeOrigin');
            $table->text('reasonEstablishing');
            $table->string('tenurialStatus');
            $table->string('governmentResettelment');
            $table->text('whichProgram');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isfheads');
    }
};
