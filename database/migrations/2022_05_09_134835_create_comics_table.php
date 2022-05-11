<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 70);
            $table->text('description');
            $table->string('thumb', 250)->default('https://kbimages1-a.akamaihd.net/795d78ec-0caf-4c2b-9301-b388622ec93d/1200/1200/False/one-punch-man-vol-21.jpg')->nullable();
            $table->integer('price');
            $table->string('series', 250);
            $table->date('sale_date');
            $table->string('type', 20);
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
        Schema::dropIfExists('comics');
    }
}
