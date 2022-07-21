<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id('stats_id');
            $table->date('nrv_stat_date');
            $table->string('nrv_stat_site');
            $table->string('total_visitors');
            $table->string('local_visitors');
            $table->string('foreign_visitors');
            $table->string('first_visitors');
            $table->string('repeat_visitors');
            $table->string('member_visitors');
            $table->string('non_member_visitors');
            $table->string('hide_booked');
            $table->string('photo_hide_booked');
            $table->string('tours');
            $table->string('nrv_stat_sales');
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
        Schema::dropIfExists('statistics');
    }
}
