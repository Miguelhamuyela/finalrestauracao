<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coworks', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->longText('activities');

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
        Schema::dropIfExists('coworks');
    }
}
