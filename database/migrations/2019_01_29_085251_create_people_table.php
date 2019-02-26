<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('city',50);
            $table->string('institution',50);
            $table->unsignedinteger('room_id');
           $table->foreign('room_id')->references('id')->on('rooms');
          $table->timestamps();
        });
       Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    } 
}
