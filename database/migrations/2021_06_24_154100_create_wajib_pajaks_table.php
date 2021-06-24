<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWajibPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wajib_pajaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nop', 60);
            $table->string('nama_wp', 100);
            $table->text('alamat_wp');
            $table->string('no_telp', 15);

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
        Schema::dropIfExists('wajib_pajaks');
    }
}
