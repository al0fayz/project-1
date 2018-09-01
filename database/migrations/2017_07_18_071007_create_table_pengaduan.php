<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengaduan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
			Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nik');
            $table->date('tanggal');
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
		Schema::drop('pengaduan');
    }
}
