<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('pat_name')->unique();
            $table->string('pat_email');
            $table->string('pat_address');
            $table->string('pat_id');
            $table->integer('pat_mobile');
            $table->string('code')->nullable();
            $table->boolean('active')->default(0);
            $table->bigInteger('login_id')->unsigned();
            $table->bigInteger('hospital_id')->unsigned();
            $table->timestamps();
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
