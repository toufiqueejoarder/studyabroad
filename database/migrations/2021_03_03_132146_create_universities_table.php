<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('organization');
            $table->string('tagline')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('state')->nullable();
            $table->string('provience')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
            $table->string('university_logo')->nullable();
            $table->text('ReasonToStdyH')->nullable();
            $table->text('history')->nullable();
            $table->text('education')->nullable();
            $table->text('research')->nullable();
            $table->text('career')->nullable();
            $table->text('StService')->nullable();
            $table->text('HousingService')->nullable();
            $table->text('LibraryService')->nullable();
            $table->text('CampusLife')->nullable();
            $table->text('SportsFacilities')->nullable();
            $table->text('StudentClub')->nullable();

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
        Schema::dropIfExists('universities');
    }
}
