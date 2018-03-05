<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppAsinMonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_asin_mon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asin');
            $table->string('asin_img');
            $table->string('sasin');
            $table->string('name');
            $table->string('user');
            $table->string('brand');
            $table->string('buybox');
            $table->string('followsellers');
            $table->string('criticalreviewids');
            $table->dateTime('timeline');
            $table->integer('crstatus');
            $table->integer('fsstatus');
            $table->integer('totalreview');
            $table->integer('vp');
            $table->integer('bsr');
            $table->float('price');
            $table->float('stars');
            $table->integer('qa');
            $table->integer('sellers');
            $table->integer('active');
            $table->integer('status');
            $table->string('title');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_asin_mon');
    }
}
