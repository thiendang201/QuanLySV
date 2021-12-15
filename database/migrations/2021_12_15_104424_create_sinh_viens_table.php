<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_viens', function (Blueprint $table) {
            $table->char("id", 13)->primary();
            $table->string('hoTen');
            $table->tinyInteger('gioiTinh');
            $table->date('ngaySinh');
            $table->string('email');
            $table->string('sdt', 10);
            $table->string('diaChi');
            $table->string('CCCD', 12);
            $table->string('anhDaiDien');
            $table->foreignId('maLop')->references('id')->on('lops');
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
        Schema::dropIfExists('sinh_viens');
    }
}
