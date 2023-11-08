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
        Schema::create('spop', function (Blueprint $table) {
            $table->char('KD_PROPINSI', 2);
            $table->char('KD_DATI2', 2);
            $table->char('KD_KECAMATAN', 3);
            $table->char('KD_KELURAHAN', 3);
            $table->char('KD_BLOK', 3);
            $table->char('NO_URUT', 4);
            $table->char('KD_JNS_OP', 1);
            $table->string('SUBJEK_PAJAK_ID', 30)->index('SUBJEK_PAJAK_ID');
            $table->string('NO_FORMULIR_SPOP', 11)->nullable();
            $table->string('JNS_TRANSAKSI_OP', 1);
            $table->string('KD_PROPINSI_BERSAMA', 2)->nullable();
            $table->string('KD_DATI2_BERSAMA', 2)->nullable();
            $table->string('KD_KECAMATAN_BERSAMA', 3)->nullable();
            $table->string('KD_KELURAHAN_BERSAMA', 3)->nullable();
            $table->string('KD_BLOK_BERSAMA', 3)->nullable();
            $table->string('NO_URUT_BERSAMA', 4)->nullable();
            $table->string('KD_JNS_OP_BERSAMA', 1)->nullable();
            $table->string('KD_PROPINSI_ASAL', 2)->nullable();
            $table->string('KD_DATI2_ASAL', 2)->nullable();
            $table->string('KD_KECAMATAN_ASAL', 3)->nullable();
            $table->string('KD_KELURAHAN_ASAL', 3)->nullable();
            $table->string('KD_BLOK_ASAL', 3)->nullable();
            $table->string('NO_URUT_ASAL', 4)->nullable();
            $table->string('KD_JNS_OP_ASAL', 1)->nullable();
            $table->string('NO_SPPT_LAMA', 4)->nullable();
            $table->string('JALAN_OP', 30);
            $table->string('BLOK_KAV_NO_OP', 15)->nullable();
            $table->string('KELURAHAN_OP', 30)->nullable();
            $table->string('RW_OP', 2)->nullable();
            $table->string('RT_OP', 3)->nullable();
            $table->string('KD_STATUS_WP', 1);
            $table->bigInteger('LUAS_BUMI');
            $table->string('KD_ZNT', 2)->nullable();
            $table->string('JNS_BUMI', 1);
            $table->bigInteger('NILAI_SISTEM_BUMI')->default(0);
            $table->date('TGL_PENDATAAN_OP');
            $table->string('NM_PENDATAAN_OP', 30)->nullable();
            $table->string('NIP_PENDATA', 20)->nullable();
            $table->date('TGL_PEMERIKSAAN_OP');
            $table->string('NM_PEMERIKSAAN_OP', 30)->nullable();
            $table->string('NIP_PEMERIKSA_OP', 20)->nullable();
            $table->string('NO_PERSIL', 5)->nullable();

            $table->primary(['KD_PROPINSI', 'KD_DATI2', 'KD_KECAMATAN', 'KD_KELURAHAN', 'KD_BLOK', 'NO_URUT', 'KD_JNS_OP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spop');
    }
};
