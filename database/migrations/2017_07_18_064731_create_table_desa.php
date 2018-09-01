<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('desa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_desa', 50)->unique;
            $table->string('alamat');
            $table->string('no_telp', 15);
			$table->integer('kode_pos');
			$table->string('icon')->nullable();
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
		 Schema::drop('desa');
    }
}
