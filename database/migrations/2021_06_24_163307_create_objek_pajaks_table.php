<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek_pajaks', function (Blueprint $table) {
            $table->bigIncrements('id_op');

            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('wajib_pajaks')->onDelete('cascade');

            $table->string('letak_op', 100);
            $table->string('op', 100);
            $table->string('kelas', 50);
            $table->string('luas_m2', 20);
            $table->string('objek_pajak', 100);
            $table->string('njop_m2', 60);
            $table->date('jatuh_tempo');
            $table->char('total_njop', 50);
            $table->char('pbb_terhutang', 50);
            $table->char('pbb_harus_dibayar', 50);

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
        Schema::dropIfExists('objek_pajaks');
    }
}
