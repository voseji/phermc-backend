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
        Schema::create('registration', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        
        $table->increments('id');
        $table->string('eID')->unique();
        $table->string('KIV')->nullable();
        $table->string('registrationNumber')->unique();
        $table->string('facilityName')->nullable();
        $table->string('facilityTypeID')->nullable();
        $table->string('facilityStatusID')->nullable();
        $table->string('processingStageID')->nullable()->comment('Application processing stage');;
        $table->string('processingStageDate')->nullable();
        $table->string('registrationDate')->nullable();
        $table->string('licenseRenewalDate')->nullable()->comment('Date of last renewal');;
        $table->string('annualRenewalFee')->nullable()->comment('Annual renewal fee');;
        $table->string('outstandingDebt')->nullable();
        $table->string('applicantName')->nullable()->comment('Name of applicants');;
        $table->string('proprietorName')->nullable();
        $table->string('association')->nullable();
        $table->string('coveringProfessional')->nullable()->comment('Name of covering doctor or lab scientist');;
        $table->string('facilityAddress')->nullable();
        $table->string('districtID')->nullable();
        $table->string('areaCouncilID')->nullable();
        $table->string('facilityPhoneNumber')->nullable();
        $table->string('facilityEmail')->nullable();
        $table->string('beds')->nullable();
        $table->string('urbanization')->nullable();
        $table->string('staff')->nullable();
        $table->string('staffDocComplete')->nullable();
        $table->string('docCompleteDate')->nullable();
        $table->string('registrationTypeID')->nullable();
        $table->string('captureDate')->nullable()->comment('First capture date');;
        $table->string('updatedBy')->nullable();
        $table->string('pin')->nullable();
        $table->string('special')->nullable();
        $table->timestamps();
        $table->softDeletes();
        $table->foreign('facilityStatusID')->references('facilityStatusID')->on('facility_status')->onDelete('cascade');
        $table->foreign('facilityTypeID')->references('facilityTypeID')->on('facility_type')->onDelete('cascade');
        $table->foreign('processingStageID')->references('processingStageID')->on('processing_stage')->onDelete('cascade');
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
