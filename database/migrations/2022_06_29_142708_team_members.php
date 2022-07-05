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
        Schema::create('team_members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('teamID')->unique();
            $table->string('memberID');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('memberID')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('memberID')->references('memberID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
