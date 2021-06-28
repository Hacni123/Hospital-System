<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminall', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->integer('admin_mobile');
            $table->string('admin_email');
            $table->string('admin_address');
            $table->bigInteger('login_id')->unsigned();
            $table->timestamps();
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminall');
    }
}
