<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasyarakat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('masyarakat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama');
			$table->string('tempat_lahir', 50);
			$table->date('tanggal_lahir');
			$table->enum('jenis_kelamin', ['L', 'P']);
			$table->string('agama', 50);
			$table->string('status', 50);
			$table->string('pekerjaan');
			$table->string('alamat', 100);
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
		Schema::drop('masyarakat');
    }
}
