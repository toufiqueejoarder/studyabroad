<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('country')->unique();
            $table->text('notes');
            $table->text('whystudy');
            $table->text('wtliketo');
            $table->text('wttostudy');
            $table->text('mjcity');
            $table->text('wcuniat');
            $table->text('pracinfo');
            $table->text('waytqlfy');
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
        Schema::dropIfExists('studies');
    }
}
