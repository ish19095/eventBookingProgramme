<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventInternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_events', function (Blueprint $table) {
            $table->id('code');
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
            $table->boolean('time_all_day');
            $table->enum('site', ['Salina', 'Simar', 'Ghadira']);
            $table->string('event_type')->nullable();
            $table->string('blm_dept');
            $table->string('staff_handler');
            $table->string('person_notified');
            $table->enum('requirements', ['table', 'chairs']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_events');
    }
}
