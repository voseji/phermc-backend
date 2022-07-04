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
        Schema::create('districts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('districtID')->unique();
            $table->string('district')->nullable();
            $table->string('areaCouncilID')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('areaCouncilID')->references('areaCouncilID')->on('area_councils')->onDelete('cascade');
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
