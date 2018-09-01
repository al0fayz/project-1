<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->string('tentang');
            $table->string('isi', 1000);
			$table->string('foto')->nullable;
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
		Schema::drop('info');
    }
}
