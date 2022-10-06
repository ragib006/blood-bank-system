<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlooddonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blooddoners', function (Blueprint $table) {
            $table->increments('doner_id');
            $table->string('doner_name');
            $table->string('doner_email');            
            $table->string('doner_phn');
            $table->string('doner_age');
            $table->string('doner_district');
            $table->string('doner_blood_group');
            $table->string('doner_resgister_date');
            $table->string('doner_status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
    /**
     doner_blood_group
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blooddoners');
    }
}
