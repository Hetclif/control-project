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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('weekday');
            $table->unsignedSmallInteger('numerator');
            $table->unsignedSmallInteger('lesson_number');
            $table->foreignId('group_id')->index()->constrained('groups');
            $table->foreignId('lesson_id')->index()->constrained('lessons');
            $table->foreignId('teacher_id')->index()->constrained('users');
            $table->foreignId('classroom_id')->index()->constrained('classrooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
