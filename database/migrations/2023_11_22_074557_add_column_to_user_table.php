<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->default('active');
            $table->string('role')->default('user');
            $table->string('jabatan')->nullable();
            $table->string('nip')->nullable();
            $table->string('nomor_ponsel')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('role');
            $table->dropColumn('jabatan');
            $table->dropColumn('nip');
            $table->dropColumn('nomor_ponsel');
        });
    }
};
