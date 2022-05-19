<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonnhap', function (Blueprint $table) {
            $table->id();
            $table->integer('nhacungcap_id')->index()->default(0);
            $table->datetime('ngaynhap');
            $table->string('nhanvien')->nullable();
            $table->integer('tongtien')->default(0);
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
        Schema::dropIfExists('hoadonnhap');
    }
}