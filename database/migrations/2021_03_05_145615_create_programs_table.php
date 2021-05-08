<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('course');
            $table->string('program');
            $table->string('discipline');
            $table->string('faculty');
            $table->string('delivery');
            $table->string('duration');
            $table->string('study_status');
            $table->text('about');
            $table->integer('fees');
            $table->string('apply_startS1');
            $table->string('apply_endS1');
            $table->string('apply_startS2');
            $table->string('apply_endS2');
            $table->string('language');
            $table->text('Overview');
            $table->string('credit');
            $table->text('program_structure');
            $table->text('academic_requirement');
            $table->text('english_requirement')->nullable();
            $table->text('other_requirement')->nullable();
            $table->text('funding');
            $table->text('visa');
            $table->text('work_permit');
            $table->string('course_link');

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
        Schema::dropIfExists('programs');
    }
}
