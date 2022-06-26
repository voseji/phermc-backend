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
        Schema::create('processing_stage', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
        $table->id();
        $table->string('processingStageID');
        $table->string('processingStage')->nullable();
        $table->timestamps();
        $table->softDeletes();
        // $table->foreign('registrationNumber')->references('registrationNumber')->on('registration')->onDelete('cascade');
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
