<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_groups', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->unsignedBigInteger('difficulty');
            $table->foreign('difficulty')->references('id')->on('difficulties');
            $table->unsignedBigInteger('school_id');
            // $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('attendance_groups');
    }
}
