<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createCustomerTable extends Migration
{
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('accountStatus');
            $table->integer('phoneNumber');
            $table->string('profilImage');
            $table->rememberToken();
            $table->timestamps();
        });

    }
    public function down()
    {
        Schema::dropIfExists('customer');
    }

}
