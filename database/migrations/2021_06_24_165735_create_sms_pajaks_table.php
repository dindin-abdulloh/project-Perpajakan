<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_pajaks', function (Blueprint $table) {
            $table->bigIncrements('id_sms');

            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('wajib_pajaks')->onDelete('cascade');

            $table->char('no_tujuan', 15);
            $table->text('pesan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_pajaks');
    }
}
