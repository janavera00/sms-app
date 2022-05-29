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
            $table->id();
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('gender');
            $table->string('birthdate')->nullable();
            $table->string('schoolYear')->nullable();
            $table->string('contactNo')->nullable();
            $table->string('email');
            $table->string('position');
            $table->string('educattain')->nullable();
            $table->foreignId('accounts_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('principals');
    }


};
