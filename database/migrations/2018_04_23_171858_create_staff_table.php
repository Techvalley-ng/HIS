<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $staff) {
            $staff      ->increments('id');
            $staff      ->char('fname',100);
            $staff      ->char('mname',100);
            $staff      ->char('lname',100);
            $staff      ->char('username',100);
            $staff      ->string('password',100);
            $staff      ->char('login_type',100);
            $staff      ->string('address',100);
            $staff      ->char('gender',100);
            $staff      ->string('rank',100);
            $staff      ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
