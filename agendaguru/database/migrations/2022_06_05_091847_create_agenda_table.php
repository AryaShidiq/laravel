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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('namaguru');
            $table->foreignId('kelas_id')->constrained('kelas');
            // $table->string('namakelas');         
            $table->enum('mapel',['rpl','mm','tkj','bc','tei']);
            $table->string('matpel');
            $table->date('tanggal');
            $table->time('mulai');
            $table->time('selesai');
            $table->enum('jenispembelajaran',['of','on']);
            $table->string('link')->nullable();
            $table->string('dokumentasi');
            $table->string('absen');
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
        Schema::dropIfExists('agenda');
    }
};
