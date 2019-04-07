<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->string('st_id');
            $table->string('st_name');
            $table->string('class_name');
            //attendance columns
            $table->integer('att_1')->default(0);
            $table->integer('att_2')->default(0);
            $table->integer('att_3')->default(0);
            $table->integer('att_4')->default(0);
            $table->integer('att_5')->default(0);
            $table->integer('att_6')->default(0);
            $table->integer('att_7')->default(0);
            $table->integer('att_8')->default(0);
            $table->integer('att_9')->default(0);
            $table->integer('att_10')->default(0);
            $table->integer('att_11')->default(0);
            $table->integer('att_12')->default(0);
            $table->integer('att_13')->default(0);
            $table->integer('att_14')->default(0);
            $table->integer('att_15')->default(0);
            $table->integer('att_16')->default(0);
            $table->integer('att_17')->default(0);
            $table->integer('att_18')->default(0);
            $table->integer('att_19')->default(0);
            $table->integer('att_20')->default(0);
            $table->integer('att_21')->default(0);
            $table->integer('att_22')->default(0);
            $table->integer('att_23')->default(0);
            $table->integer('att_24')->default(0);
            $table->integer('att_25')->default(0);
            $table->integer('att_26')->default(0);
            $table->integer('att_27')->default(0);
            $table->integer('att_28')->default(0);



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
        Schema::dropIfExists('attendances');
    }
}
