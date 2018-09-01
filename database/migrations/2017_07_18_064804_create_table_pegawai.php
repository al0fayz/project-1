<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		 Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 50)->unique;
            $table->string('nama', 50);
            $table->string('tempat_lahir');
			$table->date('tanggal_lahir');
			$table->enum('jenis_kelamin', ['L', 'P']);
			$table->string('agama', 25);
			$table->string('status', 25);
			$table->string('jabatan', 50);
			$table->string('email');
			$table->string('no_telp', 15);
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
		 Schema::drop('pegawai');
    }
}
