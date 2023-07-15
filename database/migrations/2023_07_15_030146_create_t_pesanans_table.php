<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pesanan');
            $table->dateTime('tanggal');
            $table->string('nm_supplier');
            $table->string('nm_produk');
            $table->float('total');
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
        Schema::dropIfExists('t_pesanans');
    }
};
