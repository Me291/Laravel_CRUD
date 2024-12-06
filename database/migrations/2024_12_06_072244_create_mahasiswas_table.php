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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('jurusan');
            $table->text('alamat');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
    
};
