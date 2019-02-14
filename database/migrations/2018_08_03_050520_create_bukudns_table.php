<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukudnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukudns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaBuku');
            $table->string('penulis');
            $table->string('namaPenerbit');
            $table->integer('tahunTerbit');
            $table->string('kotaPenerbit');
            $table->string('mataPelajaran');
            $table->string('bahasa');
            $table->string('tingkatPendidikan');
            $table->string('jurusan');
            $table->integer('edisi');
            $table->string('rakBuku');
            $table->string('jumlahBuku');
            $table->string('gambarBukuDepan');
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
        Schema::dropIfExists('bukudns');
    }
}
