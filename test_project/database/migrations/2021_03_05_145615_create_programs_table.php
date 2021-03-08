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
            $table->string('delivery');
            $table->string('duration');
            $table->string('study_status');
            $table->string('about');
            $table->string('fees');
            $table->string('apply_start');
            $table->string('apply_end');
            $table->string('language');
            $table->string('Overview');
            $table->string('program_structure');
            $table->string('academic_requirement');
            $table->string('english_requirement')->nullable();
            $table->string('other_requirement')->nullable();
            $table->string('funding');
            $table->string('visa');
            $table->string('work_permit');
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
