<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturesSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufactures_softwares', function (Blueprint $table) {
            $table->id();

            $table->string('nameSoftware');
            $table->string('category');
            $table->longText('description');
            $table->string('file')->nullable();

            $table->unsignedBigInteger('fk_Scheldules_id');
            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_Payments_id');
            $table->foreign('fk_Payments_id')->references('id')->on('payments')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_Clients_id');
            $table->foreign('fk_Clients_id')->references('id')->on('clients')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
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
        Schema::dropIfExists('manufactures_softwares');
    }
}
