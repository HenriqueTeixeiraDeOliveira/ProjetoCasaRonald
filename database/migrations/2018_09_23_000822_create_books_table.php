<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('library_id');
            $table->string('title');
            $table->string('genre');
            $table->unsignedSmallInteger('pages');      // Range: 0 to 65,535
            $table->string('author');
            $table->string('publisher');
            $table->string('barcode');
            $table->string('year');
            $table->string('x_position');
            $table->string('y_position');
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
