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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim')->unique();
            $table->string('password');
            $table->string('slug');
            $table->foreignId('dinas_id');
            $table->foreignId('divisi_id')->nullable();
            $table->string('ttl');
            $table->string('gender');
            $table->string('alamat');
            $table->string('jabatan');
            $table->string('hobi');
            $table->string('email');
            $table->string('instagram');
            $table->text('kesan_pesan');
            $table->integer("angkatan");
            $table->integer("periode");
            $table->string('picture')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('staff');
    }
};
