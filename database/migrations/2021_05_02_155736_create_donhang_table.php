<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0)->index();
            $table->string('hoten')->nullable();
            $table->string('diachi')->nullable();
            $table->string('sodienthoai')->nullable();
            $table->string('email')->nullable();
            $table->integer('tongtien')->default(0);
            $table->dateTime('ngaytao');
            $table->integer('trangthai')->default(1);
            $table->text('ghichu')->nullable();
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
        Schema::dropIfExists('donhang');
    }
}
