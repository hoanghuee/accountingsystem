<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuChiMuaHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_chi_mua_hang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('phieuchi_id');
            $table->bigInteger('muahang_id')->nullable();
            $table->bigInteger('so_tien');
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
        Schema::dropIfExists('phieu_chi_mua_hang');
    }
}
