<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('teacher_id');
            $table->string('cl_name');
            $table->mediumText('cl_description');
            $table->string('inv_groups');
            $table->integer('num_of_st');
            $table->integer('num_of_lessons');
            $table->integer('done_attendences')->default(0);
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
        Schema::dropIfExists('classes');
    }
}
