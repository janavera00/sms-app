<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    { 
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable();
            $table->enum('status',['Pending', 'Active', 'Deactivated']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
