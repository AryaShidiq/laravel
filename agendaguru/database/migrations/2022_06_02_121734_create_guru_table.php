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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->unique();
            $table->string('namaguru',20);
            $table->foreignId('mapel_id');
            // $table->enum('mapel',['rpl','mm','tkj','bc','tei']);
            $table->string('userguru');
            $table->string('passguru');
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
        Schema::dropIfExists('guru');
    }
};
