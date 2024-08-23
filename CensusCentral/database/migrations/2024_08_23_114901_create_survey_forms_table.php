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
        Schema::create('survey_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('houseId');
            $table->date('surveyDate');
            $table->integer('surveyNo');
            $table->string('barangay');
            $table->string('sitioPurok')->nullable();
            $table->string('interviewerName');
            $table->string('areaClassification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_forms');
    }
};
