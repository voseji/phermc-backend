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
        Schema::create('inspection', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        $table->id();
        $table->string('inspectionId');
        $table->string('registrationNumber');
        $table->string('eID')->nullable();
        $table->string('inspectionTypeID')->nullable();
        $table->string('inspectionDate')->nullable();
        $table->string('teamID')->nullable();
        $table->string('teamLeader')->nullable()->comment('Application processing stage');;
        $table->string('action')->nullable();
        $table->string('participants')->nullable();
        $table->string('remarks')->nullable()->comment('Date of last renewal');;
        $table->timestamps();
        $table->softDeletes();
        $table->foreign('registrationNumber')->references('registrationNumber')->on('registration')->onDelete('cascade');
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
