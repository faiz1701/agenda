<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('namaguru');
            $table->string('mapel');
            $table->string('materipelajaran');
            $table->string('mulaipembelajaran');
            $table->string('akhirpembelajaran');
            $table->string('siswatidakhadir');
            $table->string('namakelas');
            $table->enum('jenispembelajaran', ['online', 'offline']);
            $table->string('linkpembelajaran');
            $table->string('dokumentasi');
            $table->string('keterangan');
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
        Schema::dropIfExists('agendas');
    }
};
