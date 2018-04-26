<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaitientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paitients', function (Blueprint $paitient) {
            $paitient       ->increments('id');
            $paitient       ->string('card_num',10000);
            $paitient       ->char('fname',100);
            $paitient       ->char('mname',100);
            $paitient       ->char('lname',100);
            $paitient       ->char('gender',100);
            $paitient       ->char('type',100);
            $paitient       ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paitients');
    }
}
