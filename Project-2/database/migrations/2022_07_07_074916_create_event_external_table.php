<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventExternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_events', function (Blueprint $table) {
            $table->id('code');
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
            $table->enum('site', ['Salina', 'Simar', 'Ghadira']);
            $table->boolean('blm_event');
            $table->string('event_type')->nullable();
            $table->integer('num_of_participants');
            $table->enum('type_of_participants', ['adults', 'children', 'tourists']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_events');
    }
}
