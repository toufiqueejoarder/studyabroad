<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wlists', function (Blueprint $table) {
            $table->id();
            $table->string('student');
            $table->string('program_id');
            $table->string('university_email');
            $table->string('university_name');
            $table->string('status')->default('WishListed');
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
        Schema::dropIfExists('wlists');
    }
}
