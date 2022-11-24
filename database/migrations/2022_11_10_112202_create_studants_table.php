<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->string('behaviour')->nullable();
            $table->string('name_studant')->nullabel();
            $table->string('age')->nullabel();
            $table->string('certificate')->nullable();
            $table->Integer('accept');
            $table->integer('class')->nullable();
            $table->integer('division')->nullable();
            $table->string('Address')->nullable();
            $table->string('photo')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studants');
    }
}
