<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudantStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('studant_statuses')) return; 
        Schema::create('studant_statuses', function (Blueprint $table){
        $table->id();
            $table->integer('studant_statuse');
            $table->string('note');
            $table->bigInteger('studant_id')->unsigned();
            $table->timestamps();
            $table->foreign('studant_id')->references('id')->on('studants')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
