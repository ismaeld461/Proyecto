<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
             $table->id();
             $table->string('Area');
             $table->string('Serie');
             $table->string('Subserie');
             $table->string('Consecutivo');
             $table->string('Folios');
             $table->string('n_carpeta');
             $table->string('n_caja');
             $table->string('n_estante');
            $table->string('n_entrepaño');
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
}
