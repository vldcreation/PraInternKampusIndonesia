<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_details', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('path_logo',255)->nullable();
            $table->string('path_background',255)->nullable();
            $table->string('akreditasi');
            $table->string('jenis');
            $table->integer('lokasi');
            $table->longText('deskripsi')->nullable()->change();
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
        Schema::dropIfExists('campus_details');
    }
}
