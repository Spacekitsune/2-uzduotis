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
            //             ID
// name(string)
// surname(string)
// group_id(bigInt)
// image_url(string)
            $table->string('name');
            $table->string('surname');
            // $table->foreign('type_id')->references('id')->on('types');
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('attendance_groups');
            $table->string('image_url');
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
