<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('tanggal_lahir');
            $table->string('no_telepon');
            $table->string('agama');
            $table->string('alamat');
            $table->string('status_anggota')->nullable();
            $table->string('judul_buku');
            $table->string('tanggal_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('status_anggota');
        });
    }
}
;
