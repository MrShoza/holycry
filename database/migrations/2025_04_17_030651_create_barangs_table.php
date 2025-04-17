<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('idbarang'); // ini key utamanya
            $table->string('namabarang');
            $table->string('kategoribarang');
            $table->integer('jumlahstok');
            $table->decimal('hargabarang', 10, 2);
            $table->date('tanggalmasuk'); // PENTING: jangan typo 'tangal'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
