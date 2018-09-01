<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDsusaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domisili_usaha', function (Blueprint $table) {
            $table->string('nik')->unique();
			$table->string('nama_usaha');
            $table->string('no_doc');
			$table->string('penanggung_jawab');
			$table->string('jenis_kegiatan');
			$table->float('luas');
			$table->float('luas_ruang');
			$table->integer('karyawan');
			$table->string('status_bangunan');
			$table->string('alamat_usaha');
			$table->string('no_ijin');
			$table->date('tanggal_ijin');
			$table->integer('notaris');
			$table->integer('no_notaris');
			$table->date('tanggal_notaris');
			$table->date('tanggal');
			$table->string('no_telp', 50);
			$table->string('email', 50);
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
        Schema::drop('domisili_usaha');
    }
}
