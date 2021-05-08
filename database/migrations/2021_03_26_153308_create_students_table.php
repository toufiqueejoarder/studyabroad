<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text('email')->unique();
            $table->text('name');
            $table->string('p_image')->nullable();
            $table->string('phone')->nullable();
            $table->text('mailingAddress')->nullable();
            $table->text('Masters')->nullable();
            $table->text('MOrganization')->nullable();
            $table->text('Mdepartment')->nullable();
            $table->text('MpassYear')->nullable();
            $table->string('MCGPA')->nullable();
            $table->text('Bachelor')->nullable();
            $table->text('BOrganization')->nullable();
            $table->text('BDepartment')->nullable();
            $table->text('BpassYear')->nullable();
            $table->string('BachelorCGPA')->nullable();
            $table->text('HSC')->nullable();
            $table->text('HSCOrg')->nullable();
            $table->text('HSCGroup')->nullable();
            $table->text('HSCPass')->nullable();
            $table->string('HSCresult')->nullable();
            $table->text('SSC')->nullable();
            $table->text('SSCOrg')->nullable();
            $table->text('SSCGroup')->nullable();
            $table->text('SSCPass')->nullable();
            $table->string('SSCResult')->nullable();
            $table->string('ielts')->nullable();
            $table->string('gre')->nullable();

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
        Schema::dropIfExists('students');
    }
}
