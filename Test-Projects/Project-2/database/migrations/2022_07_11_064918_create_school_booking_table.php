<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->string('school_id')->primary();
            $table->date('date');
            $table->string('site');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('staff_handler');
            $table->string('school_name');
            $table->string('school_year');
            $table->integer('num_students');
            $table->string('teacher_name');
            $table->string('teacher_number');
            $table->string('teacher_email')->unique();
            $table->decimal('donation', 5, 2);
            $table->string('recipt_number');
            $table->boolean('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school');
    }
}
