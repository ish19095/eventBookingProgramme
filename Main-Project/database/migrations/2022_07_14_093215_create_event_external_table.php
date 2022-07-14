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
            $table->id('ext_id');
            $table->date('external_event_date');
            $table->time('external_event_time_from');
            $table->time('external_event_time_to');
            $table->string('external_event_site');
            $table->boolean('external_event_BLM');
            $table->string('external_event_type')->nullable();
            $table->integer('external_expected_participants');
            $table->string('external_event_type_participant');
            $table->string('external_event_main_dept');
            $table->string('external_event_sec_dept');
            $table->string('external_event_third_dept');
            $table->string('internal_event_staff_member');
            $table->string('internal_event_other_member');
            $table->string('external_event_fee');
            $table->string('external_event_company_name');
            $table->string('external_event_contact_person');
            $table->string('external_event_contact_email');
            $table->string('external_event_contact_number');
            $table->string('external_event_vat');
            $table->string('external_event_req');
            $table->string('external_event_payment_amount');
            $table->string('external_event_payment');
            $table->string('external_actual_participants');
            $table->string('external_blm_members');
            $table->string('external_event_income');
            $table->boolean('external_event_sales');
            $table->boolean('external_event_member');
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
        Schema::dropIfExists('external_events');
    }
}
