<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('school_id');
            $table->date('school_event_date');
            $table->string('school_event_site');
            $table->time('school_event_time_from');
            $table->time('school_event_time_to');
            $table->string('school_event_staff_member');
            $table->string('school_event_school_name');
            $table->string('school_event_school_year');
            $table->integer('school_event_num_students');
            $table->string('school_event_teacher_name');
            $table->string('school_event_teacher_number');
            $table->string('school_event_teacher_email')->unique();
            $table->decimal('school_event_donation', 5, 2);
            $table->boolean('school_event_sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
