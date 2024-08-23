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
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('maidenName');
            $table->date('dateOfBirth');
            $table->integer('age');
            $table->string('sex');
            $table->string('civilStatus');
            $table->string('occupation');
            $table->string('gender');
            $table->string('communityGroup');
            $table->string('workplace');
            $table->string('address');

            $table->string('spouseLname')->nullable();
            $table->string('spouseFname')->nullable();
            $table->string('spouseMname')->nullable();
            $table->string('spouseMaidenName')->nullable();
            $table->date('spouseDOB')->nullable();
            $table->integer('spouseAge')->nullable();
            $table->string('spouseSex')->nullable();
            $table->string('spouseCommunityGroup')->nullable();
            $table->string('spouseGender')->nullable();

            $table->string('HouseholdClass');
            $table->string('MedicalHistory');
            $table->integer('householdSize');
            $table->integer('yearResidency');
            $table->string('IndigenousOrNot');
            $table->string('doubleHousehold');
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
