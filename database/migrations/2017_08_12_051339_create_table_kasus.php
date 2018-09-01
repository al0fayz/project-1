<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKasus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		 Schema::create('kasus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bulan', 50)->unique;
			$table->integer('tahun');
            $table->integer('perjudian');
			$table->integer('pencurian');
			$table->integer('sexual');
			$table->integer('lain');
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
        //
		Schema::drop('kasus');
    }
}
