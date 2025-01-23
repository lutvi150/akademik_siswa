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
        Schema::create("table_siswa", function (Blueprint $table) {
            $table->id();
            $table->string("nama_siswa");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->integer("anak_ke");
            $table->integer("no_telp_rumah");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
