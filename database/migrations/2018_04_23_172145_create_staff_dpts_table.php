<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffDptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_dpts', function (Blueprint $staff_dpt) {
            $staff_dpt      ->increments('id');
            $staff_dpt      ->integer('dpt_id');
            $staff_dpt      ->integer('staff_id');
            $staff_dpt      ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_dpts');
    }
}
