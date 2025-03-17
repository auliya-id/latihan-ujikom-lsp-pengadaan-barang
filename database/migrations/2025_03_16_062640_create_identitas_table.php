<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->bigIncrements('id_identitas', true);
            $table->string('nama_identitas')->nullable();
            $table->string('badan_hukum')->nullable();
            $table->string('npwp')->nullable();
            $table->string('email')->nullable();
            $table->text('url')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('fax')->nullable();
            $table->string('rekening')->nullable();
            $table->text('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identitas');
    }
}
