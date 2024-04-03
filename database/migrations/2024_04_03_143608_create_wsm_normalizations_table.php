<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsmNormalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsm_normalizations', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 20);
            $table->string('nama');
            $table->decimal('utilisasi', 5, 2);
            $table->decimal('availability', 5, 2);
            $table->decimal('reliability', 5, 2);
            $table->decimal('idle', 5, 2);
            $table->decimal('jam_tersedia', 5, 2);
            $table->decimal('jam_operasi', 5, 2);
            $table->decimal('jam_bda', 5, 2);
            $table->integer('jumlah_bda');
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
        Schema::dropIfExists('wsm_normalizations');
    }
}
