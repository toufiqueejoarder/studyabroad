<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCunisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cunis', function (Blueprint $table) {
            $table->id();
            $table->string('country')->unique();
            $table->text('acyr');
            $table->text('rnkduni');
            $table->text('intstd');
            $table->text('totstd');
            $table->text('population');
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
        Schema::dropIfExists('cunis');
    }
}
