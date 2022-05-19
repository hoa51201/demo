<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDouongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('douong', function (Blueprint $table) {
            $table->id();
            $table->string('tendouong')->unique();
            $table->integer('gia')->default(0);
            $table->integer('loaidouong_id')->index()->default(0);
            $table->string('hinhanh')->nullable();
            $table->integer('soluongconlai')->default(0);
            $table->text('mota')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('douong');
    }
}
