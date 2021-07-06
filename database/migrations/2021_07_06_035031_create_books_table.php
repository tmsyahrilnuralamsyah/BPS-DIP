<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('noTm');
            $table->string('pengirim');
            $table->string('noSm');
            $table->date('tanggalSm');
            $table->string('ringkasM');
            $table->date('tanggalDiterima');
            $table->string('disposisi');
            $table->string('ketDisposisi');
            $table->string('noteDisposisi');
            $table->text('catDisposisi');
            $table->text('catDisposisi2');
            $table->string('kode');
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
        Schema::dropIfExists('books');
    }
}
