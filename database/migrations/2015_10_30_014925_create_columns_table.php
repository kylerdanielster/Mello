<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('columns', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('column_name');
            $table->integer('board_id')->unsigned();
            $table->timestamps();

            $table->foreign('board_id')
                ->references('id')
                ->on('board')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('columns');
    }
}
