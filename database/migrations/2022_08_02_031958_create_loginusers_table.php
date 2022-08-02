<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginusers', function (Blueprint $table) {
            $table->id();
            $table->string('loginname', 150);
            $table->string('username', 50)->unique();
            $table->string('password', 100);
            $table->unsignedInteger('userstatus');
            $table->unsignedInteger('permission');
            $table->unsignedInteger('agentid')->nullable();
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
        Schema::dropIfExists('loginusers');
    }
}
