<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStTerimaSetoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st_terima_setorans', function (Blueprint $table) {
            $table->bigIncrements('id_stts');

            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('wajib_pajaks')->onDelete('cascade');

            $table->binary('file_stts');
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
        Schema::dropIfExists('st_terima_setorans');
    }
}
