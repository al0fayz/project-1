<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('usaha', function (Blueprint $table) {
            $table->string('nik')->unique();
            $table->string('no_doc');
			$table->string('alamat_usaha');
			$table->date('tanggal');
			$table->string('no_telp', 50);
			$table->string('email', 50);
			$table->string('klasifikasi');
			$table->integer('tahun');
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
        Schema::drop('usaha');
    }
}
