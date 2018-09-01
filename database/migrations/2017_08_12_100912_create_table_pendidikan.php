<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tahun');
			$table->integer('sd');
            $table->integer('smp');
			$table->integer('sma');
			$table->integer('d3');
			$table->integer('s1');
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
        Schema::drop('pendidikan');
    }
}
