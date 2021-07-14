<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIcubrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icubrequests', function (Blueprint $table) {
            $table->id();
            $table->string('reason');
            $table->string('action')->default('pending');
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('icubed_id')->unsigned()->default(0);
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('icubed_id')->references('id')->on('icubeds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icubrequests');
    }
}
