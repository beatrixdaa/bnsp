<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAuthorsTableNullableNoTelepon extends Migration
{
    public function up()
    {
        Schema::table('authors', function (Blueprint $table) {
            // Mengubah kolom no_telepon menjadi nullable
            $table->string('no_telepon')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            // Mengembalikan kolom no_telepon menjadi tidak nullable
            $table->string('no_telepon')->nullable(false)->change();
        });
    }
}
