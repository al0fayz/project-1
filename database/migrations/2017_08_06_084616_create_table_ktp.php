<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKtp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->string('nik')->unique();
			$table->string('no_kk');
            $table->string('no_doc');
			$table->string('kewarganegaraan');
			$table->date('tanggal');
			$table->string('no_telp', 50);
			$table->string('email', 50);
			$table->string('ayah', 50);
			$table->string('ibu', 50);
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
        Schema::drop('ktp');
    }
}
