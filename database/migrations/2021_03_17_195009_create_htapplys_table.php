<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtapplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('htapplys', function (Blueprint $table) {
            $table->id();
            $table->string('country')->unique();
            $table->text('notes');
            $table->text('documents');
            $table->text('englishskill');
            $table->text('deadlines');
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
        Schema::dropIfExists('htapplys');
    }
}
