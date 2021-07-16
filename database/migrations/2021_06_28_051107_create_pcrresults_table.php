<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcrresults', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('status_hos');
            $table->string('status_pat');
            $table->bigInteger('pcrtest_id')->unsigned();
            $table->timestamps();
            $table->foreign('pcrtest_id')->references('id')->on('pcrtests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcrresults');
    }
}
