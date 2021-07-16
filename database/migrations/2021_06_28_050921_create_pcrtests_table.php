<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcrtests', function (Blueprint $table) {
            $table->id();
            $table->string('result');
            $table->bigInteger('hospital_id')->unsigned();
            $table->bigInteger('patient_id')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->string('status_hos');
            $table->string('status_pat');
            $table->timestamps();
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcrtests');
    }
}
