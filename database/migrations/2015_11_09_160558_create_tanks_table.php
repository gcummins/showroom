<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->integer('year')->unsigned();
            $table->string('make');
            $table->string('model');
            $table->string('dotCode');
            $table->string('capacity');
            $table->integer('compartments')->unsigned();
            $table->string('bulkheads');
            $table->string('compartmentSizes');
            $table->string('pumps');
            $table->string('pto');
            $table->string('meters');
            $table->string('spitTanks');
            $table->string('hoseReels');
            $table->string('deliveryHoses');
            $table->string('nozzles');
            $table->string('dryBreakManifold');
            $table->string('bottomLoad');
            $table->string('vk');
            $table->string('ip');
            $table->text('comments');

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
        Schema::drop('tanks');
    }
}
