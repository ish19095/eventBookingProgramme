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
            $table->id('int_id');
            $table->date('internal_event_date');
            $table->time('internal_event_time_from');
            $table->time('internal_event_time_to');
            $table->boolean('internal_event_all_day');
            $table->string('internal_event_site');
            $table->string('internal_event_type')->nullable();
            $table->string('internal_event_dept');
            $table->string('internal_event_staff_member');
            $table->string('internal_event_other_member');
            $table->enum('internal_event_req', ['table', 'chairs']);
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
        Schema::dropIfExists('events');
    }
}
