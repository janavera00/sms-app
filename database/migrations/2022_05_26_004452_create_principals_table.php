<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('schoolYear');
            $table->string('contactNo');
            $table->string('email')->unique();
            $table->string('position');
            $table->string('educattain');
            $table->integer('AccountID');
            $table->timestamps();

            // Connecting to Foreign Key from 1 table to Another (NOT YET SURE)
            //  $table->foreign('AccountID')->references('AccountID')
            //  ->on('Accounts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('principals');
    }
};