<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('card_name');
            $table->string('card_text');
            $table->integer('column_id')->unsigned();
            $table->timestamps();

            $table->foreign('column_id')
                ->references('id')
                ->on('columns')
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
        Schema::drop('cards');
    }
}
