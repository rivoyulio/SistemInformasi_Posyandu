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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->char('nib',10)->unique();
            $table->string('nama',50);
            $table->date('tanggal');
            $table->char('jenis_kelamin',1);
            $table->string('nama_ibu',50);
            $table->string('nama_ayah',50);
            $table->string('alamat')->nullable();
            $table->char('berat_badan',2);
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
        Schema::dropIfExists('balitas');
    }
};
